<?php
session_start();

include_once "libs/maLibUtils.php";
include_once "libs/maLibSQL.pdo.php";
include_once "libs/maLibSecurisation.php"; 
include_once "libs/modele.php"; 
include_once "libs/maLibForms.php"; 

$qs=$_GET;
$addArgs = "";

if ($action = valider("action"))
{
	ob_start ();
	echo "Action = '$action' <br />";

	switch($action)
	{
		
		
		// Connexion //////////////////////////////////////////////////
		case 'Connexion' :
			// On verifie la presence des champs login et passe
			if ($login = valider("login")){
				if ($passe = valider("passe")){
					if ($a = verifUser($login,$passe)){
						Connexion($_SESSION["id"]);
						
						$addArgs = "?id=$a";
					}	
				}
				
			}
			else{
				$addArgs = "?view=connexion";
			}
			

			// On redirigera vers la page index automatiquement
		break;

		case 'Deconnexion' :
			$view = valider("view");

			Deconnexion($_SESSION["id"]);
		
		break;
		case 'ajouter' :
			$view = valider("view");
			$titre =$qs['titre'];
			$contenu=$qs['contenuActu'];
			$image=$qs['imageActu'];
			if(isConnecte($_SESSION['id'])){
				AjouterActu(addslashes($titre),addslashes($contenu),addslashes($image));
			}
		break;

		case 'supprimer' :
			$view=valider("view");
			if($qs['IdActu']!=""){
				if(isConnecte($_SESSION['id'])){
					SuprressionActu($qs['IdActu']);
				}
			}
		break;

		case 'modifier' :
			$view=valider("view");
			$addArgs="?view=modifElu&idElu=".$qs['IdElu'];
		break;

		case 'actualiser' :
			$view=valider("view");
			
			
			$idElu=$qs['idElu'];
			$nom=$qs['nom'];
			$prenom=$qs['prenom'];
			$role=$qs['role'];
			$photo=$qs['photo'];
			$description=$qs['descriptionElu'];
			
			modifElu($idElu,$nom,$prenom,$role,$photo,$description);
		break;

		case 'ajouter un élu' :
			$view=valider("view");
			$addArgs="?view=modifElu&idElu";
		break;

		case 'suppression' :
			if($qs['idElu']!=""){
				if(isConnecte($_SESSION['id'])){
					SupprimerElu($qs['idElu']);
				}
			}
		break;

		
		case 'valider' :
			$view = valider("view");
			$addArgs="?view=elus";

			$nom=$qs['nom'];
			$prenom=$qs['prenom'];
			$role=$qs['role'];
			$photo=$qs['photo'];
			$description=$qs['descriptionElu'];

			if(isConnecte($_SESSION['id'])){
				AjouterElu(addslashes($nom),addslashes($prenom),addslashes($role),addslashes($photo),addslashes($description));
			}
		break;
		
		case 'Importer' :        
            $targetfolder = "compteRendus/";
            $targetfolder = $targetfolder . basename( $_FILES['file']['name']);
            move_uploaded_file($_FILES['file']['tmp_name'],$targetfolder);
            ajouterCR($_FILES['file']['name']);
            $addArgs = "?view=crendu";
            break;
    
	}
}

// On redirige toujours vers la page index, mais on ne connait pas le répertoire de base
// On l'extrait donc du chemin du script courant : $_SERVER["PHP_SELF"]
// Par exemple, si $_SERVER["PHP_SELF"] vaut /chat/data.php, dirname($_SERVER["PHP_SELF"]) contient /chat

$urlBase = dirname($_SERVER["PHP_SELF"]) . "/index.php";
// On redirige vers la page index avec les bons arguments

header("Location:" . $urlBase . $addArgs);

// On écrit seulement après cette entête
ob_end_flush();
	
?>









