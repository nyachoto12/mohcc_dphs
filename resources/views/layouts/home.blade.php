<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ministry of Health and Child Care</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/admin.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>

<body>

        <div class="header" id="myHeader">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
                <div class="container-fluid ">
                    <!-- Brand -->
                    <div class="row topnav">
                        <div class="col-md-12" >

                            <img src="./img/logoMinistry.png" class=" logotop rounded-circle" height="50" alt="logo"
                                loading="lazy" />
                        </div>
                        <div class="col-md-12" >

                            <img src="./img/logoGovt.png" class=" logotopright rounded-circle" height="50" alt="logo"
                                loading="lazy" />
                        </div>
                        <div class="col-md-12" >
                            <a class="navbar-brand" href="#">
                                <h5 class="mt-3 text-gray-dark" style=" ">Ministry of Health
                                    and Child Care | Zimbabwe</h5>
                            </a>
                        </div>

                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>


                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-expand-md navbar-light bg-success shadow-sm navbar-fixed-top">
                <div class="container-fluid">
                    {{-- <!-- Brand -->
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
                    </div> --}}
                    <button class="navbar-toggler togol mr-2" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon mr-1"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto text-light">
                            <li class="nav-item ">
                                <a class="nav-link active text-light " href="/"><span class=""
                                        style="position: relative; padding-right : 7px">Home</span> </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link text-light " href="http://enurse.mohcc.org.zw:8084/enurse"><span class=""
                                        style="position: relative; padding-right : 7px">Enurse</span> </a>
                            </li>
                            <li class="nav-item ">

                                        <li class="dropdown">
                                            <a class="dropdown-toggle nav-link text-light " data-toggle="dropdown" href="#" style="position: relative; padding-right : 7px"> MoHCC DPHS
                                            </a>
                                            <ul class="dropdown-menu pl-3">
                                              <li><a href="/doctor">Doctor</a></li>
                                              <li><a href="/patient">Patient</a></li>
                                              <li><a href="#">Nurse</a></li>
                                              <li><a href="#">Consultant</a></li>
                                            </ul>
                                          </li>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-light  " href="/"><span class=""
                                        style="position: relative; padding-right : 7px">Contacts</span> </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link text-light " href="/about"><span class=""
                                        style="position: relative; padding-right : 7px">News And Updates</span> </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-light " href="/contact"><span class=""
                                        style="position: relative; padding-right : 7px">Resourc Centre</span> </a>
                            </li>

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
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
        </div>

            <main class="py-4">

                @yield('content')

            </main>


            <footer id="footer-wrap">

                <!--Start Bottom Modules-->
                <section id="bottom" class="row">
                    <div class="grid3 column first ex-odd bottom-1">
                        <div class="block module contact-us mod-303 clearfix">
                            <div class="header">
                                <h2 class="title"><span>Central</span> Hospitals</h2>
                            </div>
                            <div class="content">
                                <div class="custom">
                                    <p><a href="http://www.parihosp.org/">Parirenyatwa</a> <br /><a
                                            href="http://www.hararehospital.gov.zw/">Harare Central</a>  <br /> <a
                                            href="mpilohospital.html">Mpilo Central</a>  <br /><a
                                            href="http://www.ubh.org.zw/">United Bulawayo Hospitals</a> <br /><a
                                            href="http://www.ingutshenihospital.org.zw/about-us/" target="_blank">Ingutsheni
                                            Phsychatric </a><br /><a href="https://www.cch.org.zw/"
                                            target="_blank">Chitungwiza Central   </a><br /><br /></p>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <div class="grid3 column ex-even bottom-2">
                        <div class="block module contact-us mod-302 clearfix">
                            <div class="header">
                                <h2 class="title"><span>Related</span> Links</h2>
                            </div>
                            <div class="content">
                                <div class="custom">
                                    <div><a href="https://www.unicef.org/zimbabwe/">UNICEF Zimbabwe</a> <br /><a
                                            href="http://zimbabwe.unfpa.org/">UNFPA Zimbabwe</a><br /><a
                                            href="http://www.zw.undp.org/">UNDP Zimbabwe</a><br /><a
                                            href="http://www.unaids.org/en/regionscountries/countries/zimbabwe">UNAIDS
                                            Zimbabwe</a></div>
                                    <div><a href="http://www.natpharm.co.zw/">NATPHARM</a></div>
                                    <div><a href="http://www.znfpc.org.zw/">ZNFPC</a></div>
                                    <div><a href="http://www.mcaz.co.zw/">MCAZ</a></div>
                                    <div><a href="http://www.hpa.co.zw/">HPA</a></div>
                                    <div><a href="http://www.who.int/countries/zwe/en/">WHO</a><br /><a
                                            href="http://www.pedaids.org/">EGPAF</a><br /> <a
                                            href="http://www.zim.gov.zw/">Zimbabwe Portal</a></div>
                                    <p> </p>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <div class="grid3 column ex-odd bottom-3">
                        <div class="block module contact-us mod-209 clearfix">
                            <div class="header">
                                <h2 class="title"><span>Contact</span> Us</h2>
                            </div>
                            <div class="content">
                                <div class="custom">
                                    <ul class="unstyled">
                                        <li class="phone">+263 4 798555/60</li>
                                        <li class="mail">
                                            <script type='text/javascript'>
     < !--
     var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
                                                var path = 'hr' + 'ef' + '=';
                                                var addy52638 = 'pr' + '&#64;';
                                                addy52638 = addy52638 + 'm&#111;hcc' + '&#46;' + 'g&#111;v' + '&#46;' + 'zw';
                                                document.write('<a ' + path + '\'' + prefix + ':' + addy52638 + '\'>');
                                                document.write(addy52638);
                                                document.write('<\/a>');
     //-->\n</script>
                                            <script type='text/javascript'>
     < !--
                                                    document.write('<span style=\'display: none;\'>');
     //-->
                                            </script>This email address is being protected from spambots. You need JavaScript enabled to view it.
                                            <script type='text/javascript'>
     < !--
                                                    document.write('</');
                                                document.write('span>');
     //-->
                                            </script>
                                        </li>
                                        <li class="home">Kaguvi Building, 4th Floor<br />Central Avenue, Harare</li>
                                    </ul>
                                </div>
    
                            </div>
                        </div>
                    </div>
                    <div class="grid3 column last ex-even bottom-4">
                        <div class="block module mod-218 clearfix">
                            <div class="header">
                                <h2 class="title"><span>Our</span> Location</h2>
                            </div>
                            <div class="content">
                                <div class="custom">
                                    <p><iframe style="border: 0;"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.350367076942!2d31.051604414372772!3d-17.82220308082799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a4e0240231b9%3A0x9aeef814fb725f74!2sMukwati+Building!5e0!3m2!1sen!2szw!4v1494425057293"
                                            width="100%" height="150" frameborder="0"
                                            allowfullscreen="allowfullscreen"></iframe></p>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </section>
                <!--End Bottom Modules-->
    
    
            </footer>

    <script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
$('.carousel').carousel()
    </script>
</body>

</html>
