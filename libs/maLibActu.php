<?php 
function mkActu($Actu){
    //ACTUALITÉS
    echo'
    <div class="container actualites hauteur" id="actu'.$Actu['id_actu'].'" onclick="AfficherHover(id)">
         <div class="row">
              <div class="col-3 picture-actu" id="p1"><img src="'.$Actu['image'].'"></div>

              <div class="col-9 txt">
                   <div class="row">
                        <h5>'.$Actu['id_actu'].'</h5>
                   </div>
                   <div class="row ActuTitre">
                        <h1>'.$Actu['titre'].'</h1>
                   </div>
                   <div class="row">
                        <h6>Publiée le '.$Actu['date_publication'].'</h6>
                   </div>
              </div>
         </div>
    </div>';

    //ACTUALITÉS : HOVER
    echo'
    <div class="container actualites-hover" id="actu'.$Actu['id_actu'].'hover" onclick="RevenirParDefaut(id)" onclick="VoirActu(id)">
         <div class="row">
              <div class="col-10 txt-hover">
                   <div class="row">
                        <h1>'.$Actu['titre'].'</h1>
                   </div>
                   <div class="row scroll">
                        <h6>'.$Actu['contenu'].'</h6>     
                   </div>
              </div>
              <div class="col-1 bracket-div">
                  
              </div>
         </div></a>     
    </div>

    ';

};
function mkActuHome($Actu){
    echo'
    <div class="card-actu">
        <img src="'.$Actu['image'].'" alt="" />
        <div class="card__content-actu">
            <h1>'.$Actu['titre'].'</h1>
           
            <span>Publié le</span>
            <span class="actu-date">'.$Actu['date_publication'].'</span>
        </div>
    </div>';
}

?>