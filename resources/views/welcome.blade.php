@auth
	<script type="text/javascript">
		location.href = "home";
	</script>
@endif

<!DOCTYPE html>
<html>
<head>
	<title>Situntas.com</title>
	 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a72d16ee9c.js"></script>

	<style type="text/css">
	
		.carousel-item{
			padding-top: 100px;
			padding-bottom: 100px;
			/*background: #CCCC;*/
		}
	
	</style>
</head>
<body>
	
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
	  	<div class="container">
		  <a class="navbar-brand" href="#">Situntas.com</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Servis</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Tentang</a>
		      </li> 
		    </ul>
		  </div>
		  <div class="form-inline">
		    <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
		    <a href="{{ route('login') }}"><button class="btn btn-warning my-2 my-sm-0" type="submit">Login</button></a> &nbsp;
		    <a href="{{ route('register') }}"><button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Daftar</button></a>
		  </div>
		</div>
	</nav>

	<div class="jumbotron" style="margin-top: 20px;">
	  <div class="container">
	  	  <div class="row">
	  	  	<div class="col-md-auto">
	  	  		<img src="{{ asset('assets/img/logo_jumbroton.png') }}" width="200" class="">
	  	  	</div>
	  	  	<div class="col col-md-9 mt-2">
	  	  		  <h1 >Hello, world!</h1>
				  <p class="lead text-justify">
				  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				  cillum dolore eu fugiat nulla pariatur. 
				  </p>
				  <a class="btn btn-warning btn-md" href="#" role="button">Register</a>
	  	  	</div>
	  	  </div>
	  	
	  </div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Mengapa Harus <label class="text-warning">Situntas.com ?</label> </h2>
			</div>
		</div>

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

	<div class="jumbotron mt-4">
		<div class="container ">
			<div class="row">
				<div class="col">
					<h2>Jasa Yang Ditawarkan</h2>
				</div>
			</div>


			<div class="mt-2 ">
				<div class="row">
					<div class="col">
						<div class="row">
							<div class="col-md-auto">
								<img src="{{ asset('assets/img/processor.png') }}" width="100">
							</div>
							<div class="col col-md-9">
								<p class="mt-2 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="row">
							<div class="col-md-auto">
								<img src="{{ asset('assets/img/car-parts.png') }}" width="100">
							</div>
							<div class="col col-md-9">
								<p class="mt-2 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
							
						</div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col">
						<div class="row">
							<div class="col-md-auto">
								<img src="{{ asset('assets/img/beauty-salon.png') }}" width="100">
							</div>
							<div class="col col-md-9">
								<p class="mt-2 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="row">
							<div class="col-md-auto">
								<img src="{{ asset('assets/img/lecture.png') }}" width="100">
							</div>
							<div class="col col-md-9">
								<p class="mt-2 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<div class="container mt-5">
		<div class="row justify-content-between">
		    <div class="col-4">
		      <h2>Mitra Bungkus</h2>
		    </div>
		    <div class="col-2 pt-2">
		      <button type="button" class="btn btn-outline-warning btn-block">Lihat Semua</button>
		    </div>
		</div>

		<div class="row mt-4">
			<div class="col">
				<div class="card" >
				  <img src="{{ asset('assets/img/thumbs/1.png') }}" class="card-img-top" alt="...">
				  <div class="card-body">
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</div>
			<div class="col">
				<div class="card" >
				  <img src="{{ asset('assets/img/thumbs/2.png') }}" class="card-img-top" alt="...">
				  <div class="card-body">
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</div>
			<div class="col">
				<div class="card" >
				  <img src="{{ asset('assets/img/thumbs/3.png') }}" class="card-img-top" alt="...">
				  <div class="card-body">
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</div>

			<div class="col">
				<div class="card" >
				  <img src="{{ asset('assets/img/thumbs/4.png') }}" class="card-img-top" alt="...">
				  <div class="card-body">
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</div>
		</div>
	</div>

	<div class="container mt-5 ">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active ">
		    	
  				<div class="row justify-content-md-center">
				    <div class="col-md-auto">
				    	<img src="{{ asset('assets/img/review.png') }}" class="rounded-circle" width="100" >
				 	</div>
				 	<div class="col-md-4 pt-3">
				 		<h4>Kata Dorang <br/> Tentang <label class="text-warning">Situntas.com</label></h4>
				 	</div>
			 	</div>
		    </div>
		    <div class="carousel-item">
		      	<div class="row align-items-center d-block w-500 text-center">
				    <div class="row justify-content-md-center">
					    <div class="col-md-auto">
					    	<img src="{{ asset('assets/img/avatar/1.jpg') }}" class="rounded-circle">
					 	</div>
					 	<div class="col-md-4 text-center">
					 		<blockquote class="blockquote ">
								  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
								  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
					 	</div>
				 	</div>
  				</div>
		    </div>
		    <div class="carousel-item">
	      		<div class="row justify-content-md-center">
				    <div class="col-md-auto">
				    	<img src="{{ asset('assets/img/avatar/2.jpg') }}" class="rounded-circle">
				 	</div>
				 	<div class="col-md-4 text-center">
				 		<blockquote class="blockquote ">
							  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
							  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
						</blockquote>
				 	</div>
			 	</div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon text-warning" aria-hidden="true"></span>
		    <span class="sr-only ">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

	</div>


	<div class="container-fluid mt-5">
		<hr></hr/>
		<div class="container mb-3">
			<div class="row justify-content-between">
			    <div class="col-md-auto">
			      <h4 class="text-warning">Situntas.com <small class="text-muted" style="font-size: 13px;">Situs Penyedia Jasa Online Terpercaya</small></h4> 
			    </div>
			    <div class="col-4 pt-1 text-right">
			      Temukan Kami Di &nbsp; <img src="{{ asset('assets/img/facebook.png') }}" width="25"> <img src="{{asset('assets/img/instagram.png') }}" width="25"> <img src="{{ asset('assets/img/twiter.png') }}" width="25"> <img src="{{ asset('assets/img/youtube.png') }}" width="25">
			    </div>
			</div>
		</div>
	</div>
	<div class="jumbotron mb-0 pt-3 pb-3">
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