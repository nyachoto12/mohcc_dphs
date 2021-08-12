@extends('layouts.header')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header text-center bg-success text-light"><h4>New Request</h4> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <div class="container">
                      <form action="/p" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8 offset-2">
                             <div class="form-group row">
                                 <label for="fullname" class="col-md-12 col-form-label ">{{ __('Full Name') }}</label>

                                 <div class="col-md-12">
                                     <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname">

                                     @error('fullname')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                             </div>
                             <div class="form-group row">
                                <label for="phone" class="col-md-12 col-form-label ">{{ __('Contact Number') }}</label>

                                <div class="col-md-12">
                                    <input id="phone" type="text"  class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="location" class="col-md-12 col-form-label ">{{ __('Tell us your current location') }}</label>

                                <div class="col-md-12">
                                    <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location">

                                    @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="speciality"
                                    class="col-md-12 col-form-label ">{{ __('Select area specializaion to quickly find an expert you want') }}</label>

                                <div class="col-md-12">
                                    <select id="speciality" class="form-control text-success" name="speciality"
                                    required>
                                    <option value="">Chose speciality </option>

                                    @foreach($speciality as $facility)
                                     <?php echo "<option value='$facility->name' id='$facility->name'>$facility->name</option>";
                                     ?>
                                    @endforeach
                                </select>
                                    @error('speciality')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <p class="text-danger text-left p-1 ml-3">Chose General Consultant if you are not sure</p>
                            </div>

                             <div class="form-group row">
                                <label for="request" class="col-md-12 col-form-label ">{{ __('Reason for contacting a medical expert') }}</label>

                                <div class="col-md-12">
                                    <textarea name="request" id="request" cols="30" rows="5" class="form-control @error('request') is-invalid @enderror" value="{{ old('request') }}" required autocomplete="request"></textarea>


                                    @error('request')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                             <div class="form-group row mb-0 mt-4">
                                 <div class="col-md-6 offset-md-4">
                                     <button type="submit" class="btn btn-success">
                                         {{ __('Submit Request') }}
                                     </button>

                                 </div>
                                 <p class="text-danger text-center p-2">You need to check your profile after every 2 minutes, the system might have find a doctor for you</p>
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
