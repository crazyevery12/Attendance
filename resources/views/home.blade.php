@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="border-radius: 20px">
                <div class="card-header"><h1 style="color : #35c2de">Welcome</h1></div>

                <div class="card-body">
                    <div class="hero">
                       <div class="carousel js-flickity">
                            <div class="carousel-cell">
                                <img src="{{ asset('images/slider1.jpg') }}">
                            </div>
                            <div class="carousel-cell">
                                <img src="{{ asset('images/slider2.jpg') }}">
                            </div>
                            <div class="carousel-cell">
                                <img src="{{ asset('images/slider3.jpg') }}">
                            </div>
                        </div>
                     </div>
                </div>

                
            </div>

            
        </div>
        <section id="footer">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                  <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="https://www.facebook.com/vnuk.edu.vn/"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/vnuk_edu_vn/"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                  </ul>
                </div>
              </div>  
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                  <p>Software Project Management | 16CSE Class</p>
                  <p class="h6">All right Reversed.<a class="text-green ml-2" href="http://vnuk.udn.vn/" target="_blank">VN-UK Institute</a></p>
                </div>
              </div>  
            </div>
        </section>
    </div>
</div>

@endsection
