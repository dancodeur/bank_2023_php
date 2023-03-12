<?php 

/**
 * 
 * 
 * 
 */

function Auth($login,$pwd,$client=true){

        #Auth reservé à l'admin du site internet...
        if($client==false){

            if(is_string($login) && is_string($pwd)){
                
                $login=$login;
                $pwd=$pwd;
                
                include("function/pdo.php");

                $auth=$db->prepare("SELECT * FROM admin WHERE admin_login=? AND admin_pwd=?");
                $auth->execute(array($login,$pwd));

                

                if($auth->rowCount()>0){
                    
                    $id=$auth->fetch()['admin_id'];

                    $res=[
                        'id'=>$id,
                        'success'=>true
                    ];
                    
                    return $res; #Auth admin successfull : return  array

                }else{
                    return false; #Auth fails
                }
            }
            #Auth reservé au client...
        }else{

            if(is_string($login) && is_int($pwd)){

                $client_code=$login;
                $client_code_secret=$pwd;

                include("function/pdo.php");

                $auth=$db->prepare("SELECT client_code, client_code_secret FROM client WHERE client_code=? AND client_code_secret=?");
                $auth->execute(arrary($client_code,$client_code_secret));

                if($auth->rowCount()>0){
                    return true; #Auth client successfull
                }else{
                    return false;
                }
            }


        }

}