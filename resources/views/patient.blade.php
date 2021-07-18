@extends('layouts.pat')

@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url({{ asset('./img/p1.jpg') }})">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4 text-danger" style="font-weight : bold">Stay Cautiously</h3>
            <p class="lead text-primary">Covid-19 is real, please do stay away from gatherings and do not make unneccessary movements. You dont want to end up in hospitals</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url({{ asset('./img/p2.jpeg') }})">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4 text-danger" style="font-weight : bold">Stay At Home</h3>
            <p class="lead text-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, nemo possimus commodi porro iusto enim voluptatem mollitia, excepturi fuga, neque ea vero eaque
                assumenda amet quis nobis doloribus fugit rerum?</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url({{ asset('./img/p3.jpg') }})">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="display-4 text-danger" style="font-weight : bold">Say No to the Spreading of COVID-19</h3>
            <p class="lead text-primary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur quas deleniti,
                excepturi qui tempora aspernatur debitis eaque obcaecati error autem veritatis
                placeat rem quidem dolorem sit ducimus consequuntur eligendi corrupti?</p>
          </div>
        </div>
      </div>

    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!--Section: Minimal statistics cards-->
                        <section>
                            <div class="row">

                                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                        <div class="card">
                                            @if (count($userz) == 0)
                                            <a href={{'/pat/create'}}>
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between px-md-1">
                                                        <div>

                                                            <p class="mb-0">Create your profile</p>
                                                        </div>
                                                        <div class="align-self-center">
                                                            <i class="fas fa-clipboard-list text-info fa-3x"></i>
                                                        </div>
                                                    </div>
                                                    <div class="px-md-1">
                                                        <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            @else
                                            <a href={{'/p/'. auth()->user()->id}}>
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between px-md-1">
                                                        <div>

                                                            <p class="mb-0">My Profile</p>
                                                        </div>
                                                        <div class="align-self-center">
                                                            <i class="fas fa-clipboard-list text-info fa-3x"></i>
                                                        </div>
                                                    </div>
                                                    <div class="px-md-1">
                                                        <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            @endif


                                        </div>
                                    </div>


                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>
                                                    <h3 class="text-info">3</h3>
                                                    <p class="mb-0">Appointments</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-calendar-check fa-3x text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="px-md-1">
                                                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 10%" aria-valuenow="35" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>

                                                    <p class="mb-0">My Medical History</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-check text-success fa-3x"></i>
                                                </div>
                                            </div>
                                            <div class="px-md-1">
                                                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 5%" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between px-md-1">
                                                <div>

                                                    <p class="mb-0">Billing</p>
                                                </div>
                                                <div class="align-self-center">
                                                    <i class="fas fa-check text-success fa-3x"></i>
                                                </div>
                                            </div>
                                            <div class="px-md-1">
                                                <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 5%" aria-valuenow="60" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>

                    </div>
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@endsection
