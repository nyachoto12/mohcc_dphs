@extends('layouts.header')

@section('content')

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12" style="position: relative;">
                    <div class="card">
                <div class="card-header text-center bg-success text-light">Hi {{$user->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container " style="position: relative; left: 3%">
                        <form action="/patient/{{$user->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row d-flex">
                                <div class="col-md-6 ">
                                    <div class="form-group row">
                                        <label for="fullname"
                                            class="col-md-12 col-form-label ">{{ __('Full Name') }}</label>

                                        <div class="col-md-12">
                                            <input id="fullname" type="text"
                                                class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                                value="{{ $user->patient->fullname}}" required autocomplete="fullname">

                                            @error('fullname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="age"
                                            class="col-md-12 col-form-label ">{{ __('How old are you??') }}</label>

                                        <div class="col-md-12">
                                            <input id="age" type="text"
                                                class="form-control @error('age') is-invalid @enderror" name="age"
                                                value="{{ old('age') ?? $user->patient->age }}" required autocomplete="age">

                                            @error('age')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="gender"
                                            class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                        <div class="col-md-6">

                                            <select id="gender" name="gender"
                                                class="form-control ] @error('gender') is-invalid @enderror" name="gender"
                                                value="{{ old('gender') ?? $user->patient->gender }}" required autocomplete="gender" autofocus>
                                                <option value="Doctor">Male</option>
                                                <option value="Patient">Female</option>

                                            </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="location"
                                            class="col-md-12 col-form-label ">{{ __('Where are you??') }}</label>

                                        <div class="col-md-12">
                                            <input id="location" type="text"
                                                class="form-control @error('location') is-invalid @enderror" name="location"
                                                value="{{ old('location') ?? $user->patient->location }}" required autocomplete="location">

                                            @error('location')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="occupation"
                                            class="col-md-12 col-form-label ">{{ __('What do you do for a living??') }}</label>

                                        <div class="col-md-12">
                                            <input id="occupation" type="text"
                                                class="form-control @error('occupation') is-invalid @enderror"
                                                name="occupation" value="{{ old('occupation') ?? $user->patient->occupation }}" required
                                                autocomplete="occupation">

                                            @error('occupation')
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
                                                class="col-md-12 col-form-label ">{{ __('Where are you??') }}</label>

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
                                                class="col-md-12 col-form-label ">{{ __('Why are you contacting a doctor??') }}</label>

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
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Update Profile') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
