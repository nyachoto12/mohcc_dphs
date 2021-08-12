@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url({{ asset('./img/vac4.jpg') }})">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="display-4 text-danger" style="font-weight : bold">Covid 19 Vaccination Programme</h3>
              <p class="lead text-light" style="font-weight : bold"> Get vaccinated today to protect yourself and your beloved ones from the dangers of the Covid 19.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url({{ asset('./img/p2.jpeg') }})">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="display-4 text-danger" style="font-weight : bold">Stay At Home</h3>
              <p class="lead text-light" style="font-weight : bold">Please do not make some unreasonable movements, covid-19 is real and its
            spreading too fast. So i urge you to stay at home all the times and wash your hands regulary with running water.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url({{ asset('./img/p3.jpg') }})">
            <div class="carousel-caption d-none d-md-block ">
              <h3 class="display-4 text-danger" style="font-weight : bold">Say No to the Spreading of COVID-19</h3>
              <p class="lead text-light" style="font-weight : bold">Lets all practise social distance, always put on our masks all the times covering nose and mouth.
            Covid-19 is dangerous</p>
            </div>
          </div>
        </div>
</div>
        </div>
        <div class="card-body bg-white">
            @if (session('status'))
                <div class="alert alert-success bg-danger text-light" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success bg-success text-light" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="container-fluid mt-5">
                <div class="row mt-5 p-3" style="background: #d1e5da">
                        <div class="col-md-6">
                            <div class="container">
                                <div class="row">
                                  <div class="col-md-12 bg-dark">
                                    <h4 class="ml-4 text-white pt-3 pb-3 " style="">Ministry of Health Doctors and Patients Healthcare System</h4>
                                  </div>
                                    <p class="ml-3 mt-5" style="font-size: 20px">
                                        Patients in Zimbabwe finds it so difficult to access medical resources all the time when they need it.
                                        A patient has to visit a hospital to check if there is a doctor available so that he/ she can get medical attention.
                                        <br>
                                        This seems to be a big problem which exists in the Ministry of Health and Child Care in our country.
                                    <br>
                                    <span id="dots1">....</span>
                                    <span id="more1" style="display: none;transition: 0.4s;">
                                        <br>
                                        This led to the development of the MoHCC DPH System, to try to minimise this issue. The system acts as a medium to facilitate communication between doctors and patients in the comfort of their home.
<br>
<br>
                                        So a patient will be able to access the system from anywhee in the country, send their requests to the system and get appointments from doctors around them.
                                    </span>
                                    <br>

                                </p>
                                 <!-- Readmore button with an onclick function-->
                               <a onclick="myFunction1()" id="myBtn1" class=" btn btn-success rounded-0" style="width: 30%;color:#fff !important;cursor: pointer; ">Read more</a>
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
            <div class="container-fluid bg-light">
                <div class="row mt-4 bg-white">
                    <div class="col-md-12 mr-4 text-center bg-dark pt-2 pb-2 text-white">
                        <h4 style="font-weight: bold">Get started with MoHCC DPHS</h4>
                      <span class="text-success"> <h5>Only a few steps and you are good to go</h5></span>
                    </div>
                </div>
                <div class="row" style="background: #d1e5da">

                        <div class="col-md-4 text-center">
                            <h1 class="m-2 p-2 text-success" style="font-weight: bolder">1</h1>
                            <h2 class="bg-success p-2 text-white" style="">Registration</h2>
                            <p class=" mt-4 ml-3 text-left"style="font-size: 18px">To get access to the MoHCC DPH System, you need to have an account.
                            So you need to register by clicking on the register link above.</p>

                        </div>
                        <div class="col-md-4 text-center">
                            <h1 class="m-2 p-2 text-success" style="font-weight: bolder">2</h1>
                            <h2 class="bg-success p-2 text-white" >Create your profile</h2>
                            <p class=" mt-4 ml-3 text-left"style="font-size: 18px">After successful creation of your account, you will be redirected to
                            a page where you are supposed to create your profile. Just click on the link "create profile" and enter your details
                        in the fields</p>

                        </div>
                        <div class="col-md-4 text-center">
                            <h1 class="m-2 p-2 text-success" style="font-weight: bolder">3</h1>
                            <h2 class="bg-success p-2 text-white" >Access your dashboard</h2>
                            <p class=" mt-4 ml-3 text-left"style="font-size: 18px">Then from step 2, you will be redirected to your dashboard where you can access
                            all the resources. </p>

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
                        <h3 class="m-5">Having any issues with MoHCC DPHS, let us know below</h3>

                                <form action="/issue" method="post" enctype="multipart/form-data">
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
