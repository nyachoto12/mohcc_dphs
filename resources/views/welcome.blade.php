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
                                style="position: relative;width: 100%; height: 650px;" alt="one">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{ asset('./img/health2.jpeg') }}"
                                style="position: relative;  width: 100%; height: 650px;" alt="two">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{ asset('./img/corona.jpg') }}"
                                style="position: relative;  width: 100%; height: 650px;" alt="three">
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
            <div class="container-fluid mt-5">
                <div class="row mt-5 p-3" style="background: #d1e5da">
                        <div class="col-md-6">
                            <div class="container">
                                <div class="row">
                                  <div class="col-md-12 bg-dark">
                                    <h3 class="ml-4 text-white pt-3 pb-3 " style="">What is it About MoHCC DPHS</h3>
                                  </div>
                                    <p class="ml-3 mt-5" style="font-size: 20px">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Fugit nesciunt, laudantium vel veritatis minus soluta adipisci!
                                        Tempore dolores numquam ea magni perspiciatis fuga nobis et assumenda,
                                        placeat odio blanditiis rem!
                                    <br>
                                    <br>
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Fugit nesciunt, laudantium vel veritatis minus soluta adipisci!
                                            Tempore dolores numquam ea magni perspiciatis fuga nobis et assumenda,
                                            placeat odio blanditiis rem!</p>
                                </div>
                                <div class="col-md-12 justify-content-right m-3">
                                <button class="btn btn-success text-right">Read More</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="container">
                                <img class="img-fluid" src="{{ asset('./img/doc1.jpg') }}" >
                                <div class="container-fluid" style=" background-color: rgba(0, 0, 0, 0);font-size: small;">
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="container-fluid mt-5">
                <div class="row mt-5 bg-white">
                    <div class="col-md-12 text-center m-3 bg-dark text-white p-3">
                        <h4>Services Offered at MoHCC DPHS</h4>
                    </div>
                </div>
                <div class="row mt-3 ">

                        <div class="col-md-3 card" style="border: none">
                            <div class="container p-4">
                                <div class="row">

                                    <img class="img-fluid" src="{{ asset('./img/doc1.jpg') }}" >
                                    <div class="container-fluid" style=" background-color: rgba(0, 0, 0, 0);font-size: small;">
                                    </div>
                                    <div class="col-md-12 pt-4">
                                        <h3 class="bg-success p-1 text-white" style="font-size: 25px">Simplify Communication</h3>
                                        <p class=" mt-2"style="font-size: 18px">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            Fugit nesciunt, laudantium vel veritatis minus soluta adipisci!
                                            Tempore dolores numquam ea magni perspiciatis fuga nobis et assumenda,
                                            placeat odio blanditiis rem!</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 card"style="border: none">
                            <div class="container p-4">
                                <div class="row">

                                    <img class="img-fluid" src="{{ asset('./img/doc1.jpg') }}" >
                                <div class="container-fluid" style=" background-color: rgba(0, 0, 0, 0);font-size: small;">
                                </div>
                                <div class="col-md-12 pt-4">
                                    <h3 class="bg-success p-1 text-white" style="font-size: 25px">Manage Patients Requests</h3>
                                    <p class=" mt-2"style="font-size: 18px">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Fugit nesciunt, laudantium vel veritatis minus soluta adipisci!
                                        Tempore dolores numquam ea magni perspiciatis fuga nobis et assumenda,
                                        placeat odio blanditiis rem!</p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 card"style="border: none">
                            <div class="container p-4">
                                <div class="row">

                                    <img class="img-fluid" src="{{ asset('./img/doc1.jpg') }}" >
                                <div class="container-fluid" style=" background-color: rgba(0, 0, 0, 0);font-size: small;">
                                </div>
                               <div class="col-md-12 pt-4">
                                <h3 class="bg-success p-1 text-white" style="font-size: 25px">Manage Schedules</h3>
                                <p class=" mt-2"style="font-size: 18px">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Fugit nesciunt, laudantium vel veritatis minus soluta adipisci!
                                    Tempore dolores numquam ea magni perspiciatis fuga nobis et assumenda,
                                    placeat odio blanditiis rem!</p>
                               </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 card"style="border: none">
                            <div class="container p-4">
                                <div class="row">

                                    <img class="img-fluid" src="{{ asset('./img/doc1.jpg') }}" >
                                    <div class="container-fluid" style=" background-color: rgba(0, 0, 0, 0);font-size: small;">
                                    </div>
                                   <div class="col-md-12 pt-4">
                                    <h3 class="bg-success p-1 text-white" style="font-size: 25px">Manage Appointments</h3>
                                    <p class=" mt-2"style="font-size: 18px">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Fugit nesciunt, laudantium vel veritatis minus soluta adipisci!
                                        Tempore dolores numquam ea magni perspiciatis fuga nobis et assumenda,
                                        placeat odio blanditiis rem!</p>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="container-fluid bg-light">
                <div class="row mt-4 bg-white">
                    <div class="col-md-12 m-4 text-center">
                        <h4>Get started with MoHCC DPHS</h4>
                        <h5>Only a few steps and you are good to go</h5>
                    </div>
                </div>
                <div class="row">

                        <div class="col-md-4 text-center">
                            <h1>1</h1>
                            <h2>Register</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, voluptatibus eveniet reiciendis magnam illo hic provident soluta perferendis, ipsa blanditiis ut.
                                Similique harum repudiandae nostrum, ut assumenda aut impedit nulla.</p>

                        </div>
                        <div class="col-md-4 text-center">
                            <h1>2</h1>
                            <h2>Create your profile</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione et rem accusantium, repellat saepe quas perspiciatis voluptatum provident.
                                 Reiciendis aut sit, eius amet ea aliquam tempore odio expedita animi illum?</p>

                        </div>
                        <div class="col-md-4 text-center">
                            <h1>3</h1>
                            <h2>Access your dashboard</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, similique sapiente eius, omnis, animi sit placeat rem voluptatum quaerat debitis odio consectetur ex maiores
                                molestias laborum provident voluptate suscipit et.</p>

                        </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row mt-5 bg-white mb-5">
                    <div class="col-md-6">
                        <h3 class="m-5">Our Geographical Location</h3>
                        <div id="googleMap" style="width:100%;height:400px;">
                            <div class="custom ml-4">
                                <p><iframe style="border: 0;"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.350367076942!2d31.051604414372772!3d-17.82220308082799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1931a4e0240231b9%3A0x9aeef814fb725f74!2sMukwati+Building!5e0!3m2!1sen!2szw!4v1494425057293"
                                        width="100%" height="400" frameborder="0"
                                        allowfullscreen="allowfullscreen"></iframe></p>
                            </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="m-5">Having any issues with MoCC DPHS, let us know below</h3>

                                <form action="/pat" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row ">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label for="fullname"
                                                    class="col-md-12 col-form-label ">{{ __('Full Name') }}</label>

                                                <div class="col-md-12 w-100" style="width: 100%">
                                                    <input id="fullname" type="text"
                                                        class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                                        value="{{ old('fullname') }}" required autocomplete="fullname">

                                                    @error('fullname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email"
                                                    class="col-md-12 col-form-label ">{{ __('Email Address') }}</label>

                                                <div class="col-md-12">
                                                    <input id="email" type="text"
                                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                                        value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="issue"
                                                    class="col-md-12 col-form-label ">{{ __('Your issue') }}</label>

                                                <div class="col-md-12">
                                                    {{-- <input id="issue" type="text"
                                                        class="form-control @error('issue') is-invalid @enderror" name="issue"
                                                        value="{{ old('issue') }}" required autocomplete="issue"> --}}
                                                    <textarea class="form-control @error('issue') is-invalid @enderror" name="issue" id="" cols="30" rows="5"  value="{{ old('issue') }}" required autocomplete="issue"></textarea>
                                                    @error('issue')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        <div class="form-group mb-0 mt-4">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-success">
                                                    {{ __('Submit') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                    </div>
                </div>
            </div>

       </div>
       <div class="container-fluid bg-dark">
        <div class="row pt-3 pb-1">
            <div class="col-md-12 text-center text-white">
              <h5>Ministry of Health and Child Care</h5>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-success">
           <div class="row ">
               <div class="col-md-12 ">
                   <div class="row">
                       <div class="col-md-4">
                        <div class="card bg-success" style="border: none; ">
                            <div class="card-header text-center text-light bg-dark mt-1">
                                <h4>Central Hospitals</h4>
                            </div>
                            <div class="card-body">
                             <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-4 text-white"> <span class="m-2 "><i class="fas fa-hospital fx-3 text-success bg-white p-2"></i></span>Parirenyatwa Group of Hospitals</h5></a>
                             <a href="http://" style="outline: none; curser : hand;"><h5 class="ml-4 text-white"><span class="m-2 "><i class="fas fa-hospital fx-3 text-success bg-white p-2"></i></span>Harare Central</h5></a>
                             <a href="http://" style="outline: none; curser : hand;"><h5 class="ml-4 text-white"><span class="m-2 "><i class="fas fa-hospital fx-3 text-success bg-white p-2"></i></span>Mpilo Central</h5></a>
                             <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-4 text-white"><span class="m-2 "><i class="fas fa-hospital fx-3 text-success bg-white p-2"></i></span>United Bulawayo Hospitals</h5></a>
                             <a href="http://" style="outline: none; curser : hand;"><h5 class="ml-4 text-white"><span class="m-2 "><i class="fas fa-hospital fx-3 text-success bg-white p-2"></i></span>Ingutsheni Phsychatric</h5></a>
                             <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-4 text-white"><span class="m-2 "><i class="fas fa-hospital fx-3 text-success bg-white p-2"></i></span>Chitungwiza Central</h5></a>
                            </div>
                        </div>
                       </div>
                       <div class="col-md-4">
                         <div class="card bg-success" style="border: none; ">
                            <div class="card-header text-center text-light bg-dark mt-1">
                                <h4>Related Links</h4>
                            </div>
                            <div class="card-body">
                                <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-4 text-white"> UNICEF Zimbabwe</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"><h5 class="ml-4 text-white">UNIFPA Zimbabwe</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"><h5 class="ml-4 text-white">UNDP Zimbabwe</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-4 text-white">UNAIDS Zimbabwe</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"><h5 class="ml-4 text-white">NATPHARM</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-4 text-white">ZNFPC</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-4 text-white">MICAZ</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-4 text-white">HPA</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-4 text-white">World Health Organization</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-4 text-white">EGPAF</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-4 text-white">Zimbabwe Portal</h5></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-success" style="border: none; ">
                            <div class="card-header text-center text-light bg-dark mt-1">
                                <h4>Contact Us</h4>
                            </div>
                            <div class="card-body">
                                <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-2 text-white"> <span class="m-2 "><i class="fas fa-phone fx-3 text-success bg-white p-2"></i></span>+263 780912680</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"><h5 class="ml-2 text-white"><span class="m-2 "><i class="fas fa-envelope-open-text fx-3 text-success bg-white p-2"></i></span>admin@mohcc.co.zw</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"><h5 class="ml-2 text-white"><span class="m-2 "><i class="far fa-building fx-3 text-success bg-white p-2"></i></span>128 Lomagundi Road,  Avondale West, <span class="ml-5"> Harare</span></h5></a>
                                        <br>
                                        <br>
                                <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-2 text-white"><span class="m-2 "><i class="fas fa-phone fx-3 text-success bg-white p-2"></i></span>+263 4 798555/60</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"><h5 class="ml-2 text-white"><span class="m-2 "><i class="fas fa-envelope-open-text fx-3 text-success bg-white p-2"></i></span>pr@mohcc.gov.zw</h5></a>
                                <a href="http://" style="outline: none; curser : hand;"> <h5 class="ml-2 text-white"><span class="m-2 "><i class="far fa-building fx-3 text-success bg-white p-2"></i></span>Kaguvi Building, 4th Floor , Central <span class="ml-5">Avenue, Harare</span>  </h5></a>
                            </div>
                        </div>
                    </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="container-fluid bg-dark">
           <div class="row pt-3 pb-1">
               <div class="col-md-12 text-center text-white">
                 <h5>Copyright © 2021, <span class="text-success">Ministry of Health and Child Care</span> , Government of Zimbabwe, All rights reserved.</h5>
               </div>
           </div>
       </div>
    </div>
@endsection
