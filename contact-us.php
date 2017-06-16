<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" class="template-default template-all">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contact-us | Debosacs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" type="text/css" href="assets/styles/styles.css" media="all" /><link rel="stylesheet" href="assets/styles/font-awesome.min.css">
	<script src="https://use.fontawesome.com/6410ab3117.js"></script>
	<link rel="icon" type="image/png" href="assets/images/favicon.png">
    <meta name="description" content="Debosacs est une société marocaine spécialisés dans le packaging qui propose des
    produits et articles publicitaires, cadeaux d’entreprises, sacs ou accessoires de petite maroquinerie.">
    <meta name="keywords" content="">
    <meta name="author" content="AbDouLlaTiF">
	<style>
		#map {
			height: 400px;
			left: -10%;
			width: 120%;
			margin-bottom: 100px;
		}
	</style>

</head>
<body>
	<div class="wrapper"> 
		<noscript>
			<div class="global-site-notice noscript">
				<div class="notice-inner">
				</div>
			</div>
		</noscript>
		<div class="page">
			<?php include("includes/header.php") ?>
			
			<div class="main-container col1-layout content-color color">
				<div class="title-top contact-title">
					<div class="title">
						<h1>Contactez nous</h1>
					</div>
				</div>
				<div class="breadcrumbs">
					<div class="container">
						<ul>
							<li class="home"> <a href="#" title="Go to Home Page">Accueil</a></li>
							<li> <strong>Notre addresse</strong></li>
						</ul>
					</div>
				</div>
				
				<div class="container">
					<h2 class="title-contact text-center">Vous nous trouverez sur Google map</h2>


					<div id="map"></div>
					<script>
                        function initMap() {
                            var uluru = {lat: 33.431525, lng: -7.638837};
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 17,
                                scrollwheel: false,
                                center: uluru
                            });
                            var marker = new google.maps.Marker({
                                position: uluru,
                                map: map
                            });
                        }
					</script>
					<script async defer
							src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA5hbXlesLLAtIZxkkIzQZRBFFA6Y8YxY&callback=initMap">
					</script>
					<ul class="row text-center">
						<li class="col-md-4">
							<div class="contact-list-item"><a href="tel:212 663 787 874"><i class="icon-call-in"></i><br><span class="text">+212 663 787 874</span></a></div>
						</li>
						<li class="col-md-4">
							<div class="contact-list-item"><i class="icon-pointer"></i><br><span class="text">16 Rue El Gara, 1er Etage, Appt N°1, Ain Sebaa - Aîn-Sebaâ (AR)</span></div>
						</li>
						<li class="col-md-4">
							<div class="contact-list-item"><a href="mailto:Contact@AbaniStore.com"><i class="icon-envelope-open"></i><br><span class="text">Contact@debosacs.com</span></a></div>
						</li>
					</ul>
					<form action="" class="contact-form form-wrapper">
						<ul class="row">
							<li class="col-md-6">
								<div class="form-controls"><input type="text" placeholder="Nom*" class="form-control"></div>
								<div class="form-controls"><input type="email" placeholder="Email*" class="form-control"></div>
								<div class="form-controls"><input type="text" placeholder="Sujet" class="form-control"></div>
							</li>
							<li class="col-md-6">
								<div class="form-controls"><textarea placeholder="Message" class="form-control"></textarea></div>
							</li>
						</ul>
						<div class="text-center"><input type="submit" value="Envoyer votre message" class="inp-submit"></div>
					</form>
				</div>

                <?php include("includes/partenaire.php") ?>
			</div><!--- .main-container -->
			<?php include("includes/footer.php") ?>
		</div><!--- .page -->
	</div><!--- .wrapper -->
	
	<script type="text/javascript" src="assets/scripts/jquery.min.js"></script>
	<script type="text/javascript" src="assets/scripts/jquery.noconflict.js"></script>
	<script type="text/javascript" src="assets/scripts/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/scripts/jquery.bxslider.js"></script> 
	<script type="text/javascript" src="assets/scripts/jquery.ddslick.js"></script> 
	<script type="text/javascript" src="assets/scripts/jquery.easing.min.js"></script>
	<script type="text/javascript" src="assets/scripts/jquery.meanmenu.hack.js"></script>
	<script type="text/javascript" src="assets/scripts/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="assets/scripts/jquery.animateNumber.min.js"></script>
	<script type="text/javascript" src="assets/scripts/jquery.heapbox-0.9.4.min.js"></script>
	<script type="text/javascript" src="assets/scripts/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/scripts/packery-mode.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/scripts/video.js"></script><script type="text/javascript" src="assets/scripts/jquery-ui.js"></script>
	
	<script type="text/javascript" src="assets/scripts/magiccart/magicproduct.js"></script> 
	<script type="text/javascript" src="assets/scripts/magiccart/magicaccordion.js"></script> 
	<script type="text/javascript" src="assets/scripts/magiccart/magicmenu.js"></script>
	
	<script type="text/javascript" src="assets/scripts/script.js"></script>
	<!--[if lt IE 9]> 
	<script type="text/javascript" src="assets/scripts/bootstrap/html5shiv.js"></script>
	<script type="text/javascript" src="assets/scripts/bootstrap/respond.min.js"></script> <![endif]-->
	<!--[if lt IE 7]> 
	<script type="text/javascript" src="assets/scripts/lte-ie7.js"></script>
	<script type="text/javascript" src="assets/scripts/ds-sleight.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/styles/styles-ie.css" media="all" /> <![endif]-->
</body>
</html>