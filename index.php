<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>10x10</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/buttons.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/custom.js"></script>
</head>
<body data-spy="scroll" data-target="#bs-example-navbar-collapse-1">
	<section class="iu-section iu-intro">
		<div class="intro parallax-intro visible-xs-block" data-parallax="scroll" data-image-src="images/bg-1.jpg"></div>
		<video autoplay loop poster="images/bg-1.jpg" class="bg-video hidden-xs">
			<source src="images/videos/timelapse.webm" type="video/webm">
			<source src="images/videos/timelapse.mp4" type="video/mp4">
		</video>
		<div class="overlay">
			<nav class="navbar navbar-fixed-top" data-spy="affix" data-offset-top="250" data-offset-bottom="500">
			  <div class="container-fluid">
			    <div class="border-b-white">
			    	<!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">
				      	<img class="logo-nav" src="images/logo.png" alt="">
				      </a>
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="#iu-conocenos">Conócenos</a></li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyectos <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">USAER</a></li>
				            <li><a href="#">Casa Rosenda</a></li>
				            <li><a href="#">CCA Alfonso Reyes</a></li>
				            <li><a href="#">El Ranchito</a></li>
				            <li><a href="#">Andador Arboledas</a></li>
				            <li><a href="#">Proyectos en Curso</a></li>
				          </ul>
				        </li>
				        <li><a href="#">Impacto</a></li>
				        <li><a href="#">Únete</a></li>
				        <li><a href="#">Contáctanos</a></li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
			    </div>
			  </div><!-- /.container-fluid -->
			</nav>
			<div class="container intro-height" align="center">
				<div class="vertical-align">
					<img class="intro-logos" src="images/dos-logos.png" alt="">
				</div>
			</div>
		</div>	
	</section>

	<section class="iu-section" id="iu-conocenos">
		<div class="container-fluid">
			<div class="row">
				<div>
					<div class="col-xs-12 col-sm-6 h-400 padding-small">
						<div class="vertical-align-no-small">
							<p class="main-text">
								Somos un <b>PROGRAMA</b> de Servicio Social e investigación que explora <b>OPORTUNIDADES</b> de <b>MEJORAMIENTO DE VIVIENDA</b> y <b>ESPACIOS PÚBLICOS</b> en zonas de alta marginación y riesgo para la salud con una <b>VISIÓN INTEGRAL</b>
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 bg-red h-400 padding-small">
						<div class="vertical-align-no-small" align="center">
							<button class="button button--inverted button--wayra button--border-thick button--text-upper button--size-s uppercase">Conoce más</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-parallax" data-parallax="scroll" data-image-src="images/bg-4.jpg">
			<div class="container container-conocenos vertical-align col-white">
				<h1>Desarrollando Comunidades Integrales Por Una Vida Sana, Productiva y Significativa</h1>
			</div>
		</div>
	</section>
</body>
</html>