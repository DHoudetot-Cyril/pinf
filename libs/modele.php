<?php

// inclure ici la librairie faciliant les requêtes SQL
include_once("maLibSQL.pdo.php");

function verifUserBdd($login,$passe)
{
	$SQL="SELECT id_admin FROM admin WHERE login='$login' AND passe='$passe'";
	return SQLGetChamp($SQL);
}

function isConnecte($idAdmin)
{
	// vérifie si l'utilisateur est un connecté en tant qu'administrateur
	$SQL = "SELECT id_admin FROM admin 
	WHERE connecte = '1' AND id_admin='$idAdmin'";
	return SQLGetChamp($SQL);
}

function Connexion($idAdmin)
{
	// vérifie si l'utilisateur est un connecté en tant qu'administrateur
	$SQL = "UPDATE `admin` SET `connecte` = '1'
	WHERE `admin`.`id_admin` = '$idAdmin';";
	return SQLGetChamp($SQL);
}

function Deconnexion($idAdmin)
{
	// vérifie si l'utilisateur est un connecté en tant qu'administrateur
	$SQL = "UPDATE `admin` SET `connecte` = '0'
	WHERE `admin`.`id_admin` = '$idAdmin';";
	return SQLGetChamp($SQL);
}

function AjouterActu($titre,$contenu,$image){
	$date=date('Y-m-d H:i:s');
	$SQL="INSERT INTO actualités(titre,image,contenu,date_publication) 
	VALUES('$titre','$image','$contenu','$date')";
	SQLUpdate($SQL);

}
function RecupActu(){
	$SQL="SELECT * FROM `actualités`";
	return parcoursRs(SQLSelect($SQL));
}
function SuprressionActu($id){
	$SQL="DELETE FROM actualités WHERE actualités.id_actu = '$id'";
	SQLUpdate($SQL);

}
function recupRole($maire=''){
	if($maire=="maire"){
		$SQL='SELECT * FROM `conseil municipal` C WHERE C.role LIKE "maire"';	
	}
	else {
		$SQL='SELECT * FROM `conseil municipal` C WHERE C.role NOT LIKE "maire"';
	}
	return parcoursRs(SQLSelect($SQL));
}

function recupElu($id){
	$SQL="SELECT * FROM `conseil municipal` C WHERE C.id_personne='$id'";
	return parcoursRs(SQLSelect($SQL));	
}

function modifElu($id,$nom,$prenom,$role,$photo,$description){
	$SQL="UPDATE `conseil municipal` 
	  	  SET `nom` = '$nom', `prenom` = '$prenom', `role` = '$role ', `photo` = '$photo', `description` = '$description ' 
	  	  WHERE `conseil municipal`.`id_personne` = $id;";
	SQLUpdate($SQL);

}
function SupprimerElu($id){
	$SQL="DELETE FROM `conseil municipal` WHERE `conseil municipal`.id_personne = '$id'";
	SQLUpdate($SQL);
}
function AjouterElu($nom,$prenom,$role,$photo,$description){
	$SQL="INSERT INTO `conseil municipal` (`id_personne`, `nom`, `prenom`, `role`, `photo`, `description`) VALUES (NULL, '$nom', '$prenom', '$role', '$photo', '$description');";
	SQLUpdate($SQL);
}
function listerCR()
{
    $requete = "SELECT *
                FROM lien
                WHERE id_page='4'";
    return parcoursRs(SQLSelect($requete));
}

function ajouterCR($lien){
    {
        $requête = "INSERT INTO lien (lien,id_page)
              VALUES ('$lien',4)";
        return SQLINSERT($requête);
    }
}
?>
