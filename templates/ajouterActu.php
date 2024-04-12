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

     <h1>Ajout d'une actualité</h1>
    
    <?php 
    include_once "libs/modele.php"; 
    include_once "libs/maLibForms.php"; 
    
    mkForm("controleur.php");
    mkInput("text","titre","",array("id"=>"idTitre","label"=>"Entrez le titre:"));
    echo("</br>");
    echo("<label for='IdContenuActu'>Entrez le contenu de l'actualité: </label>");
    echo("</br>");
    echo("<textarea id='IdContenuActu' name='contenuActu' rows='10' cols='100'></textarea>");
    echo("</br>");
    mkInput("text","imageActu","",array("id"=>"idLienImage","label"=>"Entrez le lien d'une image:"));
    echo("</br>");
    mkInput("submit","action","ajouter",array("class"=>"btn btn-warning mb-3"));
    endForm();
    
    ?> 


</div>   