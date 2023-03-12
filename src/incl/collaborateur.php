<section class="mb-4 space-y-3">
<h1 class="text-3xl font-semibold underline">Rejoins l'équipe</h1>
<p class="text-slate-800">Si ce projet te tente et que tu souhaites participer à son développement alors rejoins-nous sans plus tarder. Tu pourras ainsi enrichir ton cv et gagné en expérience </p>
</section>

<section class="w-[50%]">
    <?php
    
    if(isset($_POST["btn"])){
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $email=$_POST["email"];
        $tp=$_POST["tp"];
        $contribution=$_POST["contribution"];

        require_once("function/contributeur.php");

        $res=contributeur($nom,$prenom,$email,$tp,$contribution);

        if($res){
            ?>
            <section class="bg-green-400 text-center py-4 rounded">
                <p>Votre requete a été envoyée !</p>
            </section>
            <?php
        }else{
            ?>
              <section class="bg-red-400 text-center py-4 rounded">
                <p>Oups une erreur s'est produite !</p>
              </section>
            <?php
        }
    }

    ?>
    <form action="" method="post" >
        <div class="flex flex-col space-y-2 mb-3">
             <label for="nom" class="font-semibold">Nom</label>
             <input type="text" name="nom" id="nom" required class="border-2 border-slate-600 px-2 py-2">
        </div>

        <div class="flex flex-col space-y-2 mb-3">
             <label for="prenom" class="font-semibold">Prénom</label>
             <input type="prenom" name="prenom" id="prenom" required class="border-2 border-slate-600 px-2 py-2">
        </div>

        <div class="flex flex-col space-y-2 mb-3">
             <label for="email" class="font-semibold">Email</label>
             <input type="email" name="email" id="email" required class="border-2 border-slate-600 px-2 py-2">
        </div>

        <div class="flex flex-col space-y-2 mb-3">
             <label for="tp" class="font-semibold">Ton groupe de Tp</label>
             <div class="flex justify-around">
                <label for="tp-1">TP 1</label>
                <input type="radio" name="tp" id="tp-1" value="tp1" required>

                <label for="tp-2">TP2</label>
                <input type="radio" name="tp" id="tp-2" value="tp-2" required>

                <label for="tp-3">TP3</label>
                <input type="radio" name="tp" id="tp-3" value="tp-3" required>
     
                <label for="tp-4">TP4</label>
                <input type="radio" name="tp" id="tp-4" value="tp-4" required>

             </div>
        </div>

        <div class="flex flex-col space-y-2 mb-3">
            <label for="contribution" class="font-semibold">Dans quel domaine peux-tu apporter un coup de main au projet ?</label>
             <select name="contribution" id="contribution" class="border-2 border-slate-600 px-2 py-2" required>
                  <option value="front-end">Front-end (html,css,javascript,tailwind css)</option>
                  <option value="back-end">Back-end (php-mysql)</option>
                  <option value="ui">Ui design (Ui)</option>
                  <option value="ux">User Experience (UX)</option>
             </select>
        </div>

        <button type="submit" name="btn" class="bg-slate-600 text-slate-50 px-2 py-2 w-[10rem] mb-5">Envoyer</button>
    </form>
</section>