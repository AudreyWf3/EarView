<!DOCTYPE html>
<html lang="fr">
<head>

	<!--/!\ META DE BASE-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--/!\ APPEL AU FRAMEWORK BOOTSTRAP-->
	<link href="assets/css/bootstrap.css" rel="stylesheet">

	<!--/!\ APPEL A NORMALIZE-->
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>

	<!--/!\ APPEL A ANIMATE-->
	<link rel='stylesheet prefetch' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/animate.min.css'>

	<!--/!\ APPEL AUX TYPOS-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!--/!\ TITRE DE LA PAGE-->
	<title><?= $this->e($title) ?></title>

	<!--/!\ APPEL AU STYLE DE LA PAGE-->
	<?= $this->section('style') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">

</head>



<!--*********************************************************-->
<!--************************BODY*****************************-->
<!--*********************************************************-->

<body>
	
<!--*********************************************************-->
<!--***********************HEADER****************************-->
<!--*********************************************************-->

<header>
			
	<div class="headerGris">
		<div class="container">
			<div class="row">

				<!--LOGO-->
				<div class="col-xs-6 col-sm-2 col-md-2">
					 <a class="navbar-brand" href="#"><img id="logo" src="assets/img/logo.jpg"></a>
				</div>


				<!--MENU NAV-->
				<div id="menuNav" class="col-xs-6 col-sm-10 col-md-10">

					<nav class="navbar navbar-default">
					  <div class="container-fluid">

					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="menu">
					      <ul class="nav navbar-nav">
					        <li><a class="activeOrange" href="#">ACCUEIL</a></li>
					        <li><a href="#">EAR VIEW</a></li>
					        <li><a href="#">PRÉCOMMANDE</a></li>
					        <li><a href="#">NOUS</a></li>		
					        <li><a href="#">BOÎTE À IDÉES</a></li>		
					        <li><a href="#">ACTUALITÉS</a></li>
					        <li><a href="#">CONTACT</a></li>		
					        <li><a href="#">MON COMPTE</a></li>					
					        <li><a href="#"><span class="fa fa-shopping-basket"></span></a></li>			
					        <li><a class="langue2" href="#">/  EN</a><a class="langue1" href="#">FR</a></li>					        	
					      </ul>
					    </div><!-- /.navbar-collapse -->

					  </div><!-- /.container-fluid -->
					</nav>

									
				</div>


			</div>	
		</div>
	</div>		

</header>


<!--*********************************************************-->
<!--*******************SECTION CENTRALE**********************-->
<!--*********************************************************-->
<section>

	<?= $this->section('main_content') ?>


</section>

<!--*********************************************************-->
<!--***********************FOOTER****************************-->
<!--*********************************************************-->

<footer>

	<div class="fondBleu"></div>
	<div class="footerGris">
		<div class="container">
			<div class="row">

				<!--COORDONNÉES-->
				<div class="col-xs-12 col-sm-6 col-md-6">

					<h2><span class="epais">bsst</span> . Make your life easier</h2>
					<a href=""><span class="fa fa-home"></span> 36 Rue du Sergent Michel Berthet, 69009 Lyon</a>
					<br/>
					<a href=""><span class="fa fa-envelope"></span> contact.bsst@gmail.com</a>					
				</div>

				
				<div class="col-xs-12 col-sm-6 col-md-6">
					<!--RESEAUX SOCIAUX-->
					<div id="icones">
						<a href="https://linkedin.com/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
						<a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-square"></i></a>
						<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
						<a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus-square"></i></a>				
						<a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter-square"></i></a>
						<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-square"></i></a> 
					</div>
					<br/> <br/>
					<!--COPYRIGHT-->
					<div class="copyright">
						 <p>Copyright&#9400;2017. BSST Built Smart Solutions Together.</p>
						 <br/>
						 <p>Tous droits réservés.<a href="#"> Mentions légales.</a></p>
					</div>

				</div>



			</div>	
		</div>
	</div>		


</footer>







<!--*********************************************************-->
<!--***********************SCRIPT****************************-->
<!--*********************************************************-->

	<?= $this->section('script') ?>


</body>
</html>