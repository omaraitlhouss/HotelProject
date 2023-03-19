<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OREN - HOTEL VULCANO</title>
    <meta name="description" content="OREN is responsive multi-purpose HTML5 template compatible with Bootstrap 4. Take your Startup business website to the next level. It is designed for agency, creative studio, freelance, personal, corporate digital, businesses or any type of person or business who wants to showcase their work, services and professional way.">
    <meta name="keywords" content="agency, business, corporate, creative studio, freelance, gradient, multipurpose. photography, parallax, personal, responsive">
    <meta name="author" content="rometheme.net"> 
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
    <script src="js/vendor/modernizr.min.js"></script>

    <!--Formulaire-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>
		#inputState{
			width:10%;
			display: inline;
			margin-top: 7px;
		}
		#date{
			width:21%;
		}
		.container .form-group {display:inline;padding:10px}
		.containerDate{
			max-width: 100%;
			width:72%;
			margin: 1%;
			text-align: center;
		}
		.btn{
			vertical-align: baseline;
		}
		</style>
</head>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!--Header-->
	<?php include 'header.php'; ?>
 
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/cov16.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Hotel Vulcano</div>
			</div>
		</div>
	</div>
<!--Formulaire Reserver-->
	<div style="background-color: #313131;padding-top: 32px;color: #fff;">
	<div class="container">
		<div class="footer-title" style="color: #E63F64;text-align: center;margin-top: -16px;font-size: 24px;font-weight: 700;border-bottom: double;">
								RÉSERVEZ VOTRE HÔTEL
							</div>
		<form  action="chambre.php" method="POST">
			
			
		<div class="form-group">
	      	<label for="inputState">Pays : </label>
	      	<select id="inputState" class="form-control" name="pays" style="width: 17%;">
	        <option selected>Italy</option>
	       
	      </select>
	  </div>
	<div class="form-group">
	      <label for="inputState">Ville : </label>
	      <select id="inputState" class="form-control" name="ville" style="width: 26%;"> 
	        <option selected>VULCANO</option>
	        
	      </select>
	  </div>
	 <div class="form-group" style="margin-left: 15px;">
	      <label for="inputState">hotel : </label>
	      <select id="inputState" class="form-control" name="hotel" style="width: 35%;">
	        <option selected>OHen HOTEL Therasia Resort Sea and SPA</option>
	       
	      </select>
	  </div>
	<div class="form-group" style="margin-left: -10px">
	      <label for="inputState">Chambres : </label>
	      <select id="inputState" class="form-control" name="nbrchambre" style="width: 158px;">
	        <option selected>1</option>
	        <option>2</option>
	        <option>3</option>
	        <option>4</option>
	      </select>
	  </div>

	  <div class="form-group" style="margin-left: 13px;">  
	      <label for="inputState">Adultes : </label>
	      <select id="inputState" class="form-control" name="nbradultes" style="width: 253px;">
	        <option selected>1</option>
	        <option>2</option>
	        <option>3</option>
	       
	      </select>
	  </div>
	  <div class="form-group">
	      <label for="inputState">Enfants : </label>
	      <select id="inputState" class="form-control" name="nbrenfants" style="width: 138px;">
	        <option selected> 0</option>
	        <option>1</option>
	        <option>2</option>
	        <option>3</option>
	      </select>
	  </div>
  </div>

  <div class="container">
  	<div class="containerDate">
    <div class="form-group"">
    	<label style="margin-left: -67px;">Date d'arrivé : </label>
    	<input type="date" name="dateArr" id="date" class="form-control" style="display:inline">
    	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  
    	<label>Date d'épart : </label>
    	
    	<input type="date" name="dateDep" id="date" class="form-control" style="display:inline">
    	&nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp
    	<input type="submit" name="submit"  class="btn btn-primary" style="margin-left: 39px;margin-right: -61px;" value="Reserver">
    </div>
</div>
    </div>
   

</form>
</br>

</div>
	

	<!-- PORTFOLIO -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">						

				<div class="row">
					<div class="col-sm-8 col-md-8">
						<img src="images/vu1.jpg" alt="" class="img-fluid shadow" style="">
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="row">
							<div class="col-sm-12 col-md-12 mb-4">
								<img src="images/vu2.jpg" alt="" class="img-fluid shadow">
							</div>
							<div class="col-sm-12 col-md-12">
								<img src="images/vu3.jpg" alt="" class="img-fluid shadow">
							</div>
						</div>
					</div>
				</div>

				<div class="content-wrap">
					<div class="row">

						<div class="col-sm-12 col-md-8">
							<h3 class="text-primary">DÉTAILS SUR L'HÔTEL</h3>
							<p>Situé sur la péninsule de Vulcanello, le Therasia Resort Sea and SPA offre des vues sur les îles Éoliennes. Cet impressionnant édifice en pierres blanches propose un spa moderne et un accès privé à la mer.

L'établissement a été construit avec des matériaux locaux, dont de la roche en fusion de l'Etna, de la terre cuite sicilienne ainsi que du bois de cèdre et d'olivier. Les chambres élégantes sont décorées dans des couleurs douces et apaisantes.

À quelques pas du Therasia Resort Sea and SPA, vous pourrez découvrir un sentier de randonnée d'1 km et marcher à travers la végétation méditerranéenne, les cactus et les plantes subtropicales. Une navette gratuite vers le centre de Vulcano et le port est également assurée.

Chaque chambre est dotée d'un balcon, d'une télévision par satellite à écran LCD ainsi que d'une salle de bains privative présentant des pierres de lave et du carrelage coloré sicilien. Certaines d'entre elles jouissent de vues sur la mer et les îles.

Le Therasia Resort Sea and SPA dispose de 3 restaurants, dont l'Aricpelago, une pizzeria-grill, et l'Il Cappero, qui sert une cuisine méditerranéenne avec des spécialités siciliennes. Le copieux petit-déjeuner buffet se compose de viennoiseries de la région.

Cet établissement a également été bien noté pour son excellent emplacement à Vulcano ! Les clients en sont plus satisfaits en comparaison avec d'autres établissements dans cette ville.

Les couples apprécient particulièrement l'emplacement de cet établissement. Ils lui donnent la note de 9,9 pour un séjour à deux.

Cet établissement a également été bien noté pour son excellent rapport qualité/prix à Vulcano ! Les clients en ont plus pour leur argent en comparaison avec d'autres établissements dans cette ville.</p>
						</div>
						<div class="col-sm-12 col-md-4">
							<p class="uk18 text-black mb-1"><strong>Date d'ouverture :</strong></p>
							<p>25th February, 2017</p>
							<p class="uk18 text-black mb-1"><strong>Etoils :</strong></p>
							<p>3</p>
										
						</div>
						
						<div class="col-sm-12 col-md-8">
							<h3 class="text-primary">Ses Point Forts</h3>
							<p> Piscine </br> Spa et centre de bien-être </br> Parking gratuit </br> Animaux domestiques admis </br> Connexion Wi-Fi gratuite </br> Restaurant </br> Bar </br> Plage privée</p>
						</div>
						
					</div>
				</div>

				

			</div>
		</div>
	</div>

	<!-- FOOTER SECTION -->
	<?php include 'footer.php' ?>
	
	<!-- JS VENDOR -->
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/owl.carousel.js"></script>
	<script src="js/vendor/jquery.magnific-popup.min.js"></script>
	<script src="js/vendor/isotope.pkgd.min.js"></script>
	<script src="js/vendor/imagesloaded.pkgd.min.js"></script>

	<!-- SENDMAIL -->
	<script src="js/vendor/validator.min.js"></script>
	<script src="js/vendor/form-scripts.js"></script>

	<script src="js/script.js"></script>

</body>
</html>