<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Game Home Page</title>

	<!-- Load fonts -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

	<!-- Load css styles -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>
	<div class="jumbotron home home-fullscreen" id="home">
		<div class="mask"></div>
		<a href="" class="menu-toggle" id="nav-expander"><i class="fa fa-bars"></i></a>
		<!-- Offsite navigation -->
		<nav class="menu">
			<a href="#" class="close"><i class="fa fa-close"></i></a>
			<h3>Menu</h3>
			<ul class="nav">
				<li><a data-scroll href="#contact">Perfil</a></li>
				<li><a data-scroll href="#portfolio">Jogos</a></li>
				
			</ul>
		</nav>
		<div class="container">
			<div class="header-info">
				<h1>Gamer Play House</h1>
				<p>A Gamer Play House é uma empresa atual que busca atender,<br>
                   todos os públicos, oferecendo produtos atuais e de qualidade<br>
				   sempre pensando no bem-estar de nosso cliente. <br> 
				   Confira, a seguir, nosso catalogo de jogos.
				</p>
				<a href="#portfolio" class="btn btn-primary">Conferi agora.</a>
			</div>
		</div>
	</div>
	<!-- Catalogo de Produtos -->
	<section id="portfolio" class="darker">
		<div class="container">
			<header>
				<h2>Exemplares disponíveis</h2>
				<p>Aproveite para adiquiri os melhores jogos, com preço acessivel.</p>
			</header>
			<div id="single-project"></div>
			<div class="row">
				<?php
					//Teste
					$i = 1;
					while ($i <= 3):
						echo '<figure class="portfolio-item col-md-4 col-sm-6" >
							<img class="img-responsive" src="img/bg1.jpg" />
							<div class="conteudo-left">
								<ul class="list">
								<li class="price">$39,99</li>
								<li><strong>Free</strong> Setup</li>
								<li><strong>24/7</strong> Support</li>
								<li><strong>25 GB</strong> File Storage</li>
								</ul>
								<button id="btCompra" type="button" >Comprar</button>
							</div>
						</figure>';
						$i++;
					endwhile;

				?>
			</div>
		</div>
	</section>
	<!-- Portfolio section end -->
	<!-- Footer start -->
	<footer>
		<div class="container">
			<div class="row">
			</div>
		</div>
	</footer>
	<!-- Footer end  -->

	<!-- Load jQuery -->
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

	<!-- Load Booststrap -->
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script type="text/javascript" src="js/smooth-scroll.js"></script>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!-- Load custom js for theme -->
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>