<?php  
     $var = valider("view");
?>

<header>
    <img class="logo-header" src="ressources/home/Welcome5.svg">
    <div class="welcome-text">Je souhaite la bienvenue à tous les habitants de boisdinghem et ses environs.</div>
    <div class="nom-du-maire"><span>LHEUREUX michel </span></div>
</header>

<div class="ligne"></div>

<?php
	$connecte=isConnecte($_SESSION["id"]);
	if($connecte){
		echo '
          
               <div class="ChangementsMaire">
               <div class="mot row">
                    <h3>Mot du maire : </h3>
                    <input type="text" value="" class="nomInput1 col-8">
                    <button type="submit object" class="btn btn-success col-1 nomBtn" onclick="changeBio()">Valider</button>
               </div>
               </br>
                    <div class="nom row">
                         <h3>Nom du maire actuel : </h3>
                         <input type="text" value="" class="nomInput2 col-3">
                         <button type="submit object" class="btn btn-success col-1 nomBtn" onclick="changeNom()">Valider</button>
                    </div>
               </div>        
          
          ';
     }
?>




<script>
     var contentMotMaire = $(".welcome-text").html()
     $(".nomInput1").val(contentMotMaire)

     var contentNomMaire = $(".nom-du-maire > span").html()
     $(".nomInput2").val(contentNomMaire)

     function changeBio(){
          var newBio = $(".nomInput1").val()
          $(".welcome-text").html(newBio)
     }

     function changeNom(){
          var newName = $(".nomInput2").val()
          $(".nom-du-maire > span").html(newName)
     }


</script>

<img class="actualités" src="ressources\home\Actualites.svg" alt="">

<div>
     <div class="actu-rect"></div>
     <div class="container-actu">
          <div class="cards-actu">
          <?php
          include_once "libs/modele.php"; 
          include_once "libs/maLibForms.php";
          include_once "libs/maLibActu.php";
          $Actus=RecupActu();
          foreach($Actus as $LesActus){
               mkActuHome($LesActus);
               }
               
	     ?>    
          
          </div>         
     </div>
</div>


<div class="toutes-actu"><a href="index.php?view=actualites">Toutes les actualités</a></div>

<!-- ECRITURE RESEAUX -->
<div class="reseaux">
     <img id="res1" src="ressources\home\Reseaux1.svg" alt="back network">
     <img id="res2" src="ressources\home\Reseaux2.svg" alt="front network">
</div>

<!-- GROSSE DIV -->
<div class="div-reseaux">
     <img src="ressources\home\PaperPlane.svg" alt="background paper plane" class="paper">
     <!-- IFRAME -->
     <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fboisdinghem&tabs=timeline&width=500px&height=600px&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="100%" height="700px" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
     <!-- TEXTE -->
     <div class="txt-reseaux">
          <h1>Rejoingez-nous sur facebook</h1>
          <p>Vous serez au courant de toutes les actualités du village.</p>
          <button type="button" class="btn btn-success">
               Y allez !
          </button>
     </div>
     <!-- IMG PAPER PLANE -->
     
</div>

<img id="round" src="ressources\home\RoundSheet.svg" alt="élément de décor rond">

<!-- MÉTÉO -->
<div class="meteo">
     <img src="ressources\home\Meteo.svg" alt="">
</div>

<div class="meteo-jour">

     <div class="left">
          <img src="ressources\home\meteo\Ensoleille.svg" alt="" id="temps">
          <!-- Température actuelle -->
          <span id="temperature"></span>
          <span class="unite">°C</span>
     </div>

     <div class="right">
          <!-- Jour du créneau -->
          <span id="jour"></span>
          <!-- Heure du créneau actif (on peut cliquer sur un crénraux pour le rendre actif) -->
          <span id="heure"></span>
          <!-- Temps du créneau -->
          <p id="temps-txt"></p>
     </div>

     <!-- Graphique -->
     <div class="graph-meteo">
          <!-- Time Line -->
          <div class="graph"><br>
               <canvas id="graph1"></canvas> 
          </div>
     </div>
</div>


<div class="agenda">
     <div class="container-agenda">
          <img src="ressources\home\Agenda.svg" alt="">
          <iframe id="iframe-agenda" src="https://calendar.google.com/calendar/embed?height=800&wkst=2&bgcolor=%23ffffff&ctz=Europe%2FParis&showTz=0&showTitle=0&showNav=1&showDate=0&showPrint=0&showTabs=0&showCalendars=0&mode=WEEK&src=ZDZtcnZhMDlzYnE5N2l0M2tzamtzaTQxY3ZqZGhuMTVAaW1wb3J0LmNhbGVuZGFyLmdvb2dsZS5jb20&src=ZnIuZnJlbmNoI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23616161&color=%230B8043" style="border-width:0" width="100%" height="750" frameborder="0" scrolling="no"></iframe>
     </div>
</div>

<div class="partenaires">
     <img src="ressources\home\Partenaires.svg" alt="">
     <div class="container-part">
          <div class="p2">
               <h5>Pays de Lumbres</h5>
               <a href="http://www.cc-paysdelumbres.fr/"> <img src="https://upload.wikimedia.org/wikipedia/fr/5/50/CC_Pays_de_Lumbres_logo.png"/></a>
          </div>

          <div class="p3">
               <h5>Nom partenaire 3</h5>
          <a><img src="https://upload.wikimedia.org/wikipedia/fr/5/50/CC_Pays_de_Lumbres_logo.png"/></a> 
          </div>

          <div class="p4">
               <h5>Nom partenaire 4</h5>
               <a><img src="https://upload.wikimedia.org/wikipedia/fr/5/50/CC_Pays_de_Lumbres_logo.png"/></a> 
          </div>

          <div class="p5">
               <h5>Nom partenaire 5</h5>
               <a><img src="https://upload.wikimedia.org/wikipedia/fr/5/50/CC_Pays_de_Lumbres_logo.png"/></a> 
          </div>

     </div>
</div>

