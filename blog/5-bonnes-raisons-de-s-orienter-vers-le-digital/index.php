<!doctype html>

<html lang="en">

	<head>

	<!-- Required meta tags -->

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">



	<!-- Bootstrap CSS -->
	<link rel="shortcut icon" href="../../Images/brand.jpg">

	<link rel="stylesheet" href="../../css/style.css" />
	<link rel="stylesheet" href="../../style.css" />
	<link rel="stylesheet" href="../blog.css" />



	<title>Info School</title>

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
									<a id="home_link" class="navbar-brand" href="../../">
										<img class="brand" src="../../Images/brand.jpg" width = "50" height = "50" alt="Logo du site">  
										Le-BDCI
									</a>
							  
								  <!-- Classic Menu -->
								  <nav role="navigation" id="topnav_menu" class="dropdown-main">
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
								</nav>
							  
								  <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
									<!-- Some spans to act as a hamburger -->
									<span></span>
									<span></span>
									<span></span>
								  </a>
							  
								  <!-- Responsive Menu -->
								  <nav role="navigation" id="topnav_responsive_menu">
									<ul>
										<li class="list-inline-item"><a href="../developpement-web/">Développement web</a></li>
										<li class="list-inline-item"><a href="../marketing/">Marketing digital</a></li>
										<li class="list-inline-item"><a href="../entreprenariat/">entreprenariat</a></li>
										<li class="list-inline-item"><a href="../seo/">SEO</a></li>
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
						<li class="list-inline-item"><a href="../developpement-web/">Développement web</a></li>
						<li class="list-inline-item"><a href="../marketing/">Marketing digital</a></li>
						<li class="list-inline-item"><a href="../entreprenariat/">entreprenariat</a></li>
						<li class="list-inline-item"><a href="../seo/">SEO</a></li>
					</ul>
				</div>
			</div>
		</div>

		<?php 
			require_once('../../connexion_bd.php');
			$connexion = connect_bd();
			//  Récupération de l'utilisateur et de son pass hashé
			$req = $connexion->query('SELECT title, body, DATE_FORMAT(createdAt, \'%d/%m/%Y à %Hh%imin\') AS date_poste FROM articles WHERE id = 4');
			$resultat = $req->fetch();
			//cho $req;
		?>

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
					<h1 id="blog-header"> <?php echo $resultat['title']; ?></h1>
					<img class='article-cover' src="../../Images/undraw_conference_speaker_re_1rna.svg" alt="speaker">
					<h2 id="blog-body"></h2>
					<div id="body">
						<?php echo $resultat['body']; ?>
					</div>
					<div class='created-at'><span><?php echo 'Posté le '.$resultat['date_poste']; ?></span></div>
				<?php require_once('../form.php'); ?>
				</div>
				<div class="col-12 col-md-3">
					<div class="container">
						<div class="row">
							<div class="col m-2 pub">
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
		<!-- <div class="embed-responsive embed-responsive-1by1">
			<iframe class="embed-responsive-item" width="200" height="200" src="../Bureau/[Français_]_Angular__from_scratch_(_A_to_Z_)(360p).mp4" >Tuto</iframe>
		 </div>-->
		 
	
		
 


	<!-- Optional JavaScript -->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<!-- <script src="news1.js"></script> -->
	<script src="../../form.js"></script>
	<script src="../../responsive.js"></script>


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</body>

		<script>
			$(document).ready(function(){
				$("ol>li:nth-child(9)").before("<figure><img class='energy' src='../../Images/energie.png' alt='energie'><figcaption>Les énergies renouvelables</figcaption></figure>");
				$("<span>Span ajouté avec insertAfter()</span>").insertAfter("ol");
			});
		</script>

</html>

