@extends('layouts.patient')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!--Section: Minimal statistics cards-->
                        <section>
                            <div class="row">

                                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                        <div class="card">
                                            @if (count($userz) == 0)
                                            <a href={{'/pat/create'}}>
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between px-md-1">
                                                        <div>

                                                            <p class="mb-0">Create your profile</p>
                                                        </div>
                                                        <div class="align-self-center">
                                                            <i class="fas fa-clipboard-list text-info fa-3x"></i>
                                                        </div>
                                                    </div>
                                                    <div class="px-md-1">
                                                        <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            @else
                                            <a href={{'/patient/'. auth()->user()->id}}>
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between px-md-1">
                                                        <div>

                                                            <p class="mb-0">My Profile</p>
                                                        </div>
                                                        <div class="align-self-center">
                                                            <i class="fas fa-clipboard-list text-info fa-3x"></i>
                                                        </div>
                                                    </div>
                                                    <div class="px-md-1">
                                                        <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            @endif


                                        </div>
                                    </div>


                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>
                                                    <h3 class="text-info">3</h3>
                                                    <p class="mb-0">Appointments</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-calendar-check fa-3x text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="px-md-1">
                                                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 10%" aria-valuenow="35" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>

                                                    <p class="mb-0">My Medical History</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-check text-success fa-3x"></i>
                                                </div>
                                            </div>
                                            <div class="px-md-1">
                                                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 5%" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>

                                                    <p class="mb-0">Billing</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-check text-success fa-3x"></i>
                                                </div>
                                            </div>
                                            <div class="px-md-1">
                                                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 5%" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
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
