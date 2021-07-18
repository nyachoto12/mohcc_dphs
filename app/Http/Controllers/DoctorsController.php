<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth']);
        // $this->middleware(['auth','verified']);
    }
    public function index($user)
    {
        $user = User:: find($user);
        //get all the appointments
        $userz2 = Auth::user()->name;
        $apts = DB::table('appointments')->where('fullname', $userz2)->get();

        // getting all patients
        $userz = Auth::user()->id;
        $users = DB::table('doctors')->where('user_id', $userz)->pluck('speciality');
        //$users5 = DB::table('users')->where('role', 'Doctor')->get();
        //getting requests filtered by location
        $reqs = DB::table('requests')->where('speciality', $users)->get();
        // joining patient and requests table
        $users2 = DB::table('patients')
            ->join('requests', 'patients.id', '=', 'requests.user_id')
            ->get();
            $requests = DB::table('requests')->get();
            $request = DB::table('requests')->pluck('request');
          //dd($users,$reqs);
        return view('doctors.index',[
            'user' => $user,
             'req' => $requests,
            'patient' => $reqs,
             'apt' => $apts,
            ]);

    }
    public function doctor(){

        $user = Auth::user()->id;

        $users = DB::table('doctors')
        ->where('user_id', $user)
        ->get();

        // dd($user,$users);

        return view ('doctor',[ 'userz'=> $users ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userz = Auth::user()->id;
        // $users = DB::table('doctors')->where('user_id', $userz)->pluck('speciality');
        // //$users5 = DB::table('users')->where('role', 'Doctor')->get();
        // //getting requests filtered by location
        // $reqs = DB::table('requests')->where('speciality', $users)->get();
        $speciality = DB::table('specialists')->get();
        return view('doctors.create',
        ['speciality'=> $speciality,
        //  'patient' => $req
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
            'phone' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'location' => 'required',
            'speciality' => 'required',

          ]);
          auth()->user()->doctor()->create([
              'fullname' => $data['fullname'],
              'phone' => $data['phone'],
              'age' => $data['age'],
              'gender' => $data['gender'],
              'location' => $data['location'],
              'speciality' => $data['speciality'],

          ]);

           return redirect('/doctor/'. auth()->user()->id);
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
    public function edit(\App\Models\User $user)
    {
        $speciality = DB::table('specialists')->get();
       return view('doctors.edit', compact('user','speciality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Models\User $user)
    {
        $data = request()->validate([
            'fullname' => 'required',
            'phone' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'location' => 'required',
            'speciality' => 'required',

          ]);
         // dd($data);
         auth()->user()->doctor()->update($data);

          return redirect('/d/'. auth()->user()->id)->with('status','Profile Was Updated Successfully');
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
