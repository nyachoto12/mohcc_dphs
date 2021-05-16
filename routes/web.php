<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/email', function () {
    return new App\Mail\WelcomeMail();
});

Auth::routes(['verify' => true]);
Route::get('send', 'NotifyController@index');
Route::get('mail', function () {
    $order = App\Order::find(1);

    return (new App\Notifications\StatusUpdate($order))
                ->toMail($order->user);
});
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('contact');
Route::get('/requests', 'App\Http\Controllers\RequestsController@index')->name('requestsAll');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('about');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/doctor', 'App\Http\Controllers\DoctorsController@doctor')->name('doctor');
    Route::get('/doctor/{user}', 'App\Http\Controllers\DoctorsController@index')->name('show');

    Route::get('/d/create', 'App\Http\Controllers\DoctorsController@create');
    Route::post('/d', 'App\Http\Controllers\DoctorsController@store');

    Route::get('/apt/create', 'App\Http\Controllers\AppointmentsController@create');
    Route::post('/apt', 'App\Http\Controllers\AppointmentsController@store');

});
Route::middleware(['auth', 'isPatient'])->group(function () {
    Route::get('/patient', 'App\Http\Controllers\PatientsController@patient')->name('patient');
    Route::get('/patient/{user}', 'App\Http\Controllers\PatientsController@index')->name('patient.show');


    Route::get('/p/create', 'App\Http\Controllers\RequestsController@create');
    Route::post('/p', 'App\Http\Controllers\RequestsController@store');

    Route::get('/pat/create', 'App\Http\Controllers\PatientsController@create');
    Route::post('/pat', 'App\Http\Controllers\PatientsController@store');
});
