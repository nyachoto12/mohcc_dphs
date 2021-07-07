@extends('layouts.patient')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="card col-md-12">
                <div class="card-header text-center text-light bg-success ">{{ $user->patient->fullname }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!--Section: Minimal statistics cards-->
                    <section>
                        <div class="row">
                            @if (count($apt) == 0)
                                <div class="col-xl-6 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>

                                                    <p class="mb-0">No appointments</p>

                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-calendar-check fa-3x text-warning"></i>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-xl-6 col-sm-6 col-12 mb-4" style="height: 20px">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>

                                                    <p class="mb-0">My Appointments</p>
                                                    <h3 class="text-info " style="position: relative; left: 40px">
                                                        {{ 0 + count($apt) }}</h3>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-calendar-check fa-3x text-warning"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="col-xl-6 col-sm-6 col-12 mb-4">
                                <div class="card">
                                    @if (count($req) == 0)
                                        <a href="/p/create">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between px-md-1">
                                                    <div>

                                                        <p class="mb-0">New Request</p>
                                                    </div>
                                                    <div class="align-self-center">
                                                        <i class="fas fa-clipboard-list text-info fa-3x"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                    @else

                                        <div class="card-body">

                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>

                                                    <p class="mb-0">My Requests </p>

                                                    <h3 class="text-info " style="position: relative; left: 40px">
                                                        {{ $user->request->count() }}</h3>


                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-clipboard-list text-info fa-3x"></i>
                                                </div>
                                            </div>

                                        </div>
                                        </a>

                                    @endif
                                </div>
                            </div>


                            {{-- <div class="col-xl-6 col-sm-6 col-12 mb-4">
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

                                        </div>
                                    </div>
                                </div> --}}
                            <div class="col-xl-6 col-sm-6 col-12 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between px-md-1">
                                            <div>

                                                <p class="mb-0">My Bills</p>
                                            </div>
                                            <div class="align-self-center">
                                                <i class="fas fa-check text-success fa-3x"></i>
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
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h6>Developed and Designed by <span class="text-success">Ngonidzashe Nyachoto</span></h6>
            </div>
        </div>
    </div>

@endsection
