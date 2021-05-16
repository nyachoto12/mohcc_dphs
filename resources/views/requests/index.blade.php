@extends('layouts.header')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
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
                                <div class="col-xl-12 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>

                                                        @if (count($req) == 0)
                                                            <h3 class="text-info">No requests yet</h3>
                                                        @else
                                                            <h3 class="text-info">{{ $req }}</h3>

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



                            </div>
                        </section>
                        <!--Section: Minimal statistics cards-->
                        {{-- graphical representation of patients --}}

                </div>
            </div>
        </div>
    </div>

@endsection
