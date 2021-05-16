<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index($user)
    {
        $user = User::findOrfail($user);
        $reqs = DB::table('requests')->get();
        $name = DB::table('requests')->pluck('fullname');
        $apts = DB::table('appointments')->where('patient', $name)->get();
       // dd($name, $apts);
        return view('patients.index',[
           'user' => $user,
           'req' => $reqs,
           'apt'=> $apts,
        ]);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
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
