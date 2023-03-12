<?php
include("function/pdo.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body>
     <?php include("incl/header.php"); ?>

     <main class="px-8 h-[200px]">
         <section class="mb-3">
            <div class="space-y-5">
                <h1 class="text-3xl font-semibold">Bonjour et bienvenue ! </h1>
                <h2 class="text-slate-800 text-xl">Cette application est en cours de développement...Merci !</h2>
            </div>
         </section>

         <section>
             <div>
                <p>Rejoins l'équipe de développement <a class="text-red-500 underline" href="join-us.php">ici</a></p>
                 
             </div>
         </section>
     </main>

     <?php include("incl/footer.php"); ?>


    
</body>
</html>