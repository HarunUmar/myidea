@extends('layouts.global')

@section('content')
   <div class="container mt-3"  >
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                    <img src="{{ asset('assets/img/caro/caro1.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="col">
                    <img src="{{ asset('assets/img/caro/caro2.png') }}" class="d-block w-100" alt="...">
                </div>
                
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                    <img src="{{ asset('assets/img/caro/caro4.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="col">
                    <img src="{{ asset('assets/img/caro/caro5.png') }}" class="d-block w-100" alt="...">
                </div>
             
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                    <img src="{{ asset('assets/img/caro/caro1.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="col">
                    <img src="{{ asset('assets/img/caro/caro2.png') }}" class="d-block w-100" alt="...">
                </div>
              
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
@endsection
