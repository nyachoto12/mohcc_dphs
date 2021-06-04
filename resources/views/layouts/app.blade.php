<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <title>{{ config('app.name', 'MoHCC') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app pb-3">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <!-- Brand -->
                <div class="row mybrand">
                    <div class="col-md-12" >

                        <img src="./img/logo.png" class=" logo rounded-circle" height="50" alt="logo"
                            loading="lazy" />
                    </div>
                    <div class="col-md-12" >
                        <a class="navbar-brand " href="#">
                            <h5 class="mt-3" style=" ">Ministry of Health
                                and Child Care</h5>
                        </a>
                    </div>
                </div>
                <button class="navbar-toggler togol mr-2" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon mr-1"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto mr-5">
                        <!-- Authentication Links -->
                        <li class="nav-item ">
                            <a class="nav-link active " href="#"><span class=""
                                    style="position: relative; padding-right : 7px">E-Nurse</span> </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link active " href="#"><span class=""
                                    style="position: relative; padding-right : 7px">Contacts</span> </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                MoHCC DPHS <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/doctor">
                                    {{ __('Doctor') }}
                                </a>
                                <a class="dropdown-item" href="/patient">
                                    {{ __('Patient') }}
                                </a>

                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active " href="/"><span class=""
                                    style="position: relative; padding-right : 7px">Home</span> </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link active " href="/covid"><span class=""
                                    style="position: relative; padding-right : 7px">Covid 19 Updates</span> </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link " href="/about"><span class=""
                                    style="position: relative; padding-right : 7px">About Us</span> </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="/contact"><span class=""
                                    style="position: relative; padding-right : 7px">Contact Us</span> </a>
                        </li>
                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                <!-- Icon -->

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

            @yield('content')

        </main>
    </div>
  <!-- Google-Map -->
 <script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(-17.82772, 31.05337),
            zoom: 10,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
</script>
<script src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.350367076942!2d31.051604414372772!3d-17.82220308082799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a4e0240231b9%3A0x9aeef814fb725f74!2sMukwati+Building!5e0!3m2!1sen!2szw!4v1494425057293"></script>
<!-- End of Google-Map -->
</body>

</html>
