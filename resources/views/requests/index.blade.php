@extends('layouts.header')

@section('content')
<div class="row  ml-5">
    <div class="col-md-12 ">
            <a href={{ '/patient/' . auth()->user()->id }}>
                <h5 class="mt-5 btn btn-success">Go Back</h5>
            </a>
            @if (session('status'))
                <div class="alert alert-danger" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table ml-5 justify-content-center table-striped" id="data">
                <thead class="text-success" style="">
                    <tr >
                        <th scope="col"  style="font-size: 13px">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Chief Complaint</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($req as $r)
                        <tr class="">
                            <td scope="row">{{ $r->user_id }}</td>
                            <td>{{ $r->fullname }}
                            </td>
                            <td>{{ $r->location }}</td>
                            <td>{{ $r->request }}</td>
                            <td>Seen/Not</td>
                            <td><a href={{ '#' }} class="text-white">
                                    <h5 class=" btn btn-success">Print</h5>
                                </a>
                                <a href={{ '#' }} class="text-white">
                                    <h5 class=" btn btn-danger">Remove</h5>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>


@endsection
