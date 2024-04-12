<?php  
    $var = valider("view");
?>

<div class="cheat"></div>

<div class="container-fluid Picture"></div>

<div class="container Text">   
     
     <!-- BREADCRUMB -->
     <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">accueil</a></li>
               <li class="breadcrumb-item active" aria-current="page">compte rendus des conseils</li>
          </ol>
     </nav>
     
     <!-- TITRE -->
     <h1>Compte rendus des conseils</h1>
     <!-- CONTENU -->

     <?php
if(isConnecte($_SESSION['id'])){
     echo "<form action='controleur.php' method='POST' enctype='multipart/form-data'>  
     <input type='file' id='file' class='fileinput' accept='.pdf' name='file'>
     <input type='submit' name='action' value='Importer' class='button-test'>
     </form>";
}
?>
        <br>
        <table class="tablien">
<?php  
    $tabCR=listerCR();
    foreach ($tabCR as $lien){
         echo "<tr><td><a class='liencr' href='compteRendus/" . $lien['lien'] ."'>" . $lien['lien'] . "</td><td><img class='icon' src='ressources/cr/pdf.png'></a></td></tr>";
    }
?>
     </table>
</div>

