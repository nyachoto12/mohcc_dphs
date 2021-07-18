@extends('layouts.doctors')

@section('content')
    {{-- <h5 class="text-success pt-1 pl-5 ml-5" style="position: relative; left : 90px">You are here : Home/Doctor/Create an appointment</h5> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12" style="position: relative;">


                <div class="card">

                    <div class="card-header text-center bg-success text-light">Doctor {{$appointment->fullname}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                    </div>

                </div>


            </div>
        </div>
    </div>
    @endsection
