@extends('layouts.templates')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-md-center text-success">Welcome to MoHCC DPHS</div>

                <div class="card-body text-danger">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You must sign in to continue!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
