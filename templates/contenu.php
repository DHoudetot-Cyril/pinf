<?php  
 	$var = valider("view");
     $idPage=$_GET["idPage"];
     $f = 'javascript/data.json';
     $fOuvert = fopen($f,"r");

     // regarde si le fichier est accessible en écriture
     if (is_writable($f)) {
    //lecture
    	$data=fread($fOuvert,filesize($f));
    	$dataJson=json_decode($data,true);
		
		foreach ($dataJson["page"] as $page ){
			if ($page["id_page"]==$idPage){
				$affichage=$page["contenu"];
				$nomPage=$page["nom page"];
			}
		}	
	}
	else{
		$affichage="ERREUR";
		$nomPage="ERREUR";
    }
	fclose($fOuvert);
?> 

<div class="cheat"></div>
<div class="container-fluid Picture"></div>

<div class="container Text">   
	 
 	<!-- BREADCRUMB -->
 	<nav aria-label="breadcrumb">
      	<ol class="breadcrumb">
           	<li class="breadcrumb-item"><a href="index.php">accueil</a></li>
           	<li class="breadcrumb-item active" aria-current="page"><?php echo($nomPage);?></li>
      	</ol>
 	</nav>
	 
 	<!-- TITRE -->
	<?php
	include_once "libs/modele.php";  
	$connecte=isConnecte($_SESSION["id"]);
	if($connecte){
		echo "<h1>Modification d'une page</h1>";
		
		MkEditAdminOnVitrine();
	?>
 	<!-- Le TEXTE -->
	 <?php } ?>
 	<div class="container content" id="divModif"<?php if($connecte){?> contenteditable="true" <?php } ?>>
     	<?php echo($affichage); ?>
		 <?php if ($connecte){ echo('<link href="css/contenu.css" rel="stylesheet"/>');}?>
	</div>
 	</br>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="javascript\data.js"></script> 	
<script src="javascript\script.js"></script> 	
<script src="javascript\modif.js"></script> 
