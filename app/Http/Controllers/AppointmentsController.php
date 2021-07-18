<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->name;
        $apts = DB::table('appointments')->where('fullname', $user)->get();
        //dd($apts);
        return view('apts.index',['apt' => $apts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          //getting requests filtered by location
          $reqs = DB::table('requests')->get();
          $users = DB::table('users')->where('role', 'Doctor')->get();


          $userz = Auth::user()->id;
          $users1 = DB::table('doctors')->where('user_id', $userz)->pluck('speciality');
          //$users5 = DB::table('users')->where('role', 'Doctor')->get();
          //getting requests filtered by location
          $reqs4 = DB::table('requests')->where('speciality', $users1)->get();
        //dd($reqs4);
          return view('apts.create',
          ['req' => $reqs,
           'doc' => $users,
            'patient' => $reqs4
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'fullname' => 'required',
            'patient' => 'required',
            'appointment' => 'required',
            'date' => 'required',
            'address' => 'required'
          ]);
          auth()->user()->appointment()->create([
              'fullname' => $data['fullname'],
              'patient' => $data['patient'],
              'appointment' => $data['appointment'],
              'date' => $data['date'],
              'address' => $data['address'],
          ]);

           return redirect('/doctor/'. auth()->user()->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( \App\Models\Appointment $appointment)
    {
        return view('apts.show', \compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
