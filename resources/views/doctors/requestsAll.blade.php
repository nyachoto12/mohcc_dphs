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
                        <th scope="col">Patient ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Chief Complaint</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($req as $r)
                        <tr>
                            <th scope="row">{{ $r->user_id }}</th>
                            <td>{{ $r->fullname }}
                            </td>
                            <td>{{ $r->location }}</td>
                            <td>{{ $r->request }}</td>
                            <td><a href="{{ route('appointment.create') }}" class="text-white">
                                    <h5 class=" btn btn-success">Appoint</h5>
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

