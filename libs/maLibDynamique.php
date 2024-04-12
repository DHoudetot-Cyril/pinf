<?php
function MkEditAdminOnVitrine(){
     if(isConnecte($_SESSION['id'])){
          echo'     
          <div class="container content outils">
               <button type="button" class="btn btn-info" data-element="decreaseFontSize">
                    <i class="fas fa-minus"></i></button>
               <button type="button" class="btn btn-info" data-element="increaseFontSize">
                    <i class="fas fa-plus"></i></button>  
               <button type="button" class="btn btn-info" data-element="bold">
                    <i class="fas fa-bold"></i></button>
               <button type="button" class="btn btn-info" data-element="italic">
                    <i class="fas fa-italic"></i></button>
               <button type="button" class="btn btn-info" data-element="underline">
                    <i class="fas fa-underline"></i></button>  
               <button type="button" class="btn btn-info" data-element="justifyLeft">
                    <i class="fas fa-align-left"></i></button>
               <button type="button" class="btn btn-info" data-element="justifyCenter">
                    <i class="fas fa-align-center"></i></button>
               <button type="button" class="btn btn-info" data-element="justifyRight">
                    <i class="fas fa-align-right"></i></button>
               <button type="button" class="btn btn-info" data-element="justifyFull">
                    <i class="fas fa-align-justify"></i></button>
               <button type="button" class="btn btn-info" data-element="undo">
                    <i class="fas fa-undo"></i></button>
               <button type="button" class="btn btn-info" data-element="redo">
                    <i class="fas fa-redo"></i></button>     
               <button type="button" class="btn btn-info" data-element="createLink">
                    <i class="fas fa-link"></i></button>   
               <button type="button" class="btn btn-info" data-element="insertImage">
                    <i class="fas fa-images"></i></button>  
               <button type="button" class="btn btn-info" data-element="heading">
                    <i class="fas fa-heading"></i></button>
               <button type="button" class="btn btn-info" data-element="anti">
                    <i class="fas fa-paragraph"></i></button>


               <button type="button" class="btn btn-info" data-element="insertHorizontalRule">
                    <i class="fas fa-grip-lines"></i></button>
               <button type="button" class="btn btn-info" data-element="insertUnorderedlist">
                    <i class="fas fa-list-ul"></i></button>
               <button type="button" class="btn btn-info" data-element="insertOrderedlist">
                    <i class="fas fa-list-ol"></i></button>  

               <button type="button" class="btn btn-info save" onclick="enregistrerModif()">
                    <strong>Enregistrer les modifications</strong>
               </button>
          </div></br>
          ';
     }
     else{
          echo'
          <div class="container content" id="div">
          ';
     }
}
?>


<!--                 -->
