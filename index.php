<?php
session_start();

	include_once "libs/maLibUtils.php";
	include_once "libs/maLibForms.php";
	include_once "libs/modele.php";
	include_once "libs/maLibDynamique.php";

	
	// on récupère le paramètre view éventuel 
	$view = valider("view");
	if (!$view) $view = "home";  

	include("templatesGlobaux/header.php");
	
	//En fonction de la vue à afficher, on appelle tel ou tel template
	switch($view)
	{		
		

		case "home" : 
			include("templatesGlobaux/home.php");
		break;

		default : // si le template correspondant à l'argument existe, on l'affiche
			if (file_exists("templates/$view.php"))
				include("templates/$view.php");
	}	
	include("templatesGlobaux/footer.php");
?>








