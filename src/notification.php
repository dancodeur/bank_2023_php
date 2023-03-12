<?php
include("function/pdo.php");
include("function/session.php");

VerifAuth();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body>
     <?php include("incl/header.php"); ?>

     <main class="px-8 h-[200px]">
         <section class="mb-3">
            <div class="space-y-5">
                <h1 class="text-3xl font-semibold underline">Notifications </h1>
            </div>
         </section>

        
     </main>

     <?php include("incl/footer.php"); ?>


    
</body>
</html>