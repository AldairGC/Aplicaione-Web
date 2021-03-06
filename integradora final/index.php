<?php
require 'php/Session.php';
$userSession = new UserSession();
if (!isset($_SESSION['user'])){
	header('location: /integradora%20final/login-register.html');
}
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>SAVENET</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
	<authentication mode="Forms">
		<forms loginUrl="~/login-register.html" protection="All" timeout="20" />
	   </authentication>

	<!-- LOADER -->
    <div id="preloader">
		<div class="loader">
			<div class="box"></div>
			<div class="box"></div>
		</div>
	</div>
	<!-- end loader -->

	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="img/savenet1.png" alt="image" width="100px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#ahorro">Ahorro</a></li>
                        <li><a class="nav-link" href="#invercion">Inversion</a></li>
						<li><a class="nav-link" href="#team">Desarrolladores</a></li>
						<buttto class="shwit">
							<span><i class="fad fa-sun"></i></span>
							<span><i class="fad fa-moon"></i></span>
						</buttto>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->

	<!-- Ahorro -->
	<div id="ahorro" class="gallery-box" style="background: #f7f7f7;"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Ahorro Descripcion</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end ahorro -->

	<!-- invercio -->
	<div id="invercion" class="gallery-box" style="background: #f7f7f7;"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Invercion Descripcion</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end ahorro -->

	<!-- desarrolladores -->
	<div id="team" class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Desarrollado Por</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 offset-md-2 col-10 offset-1 testimonial_slider">
                    <div id="client_slider" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#client_slider" data-slide-to="0" class="active"></li>
						<li data-target="#client_slider" data-slide-to="1"></li>
						<li data-target="#client_slider" data-slide-to="2"></li>
						<li data-target="#client_slider" data-slide-to="3"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item text-center active">
                            <div class="testimonial_img">
                                <img width="150" height="150" class="d-block rounded-circle" src="img/team/Aldair.jpg" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-uppercase" style="color: black;padding-bottom: 0;">Aldair Gonzalez Conde</strong></h5>
							<p class="m-0 pt-3">CEO</p>
							<p class="m-0 pt-3">aldebranabarsa@gmai.com</p>
                        </div>
                        <div class="carousel-item text-center">
                            <div class="testimonial_img">
                                <img width="150" height="150" class="d-block rounded-circle" src="img/team/siso.jpg" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-uppercase" style="color: black;padding-bottom: 0;">Jose Fransisco Anzaldo Ramirez</strong></h5>
							<p class="m-0 pt-3">CEO</p>
							<p class="m-0 pt-3">Anzaldoramirez5@gmail.com</p>
						</div>	
						<div class="carousel-item text-center">
                            <div class="testimonial_img">
                                <img width="150" height="150" class="d-block rounded-circle" src="img/team/alan.jpg" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-uppercase" style="color: black;padding-bottom: 0;">Alan Yair Cuevas Espinoza</strong></h5>
							<p class="m-0 pt-3">CEO</p>
							<p class="m-0 pt-3">yaircuevasbautista@gmail.com</p>
						</div>
						<div class="carousel-item text-center">
                            <div class="testimonial_img">
                                <img width="150" height="150" class="d-block rounded-circle" src="img/team/gus.jpg" alt="First slide">
                            </div>
                            <h5 class="mt-4 mb-0"><strong class="text-uppercase" style="color: black;padding-bottom: 0;">Gustavo Espinoza Castro</strong></h5>
							<p class="m-0 pt-3">CEO</p>
							<p class="m-0 pt-3">espinozagustavo384@gmail.com</p>
                        </div>
                      </div>
                    </div>
                </div>  
			</div>
		</div>
	</div>
	<!-- end tema -->
	
	<!-- Footer -->
	<footer>
		<tr>
     		<td><a href="" target="_blank" ><img name="utpdir04" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir04.png" width="50" alt="redes sociales"></a></td>
			<td><a href="" target="_blank"><img name="utpdir05" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir05.png" width="50"  alt="redes sociales"></a></td>
			<td><a href="" target="_blank"><img name="utpdir06" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir06.png" width="50"  alt="redes sociales"></a></td>
		  </tr>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>
