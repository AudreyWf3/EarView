<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	public function contact()
	{
		$this->show('default/contact');
	}

	public function afficheCgv()
	{
		$this->show('default/cgv', ['nom' => 'bonjour']);
	}

	public function earview()
	{
		$this->show('default/earview');
	}


}