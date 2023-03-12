<?php
include("function/pdo.php");
include("function/session.php");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body class="bg-slate-800">
     
    <?php  #require_once("incl/header.php"); ?>

     <main class="px-8 flex justify-center items-center h-screen">
         
         <section class="w-[30%] rounded  bg-white  p-3 h-[370px] ">

             <?php
         
                 if(isset($_POST["btn"])){
                    $login=$_POST["login"];
                    $pwd=$_POST["pwd"];

                    require_once("function/Auth.php");

                  

                    #$ok=$auth['success'];
                    $auth= Auth($login,$pwd,false);

                    $x=$auth;
                    $success=$x["success"];

                    if($success){
                        
                        $id=$auth['id'];

                        authSession($success,$id);
                    }else{
                        ?>
                        <section class="bg-red-700 text-white text-center">
                            <p>Votre Login ou mot de passe est incorrect</p>
                        </section>
                        <?php
                    }
                 }
         
             ?>
             <h1 class="text-3xl font-semibold mb-3 text-center text-yellow-300">Bank</h1>
             <h2 class="text-md text-center mb-3 text-slate-600">Votre espace d'authentification admin</h2>
              <form action="" method="post">
                  <div class="flex flex-col space-y-3 mb-3">
                       <label for="login" class="font-semibold">Login</label>
                       <input type="text" name="login" required class="border-2 border-slate-800 px-2 py-2 transition ease-in-out duration-150 delay-200 focus:outline-yellow-300">
                  </div>

                  <div class="flex flex-col space-y-3">
                       <label for="pwd" class="font-semibold">Mot de passe</label>
                       <input type="text" name="pwd" required class="border-2 border-slate-800 px-2 py-2 transition ease-in-out duration-150 delay-200 focus:outline-yellow-300">
                  </div>
                  <br>

                  <div class="flex flex-col space-y-3">
                      <button type="submit" name="btn" class="bg-slate-800 text-slate-50 px-4 py-2 ">sign in </button>
                  </div>
                  
              </form>
         </section>

         
     </main>
     

     <?php  #require_once("incl/footer.php"); ?>



    
</body>
</html>