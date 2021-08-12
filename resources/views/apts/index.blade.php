@extends('layouts.header')
@section('content')
            <div class="container-fluid" >
                <div class="row justify-content-center mt-5" >
                    <div class="col-md-11 mt-4">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="card" >
                            <div class="card-header text-center text-light bg-dark"> <h4>My Scheduled Appointments: Week</h4>
                            </div>

                            <div class="card-body ml-2">
                            </div>

                            <table class="table table-striped text-center table-responsive" id="data">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Patient Name</th>
                                        <th scope="col">Appointment</th>
                                        <th scope="col">Appointment Date</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($apt as $r)
                                        <tr>
                                            <th scope="row">{{ $r->id }}</th>
                                            <td>{{ $r->patient }}
                                            </td>
                                            <td>{{ $r->appointment }}</td>
                                            <td>{{ $r->date }}</td>
                                            <td>{{ $r->address }}</td>
                                            <td><a href={{ '#'}} class="text-white">
                                                    <h5 class=" btn btn-success">Edit</h5>
                                                </a>
                                                <a href={{ '#'}} class="text-white">
                                                    <h5 class=" btn btn-danger">Remove</h5>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <h6>Developed and Designed by <span class="text-success">Ngonidzashe Nyachoto</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

