<?php

namespace Website\Controller
use \Symfony\Component\Yaml\Yaml;

abstract class AbstractBaseController{
	
	public function GetConnexion(bdd){
		$bdd =  new PDO('mysql:host=localhost;dbname=twitter', 'root', '');
		$request = $bdd->
	}
}