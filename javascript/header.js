function disableBorder(){
     var idBorder = "c"
     var border = 0;
     for(let i = 1 ; i<8 ; i++){
          idBorder += i;
          border = document.getElementById(idBorder)
          border.style.borderBottom = "0px solid black"
          idBorder = "c"
     }
}

function hideAllSousMenu(){
     var sousMenuAssocié;
     var c="c";
     for(let i=1 ; i<8 ; i++){
          c += i +"sm";
          sousMenuAssocié = document.getElementById(c)
          sousMenuAssocié.style.display = "none"
          c="c"
     }
}

function enableHeader(c){
     
     // On change le style du header
     var header = document.querySelector(".header")
     header.style.background="white";
     header.style.boxShadow = "0px 1px 5px 0px rgba(0,0,0,0.1)"

     // Lors d'un changement de catégorie on enlève toutes les bordures
     disableBorder();
     // Puis on ajoute le border bottom sur l'élément actif
     var categorie = document.getElementById(c)
     categorie.style.borderBottom = "15px solid var(--v)"

     // On affiche la grosse div Sous-menu
     var sousMenu = document.querySelector(".sous-menu")
     sousMenu.style.display="flex"
     sousMenu.style.borderBottom = "1px solid rgba(0,0,0,0.2)"

     // On efface toutes les div de sous-menu
     hideAllSousMenu();
     // On affiche le sous-menu associé
     c += "sm"
     var leSousMenuAssocié = document.getElementById(c)
     leSousMenuAssocié.style.display = "block";
    
     
}

function disableHeader(){
     // On cache le sous menu lorsqu'on le quitte par le bas ou par le logo ou par l'icone cimetière
     var header = document.querySelector(".header")
     var scrolled = window.scrollY;
     if(scrolled<640 ){
          header.style.background = "none"
          header.style.boxShadow = "none"
     }
     //On enlève les border bottom des catégories
     disableBorder();

     var sousMenu = document.querySelector(".sous-menu")
     sousMenu.style.display="none"
}

function enableVSM(idSM, idfleche){
     
     var SM = document.getElementById(idSM)
     var flecheSM = document.getElementById(idfleche);
     

     if(SM.style.display == ''){
          SM.style.display = "block";
          flecheSM.style.transform = "rotate(90deg)";
     }
     else if(SM.style.display == 'none'){
          SM.style.display = "block";
          flecheSM.style.transform = "rotate(90deg)";
     }
     else{
          SM.style.display = "none";
          flecheSM.style.transform = "rotate(0deg)";
     }

}

// STYLE DE HEADER
if(location.search==''){
window.addEventListener('scroll', function() {
     var scrolled = window.scrollY;
     var logo = document.querySelector('.logo-header');
     var txt = document.querySelector('.welcome-text');
     var name = document.querySelector('.nom-du-maire');

     var header = document.querySelector('.header');
     
   
     logo.style.transform = "translate(0px," + scrolled/1.1 +"%)";
     txt.style.transform = "translate(0px," + scrolled/0.66  +"%)";
     name.style.transform = "translate(0px," + scrolled/0.232 +"%)";

     var sousMenu = document.querySelector(".sous-menu")

     if(scrolled>640 ){
          header.style.background = "white"
          header.style.boxShadow = "0px 1px 10px 0px rgba(0,0,0,0.1)"
     }
     if(scrolled<640 && ($(".nav_links").hasClass("active")==false)){
          header.style.background = "none"
          header.style.boxShadow = "none"
     }
     if(scrolled<640 && sousMenu.style.display == "flex"){
          header.style.background = "white"
          header.style.boxShadow = "0px 1px 10px 0px rgba(0,0,0,0.1)"
     }

});


}
$(document).ready(function(){   
     $(".hamburger").click(function(){
          $(".nav_links").toggleClass("active").show();
          var header = document.querySelector(".header");
          if($(".nav_links").hasClass("active")){
          header.style.background = "white";
          header.style.boxShadow = "0px 1px 10px 0px rgba(0,0,0,0.1)";
          }
          else if (window.scrollY <640 ){
               header.style.background = "none"
               header.style.boxShadow = "none"
          }
     
     });
});

