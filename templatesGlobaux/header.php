<?php
	// Si la page est appelée directement par son adresse, on redirige en passant par la page index
	if (basename($_SERVER["PHP_SELF"]) != "index.php"){
		header("Location:../index.php");
		die("");
	}
?>
<!-- **** H E A D **** -->
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Commune de Boisdinghem</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="LG2C - IG2I Centrale Lille - étudiant en 2ème année - projet informatique" />
     <link rel="icon" type="image/png" sizes="16x16" href="ressources\header\Blason.png">
	
	<!-- CSS -->
	<link href="css\bootstrap.css" rel="stylesheet"/>
	<link href="css\header.css" rel="stylesheet"/>
	<link href="css\home.css" rel="stylesheet"/>
	<link href="css\footer.css" rel="stylesheet"/> 
	<link href="css\templates.css" rel="stylesheet"/>
	<link href="css\actualites.css" rel="stylesheet"/>
	<!-- JS -->
	<script src="javascript\jquery-3.6.0.js"></script>
	<script src="javascript\header.js"></script>
	<script src="javascript\actualites.js"></script>

	<!-- Librairies JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>	
	<script src="https://kit.fontawesome.com/556dd2364e.js" crossorigin="anonymous"></script>
</head>
<!-- **** F I N    H E A D **** -->

<!-- **** B O D Y **** -->
<!-- **** H E A D E R **** -->
<body class="c" id="idBody">
	<div class="header">
		<a class="logo" href="index.php">
			<img src="ressources\header\Green-BOISDINGHEM.fr.svg" alt="logo" onmouseover="disableHeader()">
		</a>
		<nav>
			<div class="hamburger">
				<span></span><span></span> <span></span>
			</div>
		
			<ul class="nav_links">
				<li> <span class="categorie" id="c1" onmouseover="enableHeader(id)">mairie</span></li>
				<li> <span class="categorie" id="c2" onmouseover="enableHeader(id)">école</span></li>
				<li> <span class="categorie" id="c3" onmouseover="enableHeader(id)">associations</span></li>
				<li> <span class="categorie" id="c4" onmouseover="enableHeader(id)">paroisse</span></li>
				<li> <span class="categorie" id="c5" onmouseover="enableHeader(id)">entreprises</span></li>
				<li> <span class="categorie" id="c6" onmouseover="enableHeader(id)">patrimoine à Boisdinghem</span></li> 
				<li> <span class="categorie" id="c7" onmouseover="enableHeader(id)">Histoire</span></li> 
				<?php

					include_once "libs/modele.php";  
					$connecte=isConnecte($_SESSION["id"]);
					if($connecte){

						echo'<li><a href="index.php?view=cimetiere"><img onmouseover=disableHeader() class="cim" src="ressources\header\Green-Graveyard.svg" alt="Icone Cimetiere"></a></li>';	
					}
					else
					{
						echo '<li><a href="index.php?view=connexion"><img onmouseover=disableHeader() class="cim" src="ressources\header\Green-Graveyard.svg" alt="Icone Cimetiere"></a></li>';
					}
				?>
				
		
			</ul>
		</nav>
	</div>
	<div class="sous-menu" onmouseleave="disableHeader()">


		<!-- *************** MAIRIE *************** -->
		<div class="divSM" id="c1sm">
			<div class="sm sm1">
				<p onclick="enableVSM('idVSM1', 'imgSM1')">Conseil municipal<img id="imgSM1" src="ressources\header\Fleche.svg" alt="">	</p>	
				<div class="valueSm" id="idVSM1">
					<h6><a href="index.php?view=crendu">Compte rendus des conseils</a></h6> 
					<h6><a href="index.php?view=elus">Vos élus</a></h6>
				</div>
			</div>

			<div class="sm sm2">
				<p onclick="enableVSM('idVSM2', 'imgSM2')">Démarches<img id="imgSM2" src="ressources\header\Fleche.svg" alt="">	</p>	
				<div class="valueSm" id="idVSM2">
					<h6><a href="index.php?view=contenu&idPage=4">Inscription sur liste électrorale</a></h6> 
					<h6><a href="index.php?view=contenu&idPage=7">Autorisation d’urbanisme</a></h6>
					<h6><a href="index.php?view=contenu&idPage=8">Location salle des fêtes</a></h6>
					<h6><a href="index.php?view=contenu&idPage=5">Pertes, renouvellement</a></h6>
					<h6><a href="index.php?view=contenu&idPage=6">Carte d’identité</a></h6>
					<h6><a href="index.php?view=contenu&idPage=9">Recensement</a></h6>
				</div>
			</div>
			<div class="sm sm3">
				<a href="#"><p>Accueil à la mairie</p></a>
			</div>
		</div>


		<!-- *************** ECOLE *************** -->
		<div class="divSM" id="c2sm">
			<div class="sm sm1">
				<a href="index.php?view=contenu&idPage=13"><p>Présentation du RPI</p></a>
			</div>
			<div class="sm sm2">
				<a href="index.php?view=contenu&idPage=14"><p>Classe maternelle</p></a>
			</div>
			<div class="sm sm3">
				<a href="index.php?view=contenu&idPage=15"><p>Associations des parents d'élèves</p></a>
			</div>
			<div class="sm sm4">
				<a href="index.php?view=contenu&idPage=16"><p>Cantine et garderie</p></a>
			</div>
		</div>


		<!-- *************** ASSOCIATIONS *************** -->
		<div class="divSM" id="c3sm">
			<div class="sm sm1">
				<a href="index.php?view=contenu&idPage=20"><p>Association du patrimoine</p></a>
			</div>
			<div class="sm sm2">
				<a href="index.php?view=contenu&idPage=18"><p>Club de football</p></a>
			</div>
			<div class="sm sm3">
				<a href="index.php?view=contenu&idPage=19"><p>Société de chasse</p></a>
			</div>
			<div class="sm sm4">
				<p onclick="enableVSM('idVSM3', 'imgSM3')">Comité des fêtes<img id="imgSM3" src="ressources\header\Fleche.svg" alt="">	</p>	
				<div class="valueSm" id="idVSM3">
					<h6><a href="index.php?view=contenu&idPage=17">Présentation du comité</a></h6> 
					<h6><a href="index.php?view=contenu&idPage=12">Actvités du comité</a></h6>
				</div>
			</div>


		</div>


		<!-- *************** PAROISSE *************** -->
		<div class="divSM" id="c4sm"  >
			<div class="sm sm1">
				<a href="index.php?view=contenu&idPage=21"><p>Église de Boisdinghem</p></a>
			</div>
			<div class="sm sm2">
				<a href="index.php?view=contenu&idPage=22"><p>Vie paroissiale</p></a>
			</div>

		</div>

		
		<!-- *************** ENTREPRISES *************** -->
		<div class="divSM" id="c5sm">
			<div class="sm sm1">
				<a href="index.php?view=contenu&idPage=23"><p>Philippe Tétart <br>(éleveur de bovins)</p></a>
			</div>
			<div class="sm sm2">
				<a href="index.php?view=contenu&idPage=24"><p>Bati Nuisibles</p></a>
			</div>
			<div class="sm sm3">
				<a href="index.php?view=contenu&idPage=25"><p>La passion du bois</p></a>
			</div>
			<div class="sm sm4">
				<a href="index.php?view=contenu&idPage=26"><p>De la garde Onirienne</p></a>
			</div>
			<div class="sm sm5">
				<a href="index.php?view=contenu&idPage=27"><p>Menuiserie Dominique Viellard</p></a>
			</div>
			<div class="sm sm6">
				<a href="index.php?view=contenu&idPage=28"><p>PEINT TOUT</p></a>
			</div>
			<div class="sm sm6">
				<a href="index.php?view=contenu&idPage=29"><p>Audo'Chauff</p></a>
			</div>
		</div>

		<!-- *************** Patrimoine à Boisdinghem *************** -->
		<div class="divSM" id="c6sm">
			<div class="sm sm1">
				<a href="https://www.google.com/"><p>page1</p> </a>
			</div>
			<div class="sm sm2">
				<a href="index.php?view=contenu&idPage=24"><p>Chapelle</p></a>
			</div>
			<div class="sm sm3">
				<a href="index.php?view=contenu&idPage=24"><p>petit puit de Zutove</p></a>
			</div>

		</div> 

		<!-- *************** Histoire *************** -->
		<div class="divSM" id="c7sm">
			<div class="sm sm1">
				<a href="ressources/histoire/comité d'histoire du haut pays boisdinghem.pdf"><p>Comité d'Histoire<br>du Haut Pays<br>Communes du canton de Lumbres</p> </a>
			</div>
			<div class="sm sm2">
				<a href="ressources/histoire/Conférence du curé de Boisdinghem sur sa paroisse durant la Grande Guerre.pdf"><p>Temoignages de la première Guerre Mondiale</p></a>
			</div>

		</div> 

		
		
	</div>
