<?php

function contributeur($nom,$prenom,$email,$tp,$contribution){
    

    if(is_string($nom) AND is_string($prenom) AND is_string($email) AND is_string($tp) AND is_string($contribution)){
        
        $nom=htmlspecialchars($nom);
        $prenom=htmlspecialchars($prenom);
        $email=htmlspecialchars($email);
        $tp=htmlspecialchars($tp);
        $contribution=htmlspecialchars($contribution);

        include("function/pdo.php");

        $save=$db->prepare("INSERT INTO contributeur(nom,prenom,email,tp,contribution) VALUES(?,?,?,?,?)");
        $save->execute(array($nom,$prenom,$email,$tp,$contribution));

        if($save->rowCount()>0){
            
            require_once("function/email.php");
            sendEmail($email,true); #Fonction SendMail

            return true;
        }else{
            return false;
        }
    }
}