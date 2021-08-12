<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>MoHCC DPHS</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <!-- Scripts -->
    <script src="{{ asset('js/mdb.min.js') }}" defer></script>

    <!-- Custom scripts -->
    <script src="{{ asset('js/admin.js') }}" defer></script>

    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Custom styles -->
    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
        integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
        crossorigin="anonymous"></script>
       <!-- Bootstrap CSS CDN -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
       <!-- Our Custom CSS -->
       <link rel="stylesheet" href="style.css">

       <!-- Font Awesome JS -->
       <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
       <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
       <style>
           body{
               font-family: 'Segoe UI', Tahoma, sans-serif;
               background-color: rgb(177, 177, 177);
           }
           .side ul{

               width: 50%;


           }
           .side ul li{

              position: relative;
              top: 9px;


          }
           #homeSubmenu li a{
           padding: 10px;
           }

           .carousel-item {
  height: 65vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
       </style>
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark " >
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <ul style="list-style-type: none">
                        <li class="nav-item">
                            <div class="rounded-circle">
                                <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="{{ route('patient.show',auth()->user()->id) }}">
                                    <img src="{{ asset('./img/dev.jpg') }}" class="m-2 rounded-circle" height="90" alt=""
                                        loading="lazy" />
                                </a>
                            </div>


                        <li><a class=" text-success">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a></li>

                        <a class="text-danger ml-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        </li>
                    </ul>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple active pb-3 bg-success"
                        aria-current="true" >
                        <i class="fas fa-tachometer-alt fa-fw me-3 "></i><span>Main dashboard</span>
                    </a>
                    <a href="/patient" class="list-group-item list-group-item-action py-2 ripple " style="background-color: rgba(147, 165, 150, 0.856)">
                        <i class="fa fa-book text-light fa-2x me-3 mt-3"></i><span class="text-light p-1" style="position: relative; top: -10px; font-weight: bold">News and Updates</span>

                    </a>
                    <ul class="list-unstyled side">

                        <li class="">
                            <a href="#profile" class="list-group-item list-group-item-action py-2 ripple  " data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="background-color: rgba(147, 165, 150, 0.856)">
                                <i class="fa fa-user text-light fa-2x me-3 mt-3"></i><span class="text-light p-1" style="position: relative; top: -10px; font-weight: bold">Profile Management </span></a>
                            <ul class="collapse list-unstyled" id="profile">
                                <li class="m-2">
                                    <a href="{{ route('patient.update', $patient->id) }}" class="btn btn-success pl-3 pr-3">My Profile</a>
                                </li>


                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top pl-5">
            <!-- Container wrapper -->
            <div class="container-fluid conta">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>


                <!-- Brand -->
                <div class="row ml-5">
                    <div class="col-md-4" style=" position : relative; left: 48px">

                        <img src="{{ asset('./img/logo.png') }}" class=" logo rounded-circle mt-2 pr-3" height="50" alt="logo"
                            loading="lazy" />
                    </div>
                    <div class="col-md-4" style="position: relative; left: -80px">
                        <a class="navbar-brand " href="#">
                            <h5 class="mt-3 text-success" style=" position : relative; left: 52px">Ministry of Health
                                and Child Care</h5>
                        </a>
                    </div>
                </div>
                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">

                    <li class="nav-item ">
                        <a class="nav-link text-success" href="/"><span class=""
                                style="position: relative; padding-right : 7px">Home</span> </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link text-success " href="/about"><span class=""
                                style="position: relative; padding-right : 7px">About Us</span> </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-success " href="/contact"><span class=""
                                style="position: relative; padding-right : 7px">Contact Us</span> </a>
                    </li>

                    <!-- Icon dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown"
                            role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="united kingdom flag m-0"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li class="pl-5">
                                <a class="dropdown-item " href="#"><i class="united kingdom flag"></i>English
                                    <i class="fa fa-check text-success ms-2"></i></a>
                            </li>

                        </ul>
                    </li>

                    <!-- Avatar -->

                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12" style="position: relative;">
                    <div class="card">
                <div class="card-header text-center bg-success text-light">Hi {{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container " style="position: relative; left: 3%">
                        <form action="{{ route('patient.update', $patient->id) }}" method="post" enctype="multipart/form-data">
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
                                                value="{{ $patient->fullname}}" required autocomplete="fullname">

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
                                                value="{{ old('age') ?? $patient->age }}" required autocomplete="age">

                                            @error('age')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label for="gender"
                                            class="col-md-4 col-form-label text-md-left">{{ __('Gender') }}</label>

                                        <div class="col-md-12">

                                            <select id="gender" name="gender"
                                                class="form-control @error('gender') is-invalid @enderror" name="gender"
                                                value="{{ old('gender') ?? $patient->gender }}" required autocomplete="gender" autofocus>
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
                                                value="{{ old('location') ?? $patient->location }}" required autocomplete="location">

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
                                                name="occupation" value="{{ old('occupation') ?? $patient->occupation }}" required
                                                autocomplete="occupation">

                                            @error('occupation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>



                                </div>

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
    <script type="text/javascript" src="{{ asset('js/mdb.min.js')}}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{asset('js/admin.js')}}"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>
