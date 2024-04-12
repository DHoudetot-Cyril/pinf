
function AfficherHover(id){
     
     var numero=extraitNombre(id);
     refActuOver=document.getElementById("actu"+numero+"hover")
     refActuOver.style.display="block";
     refActu=document.getElementById("actu"+numero)
     refActu.style.display="none";
     
}

function RevenirParDefaut(id){   
     var numero=extraitNombre(id);
     refActuOver=document.getElementById("actu"+numero+"hover")
     refActuOver.style.display="none";
     refActu=document.getElementById("actu"+numero)
     refActu.style.display="block";

}

function extraitNombre(str){ 
     return Number(str.replace(/[^\d]/g, "")) 
}
 