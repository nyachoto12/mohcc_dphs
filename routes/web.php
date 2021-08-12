<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/email', function () {
    return new App\Mail\NewUserMail();
});

Auth::routes(['verify' => true]);

Route::get('/', 'App\Http\Controllers\IssueController@create');
Route::post('/issue', 'App\Http\Controllers\IssueController@store');
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('doctor', 'App\Http\Controllers\DoctorsController');
    Route::resource('appointment', 'App\Http\Controllers\AppointmentsController');
    //Route::get('/doctors', 'App\Http\Controllers\DoctorsController@doctor')->name('doctor');
    // Route::get('/d/{user}', 'App\Http\Controllers\DoctorsController@index');
    // Route::get('/d/create', 'App\Http\Controllers\DoctorsController@create');
    // Route::post('/d', 'App\Http\Controllers\DoctorsController@store');

    // Route::get('/doctor/{user}/edit', 'App\Http\Controllers\DoctorsController@edit')->name('doctors.edit');
    // Route::patch('/doctor/{user}', 'App\Http\Controllers\DoctorsController@update');
    // Route::get('/apt/create', 'App\Http\Controllers\AppointmentsController@create');
    // Route::post('/apt', 'App\Http\Controllers\AppointmentsController@store');
    // Route::get('/appointment', 'App\Http\Controllers\AppointmentsController@index')->name('index');
    // Route::get('/a/{appointment}', 'App\Http\Controllers\AppointmentsController@show');
     Route::get('/requests', 'App\Http\Controllers\RequestsController@index')->name('requestsAll');
});
Route::middleware(['auth', 'isPatient'])->group(function () {
    Route::resource('patient', 'App\Http\Controllers\PatientsController');
  //  Route::get('/patients', 'App\Http\Controllers\PatientsController@patient')->name('patient');
  //  Route::get('/p', 'App\Http\Controllers\PatientsController@head')->name('head');
    // Route::get('/p/{user}', 'App\Http\Controllers\PatientsController@index');


    Route::get('/p/create', 'App\Http\Controllers\RequestsController@create');
    Route::post('/p', 'App\Http\Controllers\RequestsController@store');

    Route::get('/patient/{user}/request', 'App\Http\Controllers\RequestsController@request');

    // Route::get('/pat/create', 'App\Http\Controllers\PatientsController@create');
    // Route::post('/pat', 'App\Http\Controllers\PatientsController@store');
    // Route::get('/patient/{user}/edit', 'App\Http\Controllers\PatientsController@edit')->name('patients.edit');
    // Route::patch('/patient/{user}', 'App\Http\Controllers\PatientsController@update');

    Route::get('/myrequests', 'App\Http\Controllers\PatientsController@patientRequest')->name('requestsAll');
});

