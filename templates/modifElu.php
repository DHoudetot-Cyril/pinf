<?php  
     $var = valider("view");
?>
<div class="container-fluid Picture"></div>

<div class="container Text">
    
    <nav aria-label="breadcrumb">
      	<ol class="breadcrumb">
           	<li class="breadcrumb-item"><a href="index.php">accueil</a></li>
           	<li class="breadcrumb-item active" aria-current="page"><?php echo($var);?></li>
      	</ol>
 	</nav> 

  
    
    <?php 
    include_once "libs/modele.php"; 
    include_once "libs/maLibForms.php"; 
    if(valider("idElu","GET")){
        echo "<h1>Modification d'un élu</h1>";
        $elu=recupElu($_GET["idElu"]);
        mkForm("controleur.php");
        mkInput("hidden","idElu",$_GET["idElu"]);
        mkInput("text","nom",$elu[0]["nom"],array("id"=>"idNom","label"=>"nom:"));
        echo("</br>");
        mkInput("text","prenom",$elu[0]["prenom"],array("id"=>"idPrenom","label"=>"prenom:"));
        echo("</br>");
        mkInput("text","role",$elu[0]["role"],array("id"=>"idRole","label"=>"rôle:"));
        echo("</br>");
        echo("<label for='IdDescription'>Entrer une description de l'élu: </label>");
        echo("</br>");
        echo("<textarea id='IdDescription' name='descriptionElu' rows='10' cols='100'>".$elu[0]["description"]."</textarea>");
        echo("</br>");
        mkInput("text","photo",$elu[0]["photo"],array("id"=>"idLienPhoto","label"=>"Entrez le lien d'une photo:"));
        echo("</br>");
        mkInput("submit","action","actualiser",array("class"=>"btn btn-warning mb-3"));
        endForm();
        
        echo "<h1>Supression de l'élu</h1>";
        
        mkForm("controleur.php");
        mkInput("hidden","idElu",$_GET["idElu"]);
        mkInput("submit","action","suppression",array("class"=>"btn btn-warning mb-3"));
        endForm();
    }
    else{
        echo "<h1>Ajout d'un élu</h1>";
        
        mkForm("controleur.php");
        mkInput("text","nom","",array("id"=>"idNom","label"=>"nom:"));
        echo("</br>");
        mkInput("text","prenom","",array("id"=>"idPrenom","label"=>"prenom:"));
        echo("</br>");
        mkInput("text","role","",array("id"=>"idRole","label"=>"rôle:"));
        echo("</br>");
        echo("<label for='IdDescription'>Entrer une description de l'élu: </label>");
        echo("</br>");
        echo("<textarea id='IdDescription' name='descriptionElu' rows='10' cols='100'></textarea>");
        echo("</br>");
        mkInput("text","photo","",array("id"=>"idLienPhoto","label"=>"Entrez le lien d'une photo:"));
        echo("</br>");
        
        mkInput("submit","action","valider",array("class"=>"btn btn-warning mb-3"));
        endForm();
    }
    
    ?> 


</div>   