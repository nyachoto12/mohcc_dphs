@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="container-fluid" style="position: relative; top: -20px">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <img class="d-block img-fluid" src="{{ asset('./img/health1.jpg') }}"
                            style="position: relative;width: 100%; height: 550px;" alt="one">


                    </div>
                    <div class="carousel-item">

                        <img class="d-block img-fluid" src="{{ asset('./img/health2.jpeg') }}"
                            style="position: relative;  width: 100%; height: 550px;" alt="two">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{ asset('./img/corona.jpg') }}"
                            style="position: relative;  width: 100%; height: 550px;" alt="three">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon text-success" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next " href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon text-success" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>



        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success bg-danger" role="alert">
                    {{ session('status') }}
                </div>
            @endif

        <!--Section: Minimal statistics cards-->
        <section>

        </section>
        <!--Section: Minimal statistics cards-->
    </div> {{-- graphical representation of patients --}}
    </div>
@endsection
