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
    public function index(\App\Models\User $user,\App\Models\Doctor $doctor)
    {

        //get all the appointments
        $userz2 = Auth::user()->name;
        $apts = DB::table('appointments')->where('fullname', $userz2)->get();

        // // getting all patients
       $userz = Auth::user()->id;
       $users = DB::table('doctors')->where('user_id', $userz)->pluck('speciality');

      $reqs = DB::table('requests')->where('speciality', $users)->orderBy('created_at','asc')->get();
      $data = DB::table('doctors')->where('user_id', $userz)->get();
        //dd($apts, $data,$reqs);
        return view('doctors.index', compact('doctor','reqs','data','apts'));

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
        $speciality = DB::table('specialists')->get();
        //dd($speciality);
        return view('doctors.create',
        ['speciality'=> $speciality,
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

           return redirect()->route('doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Models\Doctor $doctor, \App\Models\User $user)
    {

        //get all the appointments
        $userz2 = Auth::user()->name;
        $apts = DB::table('appointments')->where('fullname', $userz2)->get();

        // getting all patients
        $userz = Auth::user()->id;
        $users = DB::table('doctors')->where('user_id', $userz)->pluck('speciality');

        $reqs = DB::table('requests')->where('speciality', $users)->get();

        $users2 = DB::table('patients')
            ->join('requests', 'patients.id', '=', 'requests.user_id')
            ->get();
            $requests = DB::table('requests')->get();
            $request = DB::table('requests')->pluck('request');

        //dd($apts);
        return view('doctors.show', compact('users','apts', 'reqs','user','users2','doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Models\User $user, \App\Models\Doctor $doctor)
    {
        $speciality = DB::table('specialists')->get();
        //dd($doctor);
       return view('doctors.edit', compact('user','speciality', 'doctor'));
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

         return redirect()->route('doctor.index')-> with('info','Data Updated Successfully');;
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
