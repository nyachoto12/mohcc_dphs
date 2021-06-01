@extends('layouts.doctors')

@section('content')
{{-- <h5 class="text-success pt-1 pl-5 ml-5" style="position: relative; left : 90px">You are here : Home/Doctor/Create an appointment</h5> --}}
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-12" style="position: relative;">


                <div class="card">
                    @if (count($req) == 0)
                    <h6 class="text-warning pt-1 pl-5 ml-5 pb-2 " style="position: relative; top: 10px; left : 90px; font-style: italic">No patients to make appointments with</h6>
                    <div class="form-group row ml-5 mb-3">
                        <div class="col-md-8 " style="position: relative; top: 10px; left : 90px; ">
                            <button type="submit" class="btn btn-primary">
                                <a href={{ '/doctor/' . auth()->user()->id }} class="text-light">Back Off</a>
                            </button>
                        </div>
                    </div>
                    @else
                    <div class="card-header text-center bg-success text-light">Create an appointment</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container " style="position: relative; left: 3%">
                            <form action="/apt" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row d-flex">
                                    <div class="col-md-6 ">
                                        <div class="form-group row">
                                            <label for="fullname"
                                                class="col-md-12 col-form-label ">Doctor's Name</label>

                                            <div class="col-md-12">
                                                <input id="fullname" type="text"
                                                    class="form-control @error('fullname') is-invalid @enderror"
                                                    name="fullname" value="{{ old('fullname') }}" required
                                                    autocomplete="fullname">

                                                @error('fullname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="patient"
                                                class="col-md-12 col-form-label ">{{ __('Patient Name') }}</label>

                                            <div class="col-md-12">
                                                <input id="patient" type="text"
                                                    class="form-control @error('patient') is-invalid @enderror"
                                                    name="patient" value="{{ old('patient') }}" required
                                                    autocomplete="patient">

                                                @error('patient')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="appointment" class="col-md-12 col-form-label ">{{ __('Chief Complaint') }}</label>

                                            <div class="col-md-12">
                                                <textarea name="appointment" id="appointment" cols="30" rows="5" class="form-control @error('appointment') is-invalid @enderror" value="{{ old('appointment') }}" required autocomplete="appointment"></textarea>


                                                @error('appointment')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="date"
                                                class="col-md-12 col-form-label ">{{ __('Appointment Date') }}</label>

                                            <div class="col-md-12">
                                                <input class="date form-control" type="text" class="form-control @error('date') is-invalid @enderror"
                                                name="date" value="{{ old('date') }}" required
                                                autocomplete="date">>
                                                    

                                                @error('date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address"
                                                class="col-md-12 col-form-label ">{{ __('Appointment Address') }}</label>

                                            <div class="col-md-12">
                                                <input id="address" type="text"
                                                    class="form-control @error('address') is-invalid @enderror"
                                                    name="address" value="{{ old('address') }}" required
                                                    autocomplete="address">

                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>



                                    </div>
                                    {{-- <div class="col-md-6 mr-5">
                                        <div class="form-group row">
                                            <label for="fullname"
                                                class="col-md-12 col-form-label ">{{ __('Full Name') }}</label>

                                            <div class="col-md-12">
                                                <input id="fullname" type="text"
                                                    class="form-control @error('fullname') is-invalid @enderror"
                                                    name="fullname" value="{{ old('fullname') }}" required
                                                    autocomplete="fullname">

                                                @error('fullname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="location"
                                                class="col-md-12 col-form-label ">{{ __('Where are you?') }}</label>

                                            <div class="col-md-12">
                                                <input id="location" type="text"
                                                    class="form-control @error('location') is-invalid @enderror"
                                                    name="location" value="{{ old('location') }}" required
                                                    autocomplete="location">

                                                @error('location')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="request"
                                                class="col-md-12 col-form-label ">{{ __('Why are you contacting a doctor?') }}</label>

                                            <div class="col-md-12">
                                                <textarea name="request" id="request" cols="30" rows="5"
                                                    class="form-control @error('request') is-invalid @enderror"
                                                    value="{{ old('request') }}" required
                                                    autocomplete="request"></textarea>


                                                @error('request')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div> --}}
                                    <div class="form-group row mb-0 mt-4">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Send Appointment') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
