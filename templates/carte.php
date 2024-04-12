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
               <li class="breadcrumb-item active" aria-current="page"><?php echo"$var";?></li>
          </ol>
     </nav>
     
     <!-- TITRE -->
     <h1>Carte intéractive</h1>
     <!-- CONTENU -->
     <div class="container content carte">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8995.69854988868!2d2.08923059469386!3d50.750867373807374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc5183e7673977%3A0x627ec73c7a0e14cd!2sBoisdinghem!5e0!3m2!1sfr!2sfr!4v1637528837263!5m2!1sfr!2sfr" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </div>

</div>
