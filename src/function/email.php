<?php 

function sendEmail($emailContributeur,$admin=false){
   
    if(is_string($emailContributeur)){

       $to=$emailContributeur;
       $subject="Projet scolaire (Bank) Collaboration ";
       $message="Salut, tu t'es inscris en tant que collaborateur pour le project Bank";

       mail($to,$subject,$message);

       if($admin==true){

        $to="elengadan@gmail.com";
        $subject="collaborateur inscrit (Bank)";
        $message="Tu as un nouveau collaborateur ! voici son email: ".$emailContributeur;

        mail($to,$subject,$message);
       }

    }
    
}