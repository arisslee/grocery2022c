<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Eazy Grocery Shop</title>
  </head>
  <body>
    @if(Session::has('success'))
      <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
      </div>
    @endif
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#dbedd0; ">
  <img src="{{asset('images/logo.png')}}" class="rounded-circle" alt="Southern Online" width="30">&nbsp;
  <a class="navbar-brand " href="#">Eazy Grocery Shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/addProduct')}}">Add Product</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('meat')}}">Meat</a>
          <a class="dropdown-item" href="{{route('vegetable')}}">Vegetable</a>
          <a class="dropdown-item" href="{{route('fruit')}}">Fruit</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contacts')}}">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="{{route('search.products')}}" method="POST" style="padding-left:400px">
      @csrf
      <input class="form-control mr-sm-3" name="keyword" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>&nbsp;
    @guest
    <button type="button" class="btn btn-success">
      My Cart
    </button>
    @else
    <a href="{{ route('myCart') }}"><button type="button" class="btn btn-success">
      My Cart <span class="badge bg-danger">
        {{Session()->get('success')}}
      </span>
    </button></a>
    <ul class="navbar-nav mr-auto text-danger">
    <li class="nav-item">
    <a class="nav-link text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
    </ul>
    @endguest
  </div>
</nav>

@yield('content')

</script>
 <!-- footer -->
 <!-- Footer -->
<footer class=" text-center text-dark" style="width:100%; bottom:0px; background-color:#EAF4E4" >
  <!-- Grid container -->
  <div class="container p-4">
  <div class="container-xl">
	<div class="row">
		<div class="col-md-12">
			<h2>Featured <b>Products</b></h2>
			<div id="myCarousel2" class="carousel slide " data-ride="carousel" data-interval="2500">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel2" data-slide-to="1"></li>
				<li data-target="#myCarousel2" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
                <img src="{{ asset('images/meat1.png')}}" class="img-fluid" alt="sliced beef">
								</div>
								<div class="thumb-content">
									<h4>Sliced Beef</h4>									
									<p class="item-price"><strike>RM25.00</strike> <b>RM23.00</b></p>
								</div>						
							</div>
						</div>		
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
                <img src="{{ asset('images/meat2.png')}}" class="img-fluid" alt="beef">
								</div>
								<div class="thumb-content">
									<h4>Beef</h4>									
									<p class="item-price"><strike>RM30.00</strike> <b>RM28.00</b></p>
								</div>						
							</div>
						</div>								
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
                <img src="{{ asset('images/meat3.png')}}" class="img-fluid" alt="meatloaf">
								</div>
								<div class="thumb-content">
									<h4>Meatloaf</h4>									
									<p class="item-price"><strike>RM40.00</strike> <b>RM36.00</b></p>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
                <img src="{{ asset('images/fruit1.png')}}" class="img-fluid" alt="strawberry">
								</div>
								<div class="thumb-content">
									<h4>Strawberry</h4>
									<p class="item-price"><strike>RM40.00</strike> <span>RM36.00</span></p>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
                <img src="{{ asset('images/fruit2.png')}}" class="img-fluid" alt="pomelo">
								</div>
								<div class="thumb-content">
									<h4>Pomelo</h4>
									<p class="item-price"><strike>RM20.00</strike> <span>RM18.00</span></p>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
                <img src="{{ asset('images/fruit3.png')}}" class="img-fluid" alt="apple">
								</div>
								<div class="thumb-content">
									<h4>Apple</h4>
									<p class="item-price"><strike>RM15.00</strike> <span>RM14.00</span></p>
								</div>						
							</div>
						</div>						
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="{{ asset('images/vege1.png')}}" class="img-fluid" alt="potato">
								</div>
								<div class="thumb-content">
									<h4>Potato</h4>
									<p class="item-price"><strike>RM20.00</strike> <span>RM18.00</span></p>
								</div>						
							</div>
						</div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
                <img src="{{ asset('images/vege2.png')}}" class="img-fluid" alt="onion">
								</div>
								<div class="thumb-content">
									<h4>Onion</h4>
									<p class="item-price"><strike>RM14.00</strike> <span>RM13.00</span></p>
								</div>						
							</div>
						</div>	
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
                <img src="{{ asset('images/vege3.png')}}" class="img-fluid" alt="broccoli">
								</div>
								<div class="thumb-content">
									<h4>Broccoli</h4>
									<p class="item-price"><strike>RM27.00</strike> <span>RM25.00</span></p>
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
</br><a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
			</a>
		</div>
		</div>
	</div>
</div>
<!-- Footer -->

 <!-- end footer --> 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>