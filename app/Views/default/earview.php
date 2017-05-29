<?php $this->layout('layout', ['title' => 'Earview']) ?>

<?php $this->start('main_content') ?>


<link rel="stylesheet" type="text/css" href="assets/css/earview.css">

<!--bloc image du haut-->
<div class="partieHaut">
	<div id="imageEarview" alt="Earview, pour que les obstacles n'en soient plus !"></div>
	<h2>Pour que les <span class="gras">obstacles</span> n'en soient plus...</h2>
	<h3>Découvrez la nouvelle solution de navigation proposée par BSST</h3>
</div>



<!--bloc partie du bas-->
<div id="partieBas" class="fondBlanc">
	<div class="container">
		<div class="row">

			<h4>Projet</h4>
			<h5>EAR VIEW</h5>

			<!--BLOCS GAUCHE-->
			<div id="blocGauche" class="col-xs-12 col-sm-6 col-md-6">

				<!--Partie Réflexion-->
				<div id="reflexion" alt="réflexion sur le projet">
					<h6>Réflexion <a href="#">&raquo;</a></h6>
				</div>

				<!--Partie Produits-->
				<div id="produits" alt="ensemble des éléments composant le produit final">
					<h6>Produits <a href="#">&raquo;</a></h6>
				</div>

			</div>


			<!--BLOCS DROITE-->
			<div id="blocDroite" class="col-xs-12 col-sm-6 col-md-6">
				
				<!--Partie Concept-->
				<div id="concept" alt="comprendre le concept">
					<h6>Concept <a href="#">&laquo;</a></h6>
				</div>

				<!--Partie Fonctionnement-->
				<div id="fonctionnement" alt="comprendre le fonctionnement du produit final">
					<h6>Fonctionnement <a href="#">&laquo;</a></h6>
				</div>

			</div>


		</div>	
	</div>
</div>		











<?php $this->stop('main_content') ?>
  