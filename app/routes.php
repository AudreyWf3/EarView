<?php
	
	$w_routes = array(

		['GET', '/', 'Default#home', 'default_home'],

		// methode url controller#method nom de la route (unique)

		['GET', '/contact', 'Default#contact', 'default_contact'],

		['GET', '/cgv', 'Default#afficherCgv', 'default_cgv'],		

		// route pour la page d'administration
		['GET', '/admin', 'Admin#dashboard', 'admin_dashboard'],	


		// route pour la page du projet EarView
		['GET', '/earview', 'Default#earview', 'default_earview'],	
		

	);