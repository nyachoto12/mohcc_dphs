<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Patient;

class PatientsController extends Controller
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
    public function index(\App\Models\User $user, \App\Models\Patient $patient)
    {

        $userz2 = Auth::user()->name;
        $userz = Auth::user()->id;
        $apts = DB::table('appointments')->where('patient', $userz2)->get();
        $reqs2 = DB::table('requests')
        ->where('fullname', $userz2)
        ->get();
       $patients = DB::table('patients')->where('user_id', $userz )->get();

        //dd($patients);
        return view('patients.index', compact('patient','apts','reqs2','user', 'patients'));
    }
    public function patient()
    {
        $user = Auth::user()->id;

        $users = DB::table('patients')
        ->where('user_id', $user)
        ->get();

        // dd($user,$users);
        return view('patient', ['userz' => $users]);
    }
    public function patientRequest()
    {
        $user = Auth::user()->name;

        $reqs = DB::table('requests')
        ->where('fullname', $user)
        ->get();

        //dd($reqs,$user);
        return view('patients.patientRequest', ['req' => $reqs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //dd($speciality);
        return view('patients.create',);
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
            'occupation' => 'required',

          ]);
          auth()->user()->patient()->create([
              'fullname' => $data['fullname'],
              'age' => $data['age'],
              'gender' => $data['gender'],
              'location' => $data['location'],
              'occupation' => $data['occupation'],

          ]);

          return redirect()->route('patient.index')->with("Data Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Models\Patient $patient, \App\Models\User $user)
    {

        $reqs = DB::table('requests')->get();
        $userz2 = Auth::user()->name;
        $userz = Auth::user()->id;
        $apts = DB::table('appointments')->where('patient', $userz2)->get();
        $reqs2 = DB::table('requests')
        ->where('fullname', $userz2)
        ->get();
        $patients = DB::table('patients')->where('user_id', $userz )->get();
        //dd($userz2, $apts);
        return view('patients.show', compact('patient','apts', 'reqs2','user','patients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Models\User $user, \App\Models\Patient $patient )
    {
       return view('patients.edit', compact('user', 'patient'));
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
        $data = request()->validate([
            'fullname' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'location' => 'required',
            'occupation' => 'required',

          ]);
            //get training data
         $pData = $request->all();
         //update training data
          Patient::find($id)->update($pData);

          //dd($trainingData);

          return redirect()->route('patient.index')-> with('info','Data Updated Successfully');;

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
