@extends('layouts.home')

@section('content')

    <div class="container-fluid" >
        
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-danger" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                    <div class="container-fluid">
                        <div class="row bg-warning" style="height:450px">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Temporibus, ipsum esse adipisci sequi vero consequuntur error labore obcaecati maxime, 
                            aliquam facilis amet quidem provident aspernatur deserunt quam eligendi. Quia, voluptates.
                    
                        </div>
                        <div class="row bg-warning" style="height:450px">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Temporibus, ipsum esse adipisci sequi vero consequuntur error labore obcaecati maxime, 
                            aliquam facilis amet quidem provident aspernatur deserunt quam eligendi. Quia, voluptates.
                    
                        </div>
                        <div class="row bg-warning" style="height:450px">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Temporibus, ipsum esse adipisci sequi vero consequuntur error labore obcaecati maxime, 
                            aliquam facilis amet quidem provident aspernatur deserunt quam eligendi. Quia, voluptates.
                    
                        </div>
                        <div class="row bg-warning" style="height:450px">
                            <div class="col-md-12">
                                <img src="./img/devs.jpg" alt="myimage" srcset="" style="width: 100%; height: 450px" class="pic">
                            </div>
                        </div>
                      </div>
                  

                    <!--Section: Minimal statistics cards-->
                    <section>

                    </section>
                    <!--Section: Minimal statistics cards-->
                </div>    {{-- graphical representation of patients --}}
    </div>
@endsection
