<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function create()
    {
        return view('welcome');
    }
    public function store(Request $request)
    {
    $data = \App\Models\Issue::create([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'issue' => $request->issue,
    ]);
    //return Response::json($data);

    return redirect('/')->with('success','Your Message Was Send Successfully');
}
}
