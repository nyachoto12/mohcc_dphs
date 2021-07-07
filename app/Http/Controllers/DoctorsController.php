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
        $apts = DB::table('appointments')->get();
        // getting all patients
        $users = DB::table('users')->where('role', 'Doctor')->get();
        //getting requests filtered by location
        $reqs = DB::table('requests')->get();
        // joining patient and requests table
        $users2 = DB::table('patients')
            ->join('requests', 'patients.id', '=', 'requests.user_id')
            ->get();
            $requests = DB::table('requests')->pluck('request');
        //dd($users);
        return view('doctors.index',[
            'user' => $user,
             'req' => $requests,
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
        return view('doctors.create');
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
            'age' => 'required',
            'gender' => 'required',
            'location' => 'required',
            'speciality' => 'required',

          ]);
          auth()->user()->doctor()->create([
              'fullname' => $data['fullname'],
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
