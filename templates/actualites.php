<?php  
     $var = valider("view");

?>
<div class="cheat"></div>

<div class="container Text-actu">   
     
     <!-- BREADCRUMB -->
     <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">accueil</a></li>
               <li class="breadcrumb-item active" aria-current="page"><?php echo"$var";?></li>
          </ol>
     </nav>
     
     <!-- TITRE -->
     <h1 class="name">Actualités</h1>

     <!-- FILTRES -->
     <div class="container filtres">
          <div class="row justify-content-center">
               <div class="col col-xs-6 col-sm-4 col-md-4 select">
               <select class="form-select object" aria-label="Default select example">
                    <option selected value="null">Filtrer par thème</option>
                    <option value="1">Informations Importantes</option>
                    <option value="2">Consignes Sanitaires</option>
                    <option value="3">Faits Divers</option>
               </select>
               </div>
               <div class="col col-xs-12 col-md-6 text">
                    <div class="input-group mb-3">
                         <input type="text" class="form-control object" placeholder="Rechercher" aria-label="Rechercher" aria-describedby="basic-addon2">
                         <span class="input-group-text object" id="basic-addon2"><i class="fas fa-search"></i></span>
                    </div>
               </div>
               <div class="col-2 button">
                    <button type="submit object" class="btn btn-warning mb-3">Filtrer</button>

               </div>
          </div>
     </div>
     
     
     <?php 
     include_once "libs/modele.php"; 
     include_once "libs/maLibForms.php";
     include_once "libs/maLibActu.php";
     if(isConnecte($_SESSION['id'])){
          echo'<a href="index.php?view=ajouterActu"><button type="submit object">Ajouter une actualité</button></a>';
     }
     $Actus=RecupActu();
     foreach($Actus as $LesActus){
     mkActu($LesActus);
     }
     if(isConnecte($_SESSION['id'])){
          mkForm("controleur.php");
          mkSelect("IdActu",$Actus,"id_actu","titre","","id_actu");
          mkInput("submit","action","supprimer");
          endForm();
     }
	?>
     
    
</div>
