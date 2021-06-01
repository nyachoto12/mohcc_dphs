@extends('layouts.header')

@section('content')

    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-md-11">

                <div class="card">
                    <a href={{ '/patient/' . auth()->user()->id }}><h5  class="m-3 btn btn-success">Go Back</h5></a>

                    <div class="card-body ml-5">
                        @if (session('status'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!--Section: Minimal statistics cards-->
                        <section>
                            <div class="row ml-5">
                                <div class="col-xl-11 col-sm-6 col-11 mb-4">
                                    <div class="card">
                                        <div class="card-header">
                                            {{ 'Total Requests from you' }}
                                        </div>
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>

                                                    @if (count($req) == 0)
                                                        <h3 class="text-info">No requests from you yet</h3>
                                                    @else

                                                       <div class="card-body">
                                                        <table class="table  table-striped">
                                                            <thead>
                                                              <tr>
                                                                <th scope="col">ID</th>
                                                                <th scope="col">Full Name</th>
                                                                <th scope="col">Location</th>
                                                                <th scope="col">Chief Complaint</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col" >Actions</th>

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
                                                                <td>Seen/Not</td>
                                                                <td><a href={{ "#" }} class="text-white"><h5  class=" btn btn-success">Print</h5></a>
                                                                <a href={{ "#" }} class="text-white"><h5  class=" btn btn-danger">Remove</h5></a></td>
                                                              </tr>
                                                              @endforeach
                                                            </tbody>
                                                            
                                                          </table>



                                                    

                                                    </table>


                                                       </div>

                                                    @endif


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
