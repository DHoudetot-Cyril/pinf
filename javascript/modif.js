//Création d'une constante pour chaque bouton
const outils = document.querySelectorAll(".btn");

//Créer un evenement pour chaque bouon grace au data-element

var taille=5;

//var tailleP = document.querySelector('p').style.font-size;
//var tailleH = document.querySelector('h2').style.font-size;

//TODO if time : increase et decrease en fonction du font-size du texte / de la balise selectionné

outils.forEach(Element =>{
     //Créer un evenement 'Click'
     Element.addEventListener('click',()=>{
          //Récupération des éléments dans le data-element de chaque btn
          var commande = Element.dataset['element'];
          if(commande == 'createLink'){
                var url = prompt('Entrez le lien');
                document.execCommand(commande,false,url)
          }
          if(commande == 'insertImage'){
               var url = prompt('Entrez le lien');
               document.execCommand(commande,false,url)
         }
          if(commande == 'increaseFontSize'){
               if(taille < 7) taille = taille + 1;
               document.execCommand("fontSize", false, taille)
         }
         if(commande == 'decreaseFontSize'){
               if(taille > 4) taille = taille - 1;
               document.execCommand("fontSize", false, taille)
          }
          if(commande == 'heading'){
               document.execCommand('formatBlock', false, '<h2>');
          }
          if(commande == 'anti'){
               document.execCommand('formatBlock', false, '<p>');
          }
          else{
               //Execution des commandes
               document.execCommand(commande,false,null)
          }
     })
})