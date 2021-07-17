@extends('layouts.header')
@section('content')
    <div class="row  ml-5">

        <div class="col-md-12 ">
            <div class="row">
                <a href={{ '/patient/' . auth()->user()->id }}>
                    <h5 class="mt-5">Back</h5>
                </a>
                <a href="/p/create">

                    <input type="submit" class="btn btn-success mb-3 ml-3" name="submit" value="Add New Request"
                        >

                </a>
            </div>

            @if (session('status'))
                <div class="alert alert-danger" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table table-striped ml-5" id="data">
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
@endsection
