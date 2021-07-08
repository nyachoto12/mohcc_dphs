@extends('layouts.header')
@section('content')
    <div class="row  ml-5">
        <div class="col-md-12 ">
            <a href={{ '/doctor/' . auth()->user()->id }}>
                <h5 class="mt-5">Back</h5>
            </a>

            @if (session('status'))
                <div class="alert alert-danger" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h4 class="ml-5">My Appointments</h4>
            <table class="table table-striped ml-5" id="data">
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
                            <th scope="row">{{ $r->user_id }}</th>
                            <td>{{ $r->patient }}
                            </td>
                            <td>{{ $r->appointment }}</td>
                            <td>{{ $r->date }}</td>
                            <td>{{ $r->address }}</td>
                            <td><a href={{ '#'}} class="text-white">
                                    <h5 class=" btn btn-success">Update</h5>
                                </a>
                                <a href={{ '#'}} class="text-white">
                                    <h5 class=" btn btn-danger">Cancel</h5>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
