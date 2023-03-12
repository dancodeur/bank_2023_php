<?php

session_start();

#Création de la session

function authSession($auth,$id,$redirection="index.php"){

    if(is_bool($auth) && $auth==true){

        if(is_int($id) && is_string($redirection)){
            $_SESSION['id']=$id;

            header("location: ".$redirection);
        }
        
    }
}

#Destruction de la session

function destroySession($home=true){
    if($home==true){
        $_SESSION=array();
        session_destroy();
        header("location:index.php");
    }else{
        session_destroy();
        #pas de redirection
    }
}

#Securisation de pages
function VerifAuth(){

    if(!isset($_SESSION['id'])){
        header("location:Connexion.php");
    }
}

?>