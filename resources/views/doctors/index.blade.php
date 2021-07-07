@extends('layouts.doctors')

@section('content')
{{-- <h5 class="text-success pt-1 pl-5 ml-5" style="position: relative; left : 90px">You are here : Home/Doctor/Your Profile</h5> --}}
    <div class="container-fluid" >
        <div class="row justify-content-center" >
            <div class="col-md-11">
                <div class="card" >
                    <div class="card-header text-center text-light bg-success">Dr .{{ $user->doctor->fullname }}'s Dashboard
                    </div>

                    <div class="card-body ml-5">
                        @if (session('status'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!--Section: Minimal statistics cards-->
                        <section>
                            <div class="row ml-5">
                                <div class="col-xl-4 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>

                                                        @if (count($req) == 0)
                                                            <h3 class="text-info">No requests yet</h3>
                                                        @else
                                                            <h3 class="text-info">{{ count($req) }}</h3>
                                                            <p class="mb-0">Pending Requests</p>
                                                        @endif


                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-clipboard-list text-info fa-3x"></i>
                                                </div>
                                            </div>
                                            {{-- <div class="px-md-1">
                                                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>
                                                    <h3 class="text-warning">0</h3>
                                                    <p class="mb-0">Scheduled Appointments</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-calendar-check fa-3x text-warning"></i>
                                                </div>
                                            </div>
                                            {{-- <div class="px-md-1">
                                                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 10%" aria-valuenow="35" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>
                                                    <h3 class="text-success">0</h3>
                                                    <p class="mb-0">Follow Ups</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-check text-success fa-3x"></i>
                                                </div>
                                            </div>
                                            {{-- <div class="px-md-1">
                                                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 5%" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
