<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

    <title>Le blog du codeur inspiré</title>

    <link rel="shortcut icon" href="../../Images/brand.jpg">

    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../style.css" />
    <link rel="stylesheet" href="../blog.css" />
</head>
    <body>

        <div class="dark-nav">
			<div class="container-fluid">
				<div class="row">
					<div class="col">
						<div class="col">
							<!-- <div id="responsive"></div> -->
							<div id="root">
								<div id="topnav" class="topnav">
									<a id="home_link" class="navbar-brand" href="../">
										<img class="brand" src="../../Images/brand.jpg" width = "50" height = "50" alt="Logo du site">  
										Le-BDCI
									</a>
							  
								  <!-- Classic Menu -->
								  <!-- <nav role="navigation" id="topnav_menu" class="dropdown-main">
									<ul class="dropdown">
									  <li class="topnav_link"><a href="../../">Accueil</a></li>
									  <li class="topnav_link"><a href="javascript:void(0)">Services</a>
										  <div class="menu-bar">
											  <ul>
												  <li><a href="../../services/">Développement web et mobile</a></li>
												  <li><a href="#">Marketing</a></li>
												  <li><a href="#">Mentorat</a></li>
												  <li><a href="#">SEO</a></li>
											  </ul>
										  </div>
									  </li>
									  
		  
									  <li class="topnav_link"><a href="javascript:void(0)">Cours</a>
										  <div class="menu-bar">
											  <ul>
												  <li><a href="../../cours/">Développement</a></li>
												  <li><a href="#">Marketing digital</a></li>
												  <li><a href="#">entreprenariat</a></li>
												  <li><a href="#">Soft Skills</a></li>
												  <li><a href="#">Design</a></li>
											  </ul>
										  </div>
									  </li>
									  <li class="topnav_link"><a href="../">Blog</a></li>
									  <li class="topnav_link"><a href="javascript:void(0)">Espace clients</a>
										  <div class="menu-bar">
											  <ul>
												  <li><a href="../../espace-clients/">Témoignage</a></li>
												  <li><a href="../../espace-clients/">Projets</a></li>
												  <li><a href="../../message/">Message</a></li>
											  </ul>
										  </div>
									  </li>
									  <li class="topnav_link"><a href="../../faq/">FAQ</a></li>
								  </ul>
								</nav> -->
							  
								  <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
									<!-- Some spans to act as a hamburger -->
									<span></span>
									<span></span>
									<span></span>
								  </a>
							  
								  <!-- Responsive Menu -->
								  <nav role="navigation" id="topnav_responsive_menu">
									<ul>
										<li class="list-inline-item"><a href="../developpement-web">Développement web</a></li>
										<li class="list-inline-item"><a href="../marketing">Marketing digital</a></li>
										<li class="list-inline-item"><a href="../seo">SEO</a></li>
									</ul>
								  </nav>
								</div>
							  </div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div class="container jumbotron-container">
            <div class="row my-4">
                <div class="col backGround">
                    <div class="jumbotron">
                        <h1 class="heroText">Le blog du codeur inspiré</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container jumbotron-container  mobileGround">
            <div class="row mb-4">
                <div class="col">
                    <div class="jumbotron">
                        <h1 class="heroText">Le blog du codeur inspiré</h1>
                    </div>
                </div>
            </div>
        </div>

		<div class="container bg-grey sticky">
			<div class="row">
				<div class="col second-navbar-main">
					<ul class=" list-inline second-navbar">
						<li class="list-inline-item"><a href="../developpement-web">Développement web</a></li>
						<li class="list-inline-item"><a href="../marketing">Marketing digital</a></li>
						<li class="list-inline-item"><a href="./">Entreprenariat</a></li>
						<li class="list-inline-item"><a href="../seo">SEO</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row content-wrapper">
				<div class="col-2 px-5 left-bar">
					<ul class='my-4'>
						<li class='my-4 social-media'><a href="https://www.linkedin.com/in/sandaogo-malbila/" target='_blank'><img src="../../Images/linkedin.png" alt="linkedin"></a></li>
						<li class='my-4 social-media'><a href="#"><img src="../../Images/facebook.png" alt="facebook"></a></li>
						<li class='my-4 social-media'><a href="https://twitter.com/s_malbila/" target='_blank'><img src="../../Images/twitter.png" alt="twitter"></a></li>
						<li class='my-4 social-media'><a href="https://api.whatsapp.com/send?phone=22656519733" target='_blank'><img src="../../Images/whatsapp.png" alt="whatsapp"></a></li>
						<li class='my-4 social-media'><a href="#"><img src="../../Images/instagram.png" alt="instagram"></a></li>
						<li class='my-4 social-media'><a href="#"><img src="../../Images/youtube.png" alt="youtube"></a></li>
						<li class='my-4 social-media'><a href="#"><img src="../../Images/pinterest.png" alt="pinterest"></a></li>
					</ul>
				</div>
				<div class="col-12 col-md-7 my-2 p-4 blog-container">
					<h1>Entreprenariat</h1>
					<div>
						<?php require_once('../form.php'); ?>
					</div>
				</div>
				<div class="col-12 col-md-3">
					<div class="container">
						<div class="row">
							<div class="col m-2">
								<h1>
								</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg-light">
			<div class="container-fluid">
				<div class="row pt-4 pb-3">
					<div class="col">
						<ul class="list-inline text-center">
							<li class="list-inline-item">
								<a href="#">À propos</a>
							</li>
							<li class="list-inline-item">&middot;</li>
							<li class="list-inline-item">
								<a href="#">Vie privée</a>
							</li>
							<li class="list-inline-item">&middot;</li>
							<li class="list-inline-item">
								<a href="#">Conditions d'utilisations</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<script src="../../form.js"></script>
		<script src="../../responsive.js"></script>
        

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>