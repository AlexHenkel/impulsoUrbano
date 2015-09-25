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

	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/card.css" />
	<link rel="stylesheet" type="text/css" href="css/pattern.css" />

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
				        <li><a href="#iu-proyectos">Proyectos</a></li>
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
			<div class="row pos-rel">
				<div class="col-xs-12 col-sm-6 h-400 padding-small z-3">
					<div class="vertical-align-no-small">
						<p class="main-text">
							Somos un <b>PROGRAMA</b> de Servicio Social e investigación que explora <b>OPORTUNIDADES</b> de <b>MEJORAMIENTO DE VIVIENDA</b> y <b>ESPACIOS PÚBLICOS</b> en zonas de alta marginación y riesgo para la salud con una <b>VISIÓN INTEGRAL</b>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 bg-red h-400 padding-small pos-stat z-1">
					<div class="vertical-align-no-small z-3" align="center">
						<button class="button button--inverted button--wayra button--border-thick button--text-upper button--size-s uppercase">Conoce más</button>
					</div>
					<div class="conocenos-bg hidden-xs">
						<img src="images/iu-gray.png" alt="">
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
	<section class="iu-section" id="iu-proyectos">
		<div class="demo-1">
			<div class="container">
				<div class="content">
					<!-- trianglify pattern container -->
					<div class="pattern pattern--hidden"></div>
					<!-- cards -->
					<div class="wrapper">
						<div class="card">
							<div class="card__container card__container--closed">
								<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
									<defs>
										<clipPath id="clipPath1">
											<!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
											<circle class="clip" cx="960" cy="250" r="992"></circle>
										</clipPath>
									</defs>
									<image clip-path="url(#clipPath1)" width="1920" height="500" xlink:href="img/a.jpg"></image>
								</svg>
								<div class="card__content">
									<i class="card__btn-close fa fa-times"></i>
									<div class="card__caption">
										<h2 class="card__title">Tristan and Isolde</h2>
										<p class="card__subtitle">A modern day love story</p>
									</div>
									<div class="card__copy">
										<div class="meta">
											<img class="meta__avatar" src="img/authors/1.png" alt="author01" />
											<span class="meta__author">Gerry Sutherland</span>
											<span class="meta__date">06/19/2015</span>
										</div>
										<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
										<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
										<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
										<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
										<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
										<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card__container card__container--closed">
								<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
									<defs>
										<clipPath id="clipPath2">
											<!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
											<circle class="clip" cx="960" cy="250" r="992"></circle>
										</clipPath>
									</defs>
									<image clip-path="url(#clipPath2)" width="1920" height="500" xlink:href="img/b.jpg"></image>
								</svg>
								<div class="card__content">
									<i class="card__btn-close fa fa-times"></i>
									<div class="card__caption">
										<h2 class="card__title">About Helen</h2>
										<p class="card__subtitle">A story about a woman</p>
									</div>
									<div class="card__copy">
										<div class="meta">
											<img class="meta__avatar" src="img/authors/2.png" alt="author02" />
											<span class="meta__author">Frank Posterius</span>
											<span class="meta__date">06/16/2015</span>
										</div>
										<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
										<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
										<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
										<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
										<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
										<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card__container card__container--closed">
								<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
									<defs>
										<clipPath id="clipPath3">
											<!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
											<circle class="clip" cx="960" cy="250" r="992"></circle>
										</clipPath>
									</defs>
									<image clip-path="url(#clipPath3)" width="1920" height="500" xlink:href="img/c.jpg"></image>
								</svg>
								<div class="card__content">
									<i class="card__btn-close fa fa-times"></i>
									<div class="card__caption">
										<h2 class="card__title">A mild winter</h2>
										<p class="card__subtitle">Helen's view on wells</p>
									</div>
									<div class="card__copy">
										<div class="meta">
											<img class="meta__avatar" src="img/authors/3.png" alt="author03" />
											<span class="meta__author">Sarah Lester</span>
											<span class="meta__date">06/16/2015</span>
										</div>
										<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
										<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
										<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
										<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
										<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
										<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card__container card__container--closed">
								<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
									<defs>
										<clipPath id="clipPath4">
											<!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
											<circle class="clip" cx="960" cy="250" r="992"></circle>
										</clipPath>
									</defs>
									<image clip-path="url(#clipPath4)" width="1920" height="500" xlink:href="img/d.jpg"></image>
								</svg>
								<div class="card__content">
									<i class="card__btn-close fa fa-times"></i>
									<div class="card__caption">
										<h2 class="card__title">Food sources</h2>
										<p class="card__subtitle">What will we eat in 30 years?</p>
									</div>
									<div class="card__copy">
										<div class="meta">
											<img class="meta__avatar" src="img/authors/4.png" alt="author04" />
											<span class="meta__author">Lena Bestofos</span>
											<span class="meta__date">06/14/2015</span>
										</div>
										<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
										<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
										<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
										<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
										<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
										<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card__container card__container--closed">
								<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
									<defs>
										<clipPath id="clipPath5">
											<!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
											<circle class="clip" cx="960" cy="250" r="992"></circle>
										</clipPath>
									</defs>
									<image clip-path="url(#clipPath5)" width="1920" height="500" xlink:href="img/e.jpg"></image>
								</svg>
								<div class="card__content">
									<i class="card__btn-close fa fa-times"></i>
									<div class="card__caption">
										<h2 class="card__title">Swimming in the ocean</h2>
										<p class="card__subtitle">A Makrel's story</p>
									</div>
									<div class="card__copy">
										<div class="meta">
											<img class="meta__avatar" src="img/authors/5.png" alt="author05" />
											<span class="meta__author">Michaela Walters</span>
											<span class="meta__date">06/11/2015</span>
										</div>
										<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
										<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
										<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
										<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
										<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
										<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card__container card__container--closed">
								<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
									<defs>
										<clipPath id="clipPath6">
											<!-- r = 992 = hyp = Math.sqrt(960*960+250*250) -->
											<circle class="clip" cx="960" cy="250" r="992"></circle>
										</clipPath>
									</defs>
									<image clip-path="url(#clipPath6)" width="1920" height="500" xlink:href="img/f.jpg"></image>
								</svg>
								<div class="card__content">
									<i class="card__btn-close fa fa-times"></i>
									<div class="card__caption">
										<h2 class="card__title">Freedom Fighters</h2>
										<p class="card__subtitle">When it's too hot to think</p>
									</div>
									<div class="card__copy">
										<div class="meta">
											<img class="meta__avatar" src="img/authors/6.png" alt="author06" />
											<span class="meta__author">Tom Goldman</span>
											<span class="meta__date">06/10/2015</span>
										</div>
										<p>Business model canvas bootstrapping deployment startup. In A/B testing pivot niche market alpha conversion startup down monetization partnership business-to-consumer success for investor mass market business-to-business.</p>
										<p>Release creative social proof influencer iPad crowdsource gamification learning curve network effects monetization. Gamification business plan mass market www.discoverartisans.com direct mailing ecosystem seed round sales long tail vesting period.</p>
										<p>Product management ramen bootstrapping seed round venture holy grail technology backing partner network entrepreneur beta marketing value proposition. Android stealth conversion scrum project network effects. Creative alpha long tail conversion stealth growth hacking iteration investor A/B testing prototype customer. Startup www.discoverartisans.com direct mailing launch party partnership market ramen metrics focus value proposition.</p>
										<p>Stock infrastructure seed round sales paradigm shift technology user experience focus gamification. Partnership metrics business plan stealth business-to-business. Deployment graphical user interface monetization. Twitter incubator scrum project entrepreneur branding burn rate ramen backing paradigm shift virality crowdsource.</p>
										<p>Social proof MVP ecosystem. Ramen launch party pitch deployment stealth. Vesting period MVP equity. Focus creative partnership founders iteration agile development infographic.</p>
										<p>Low hanging fruit burn rate innovator user experience niche market A/B testing creative launch party product management release. Www.discoverartisans.com influencer business model canvas user experience gamification paradigm shift startup research &amp; development iPad agile development. Strategy incubator infographic success marketing buzz A/B testing responsive web design. Traction research &amp; development pitch seed money venture niche market accelerator network effects.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /cards -->
				</div><!-- /content -->
			</div>
		</div>
	</section>
	<!-- JS -->
	<script src="js/vendors/trianglify.min.js"></script>
	<script src="js/vendors/TweenMax.min.js"></script>
	<script src="js/vendors/ScrollToPlugin.min.js"></script>
	<script src="js/vendors/cash.min.js"></script>
	<script src="js/Card-circle.js"></script>
	<script src="js/demo.js"></script>
</body>
</html>