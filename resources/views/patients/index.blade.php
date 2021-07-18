@extends('layouts.patient')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            @if (session('status'))
            <div class="alert alert-success mt-2" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <div class="card col-md-12">
                <div class="card-header text-center text-light bg-success ">{{ $user->patient->fullname }}</div>

                <div class="card-body">
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
                                      <a href="/myrequests">
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
                            {{-- <div class="col-xl-6 col-sm-6 col-12 mb-4">
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
                            </div> --}}

                        </div>
                    </section>
                    <div class="row m-5">
                        <h4 class="ml-5">My Appointments</h4>
                        <table class="table table-striped" id="data">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Doctor Name</th>
                                    <th scope="col">My Appointment</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apt as $r)
                                    <tr>
                                        <th scope="row">{{ $r->user_id }}</th>
                                        <td>{{ $r->fullname }}
                                        </td>
                                        <td>{{ $r->appointment }}</td>

                                        <td>{{ $r->date }}</td>
                                        <td>{{ $r->address }}</td>
                                        <td>
                                            <a href="" class="text-white">
                                                <h5 class=" btn btn-danger">Update</h5>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
