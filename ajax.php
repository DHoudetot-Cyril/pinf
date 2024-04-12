<?php
const HTTP_OK=200;
const HTTP_BAD_REQUEST=400;
const HTTP_METHOD_NOT_ALOWED=405;

if ( isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest' ){

    $response_encode= HTTP_BAD_REQUEST;
    $message="Bad request";
    if($_POST['action'] == "showdata" && isset($_POST["data"])){
        $response_encode= HTTP_OK;
        $data=$_POST["data"];
        //echo($data);

    $f = 'javascript/data.json';
    $fOuvert = fopen($f,"w");
    $fContenu=fread($fOuvert,filesize($f));
    echo($fContenu);// cela permettra de récupérer cette variable dans javascript
    // regarde si le fichier est accessible en écriture
    if (is_writable($f)) {
    // Ecriture
    if (fwrite($fOuvert, $data) === FALSE) {
      echo 'Impossible d\'écrire dans le fichier '.$f.'';
      exit;
    } 
   
    echo 'Ecriture terminé';
   
    fclose($fOuvert);
                   
    }
    else {
      echo 'Impossible d\'écrire dans le fichier '.$f.'';
    }



    $message="OK";
    }
    reponse($response_encode,$message);
}
else{
    $response_encode= HTTP_METHOD_NOT_ALOWED;
    $message="Method not allowed";
    reponse($response_encode,$message);

}

function reponse($response_encode,$message){
    
    header("Content-Type: application/json");
    http_response_code($response_encode);
    $response=[
        "response_code"=> $response_encode,
        "message"=> $message
    ];
    echo (json_encode($response));
}

?> 