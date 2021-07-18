<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //getting requests filtered by location
       $reqs = DB::table('requests')->get();

       //dd($reqs);
       return view('doctors.requestsAll',['req' => $reqs]);
    }
    public function request($user)
    {
        $user = Auth::user()->patient()->pluck("user_id");
        $reqs = DB::table('requests')->where('user_id', $user)->get();
        //dd($reqs, $user);
        return view('requests.index',[
           'req' => $reqs,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $speciality = DB::table('specialists')->get();
        return view('requests.create',['speciality'=>$speciality]);
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
            'phone' => 'required',
            'speciality' => 'required',
            'location' => 'required',
            'request' => 'required'
          ]);
          auth()->user()->request()->create([
              'fullname' => $data['fullname'],
              'phone' => $data['phone'],
              'speciality' => $data['speciality'],
              'location' => $data['location'],
              'request' => $data['request'],
          ]);

           return redirect('/patient/'. auth()->user()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
