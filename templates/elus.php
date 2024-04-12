<?php  
     $var = valider("view");
?>
<div class="cheat"></div>
<br><br><br>
<div class="container-fluid Picture"></div>

<div class="container Text-actu-elus">   
</br></br></br></br></br>
<link href="css/elus.css" rel="stylesheet"/>
     <!-- BREADCRUMB -->
     <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">accueil</a></li>
               <li class="breadcrumb-item active" aria-current="page"><?php echo"$var";?></li>
          </ol>
     </nav>
     
     <?php
     include_once "libs/modele.php"; 
     include_once "libs/maLibForms.php";
     include_once "libs/maLibElus.php";

     $Maire=recupRole("maire");
     $Elus=recupRole();
     AfficherMaire($Maire[0]);
     echo '<h1 class="name">Vos élus</h1>';
     foreach($Elus as $LesElus){
          AfficherConseil($LesElus);
          }

     if(isConnecte($_SESSION['id'])){
               echo '<h1 class="titre">Modifier un élu</h1>';
               mkForm("controleur.php");
               mkSelect("IdElu",array_merge($Maire,$Elus),"id_personne","nom","","prenom");
               echo "<br>";
               mkInput("submit","action","modifier",array("class"=>"btn btn-warning mb-3"));
               
               endForm();
               echo '<h1 class="titre">Ajouter un élu<h1>';
               mkForm("controleur.php");
               mkInput("submit","action","ajouter un élu",array("class"=>"btn btn-warning mb-3"));
               endForm();
          }
     
     ?>
     


</div>