@extends('layouts.app')

@section('content')
    
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="../../css/principalu.css">


<!--jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">


<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->



<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500"
						style="background-image:url(../../assets/img/fondo2.jpg);">
						<div class="lbox-caption">
							<div class="lbox-details">

								<h2>Bienvenidos a ShoppingFan</h2>
								<p>Comienza hacer ofertas y consigue los mejores articulos</p>
								<a href="#" class="btn ">Iniciar</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1500"
						style="background-image:url(../../assets/img/fondo2.jpg);">
						<div class="lbox-caption">
							<div class="lbox-details">
								<h2>Bienvenidos a ShoppingFan</h2>
								<p>Comienza hacer ofertas y consigue los mejores árticulos</p>
								<a href="#" class="btn ">Iniciar</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="shrinkReveal" data-duration="2000"
						style="background-image:url(images/slider-03.jpg);">
						<div class="lbox-caption">
							<div class="lbox-details">
								<h2>Bienvenidos a ShoppingFan</h2>
								<p>Comienza hacer ofertas y consigue los mejores árticulos</p>
								
								<a href="#" class="btn ">Iniciar</a>
							</div>
						</div>

					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->
@endsection

<!-- ALL JS FILES -->
<script src="../../js/jquery.min.js"></script>