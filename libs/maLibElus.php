<?php
function AfficherMaire($maire){
    
    echo '
    <div class="container maire elus">
    <div class="row">
         <img src="'.$maire["photo"].'" class="col-4 txt" id="e1">

         <div class="col-5 txt">
              <div class="row">
                   <h5>'.$maire["nom"].' '.$maire["prenom"].'</h5>
                   <p><strong>Maire de Boisdinghem</strong></p>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ullam culpa officiis autem amet qui molestiae dolorum error magni. Odio incidunt modi non, excepturi quisquam possimus esse voluptatem? In, dolorum.</p>
              </div>
         </div>

    </div>
</div>
    
    ';

}

function AfficherConseil($conseil){
    if(($conseil['photo']!="")){
        $img=$conseil['photo'];
    }
    else{
        $img="https://img2.freepng.fr/20180207/bfq/kisspng-silhouette-icon-blank-person-template-5a7b67b1175f47.6504332315180369130957.jpg";
    }
    echo '  

    <div class="container actualites elus">
         <div class="row">
              <img  src="'.$img.'" class="col-3 txt" id="e1">

              <div class="col-5 txt">
                   <div class="row">
                        <h5>'.$conseil["nom"].' '.$conseil["prenom"].'</h5>
                        <p><strong>'.$conseil["role"].'</strong></p>
                        <p>'.$conseil["description"].'</strong></p>
                   </div>
              </div>

         </div>
    </div>
    ';
}
?>