<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Situntas.com</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a72d16ee9c.js"></script>

    <style type="text/css">
    
        .flat{
            border-radius: 0px;
        }

        .subnav{
            background: #F7D059;
            padding-top:70px;
            padding-bottom: 5px;
            font-size: 14px;
        }

        .navsecond{
            margin-top: 70px;
            height: 35px;
            font-size: 14px;
        }

        .navsecond li {
            /*font-weight: bold;*/
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container">
          <a class="navbar-brand" href="#">Situntas.com</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto ml-5">
                <div class="input-group mb-2 mt-2">
                    <div class="input-group-prepend flat">
                      <div class="input-group-text flat bg-white"><i class="fas fa-search text-warning"></i></div>
                    </div>
                    <input type="text" class="form-control flat" id="inlineFormInputGroup" placeholder="Jasa Apa Yang Dibutuhkan ?" style="width: 500px" >
                </div>
            </ul>
          </div>
          <ul class="navbar-nav flex-row ml-md-auto  mt-1">
                <li class="nav-item dropdown">
                  <a class="nav-item nav-link dropdown-toggle mr-md-2 " href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-coins text-warning"></i> &nbsp; Rp. 0

                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                    <a class="dropdown-item active" href="/docs/4.3/">Latest (4.3.x)</a>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell text-warning"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                    <a class="dropdown-item active" href="/docs/4.3/">Latest (4.3.x)</a>
                    
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-item nav-link dropdown-toggle mr-md-2 " href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('assets/img/avatar/1.jpg') }}" class="rounded-circle" width="25">&nbsp;{{ Auth::User()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-right p-2" aria-labelledby="bd-versions">
                    @php
                        $pisah = explode(" ",Auth::User()->name);
                    @endphp
                    <h6>Hi, {{ $pisah[0] }}</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    
                  </div>
                </li>

            </ul>
        </div>
    </nav>

    @if(!empty(Auth::User()->email_verified_at) )
      <nav class="navbar navsecond navbar-expand-lg navbar-dark bg-warning ">
          <div class="container">
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
               {!! $menu !!}
            </div>
            
            <ul class="navbar-nav flex-row ml-md-auto   ">
              <a class="nav-item nav-link  mr-md-2 text-white" href="#" id="bd-versions" > Promo </a>
              <a class="nav-item nav-link  mr-md-2 text-white" href="#" id="bd-versions" > Bukpay </a>
              <a class="nav-item nav-link  mr-md-2 text-white" href="#" id="bd-versions" > Mitra</a>
              <a class="nav-item nav-link  mr-md-2 text-white" href="#" id="bd-versions" > FAQ </a>
            </ul>
            
          </div>
      </nav>
    @endif
   <!--  <div class="subnav ">
        <div class="container ">
            <div class="row">
                <div class="col">
                    <ul class="nav justify-content-start " style="margin-left: -15px;">
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#">Kategori 1</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#">Kategori 2</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#">Kategori 2</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#">Kategori 2</a>
                      </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="nav justify-content-end ">
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#">Promo</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#">Panduan BungkusJasa</a>
                      </li>
                      <li class="nav-item text-white">
                        <a class="nav-link text-white" href="#">Link</a>
                      </li>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container">
        @yield('content')    
    </div>

    <div class="container mt-5">
        <div class="row mt-4">
            <div class="col text-center">
                <img src="{{ asset('assets/img/shield.png') }}" width="100">
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="col text-center">
                <img src="{{ asset('assets/img/payment-method.png') }}" width="100">
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class="col text-center">
                <img src="{{ asset('assets/img/customer-service.png') }}" width="100">
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        </div>
    </div>
    

    <div class="container-fluid mt-5 bg-white" >
        <div class="container pt-3 pb-3">
            <div class="row justify-content-between">
                <div class="col-md-auto">
                  <h4 class="text-warning">Situntas.com <small class="text-muted" style="font-size: 13px;">Situs Penyedia Jasa Online Terpercaya</small></h4> 
                </div>
                <div class="col-4 pt-1 text-right">
                  Temukan Kami Di &nbsp;  <img src="{{ asset('assets/img/facebook.png') }}" width="25"> <img src="{{asset('assets/img/instagram.png') }}" width="25"> <img src="{{ asset('assets/img/twiter.png') }}" width="25"> <img src="{{ asset('assets/img/youtube.png') }}" width="25">
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron mt-0 mb-0 pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <address>
                        <strong>OFFICIAL</strong><br />
                        Kel. Kakenturan Satu Kec. Maesa, <br />
                        Kota Bitung Prov. Sulawesi Utara <br />
                        <abbr title="Phone"><i class="fas fa-phone-alt"></i></abbr> (123) 456-7890
                      </address>

                     <address>
                        <img src="{{ asset('assets/img/logo_bungkus.png') }}" width="50"  class="rounded">
                        <img src="{{ asset('assets/img/logo_azkha.png') }}" width="50" class="rounded">
                     </address>
                </div>
                <div class="col text-center">
                    <h5>Situntas.com</h5>
                    <ul class="list-unstyled">
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                     
                    </ul>
                </div>
                <div class="col text-center">
                    <h5>Customer</h5>
                    <ul class="list-unstyled">
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                    </ul>
                </div>
                <div class="col text-center">
                    <h5>Penyedia Jasa</h5>
                    <ul class="list-unstyled">
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                      <li>Lorem ipsum </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr></hr>
        <div class="container" style="font-size: 14px;">
            &copy;2019 Hak Cipta Terpelihara <span class="text-warning">Situntas.com</span> , CV. Azkha Indo Pratama
        </div>
    </div>

</body>
</html>