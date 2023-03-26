<!DOCTYPE html>
<html>

<head>
  <?php include(DOSSIER . '/composants/dependances.html.php'); ?>
  <title>Connexion</title>
</head>

<body>
  <main>
    <section class="absolute w-full h-full">

      <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
              <div class="rounded-t mb-0 px-6 py-6">
                <div class="text-center mb-3">
                  <h6 class="text-gray-600 text-sm font-bold">
                    Creer votre compte
                  </h6>
                </div>

                <hr class="mt-6 border-b-1 border-gray-400" />
              </div>
              <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <div class="">
                  <p id="msg" class="text-red-800"></p>
                </div>
                <!--Début du formulaire-->
                <form name="form" id="form" method="post" action="<?= LIEN ?>/views/traitement.php">
                  <div class="relative w-full mb-3 md:mb-6">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2">Prenom
                      <label style="color: red;">*</label></label><input type="text" name="prenom" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="ex: Ken" style="transition: all 0.15s ease 0s;" />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Nom <label style="color: red;">*</label></label><input type="text" name="nom" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="ex: Mukena" style="transition: all 0.15s ease 0s;" />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Postnom <label style="color: red;">*</label></label><input type="text" name="postnom" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="ex: Lelo" style="transition: all 0.15s ease 0s;" />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Email <label style="color: red;">*</label></label><input type="email" name="email" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="ex: jessydjonga23@gmail.com" style="transition: all 0.15s ease 0s;" />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2">Mot de
                      passe <label style="color: red;">*</label></label>
                    <input type="password" id="password" name="password" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Password" style="transition: all 0.15s ease 0s;" />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2">Confirmer le Mot de
                      passe <label style="color: red;">*</label></label>
                    <input type="password" name="passwordConf" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Mot de passe" style="transition: all 0.15s ease 0s;" />
                  </div>

                  <div>
                    <label class="inline-flex items-center cursor-pointer">
                      <input id="checkBox" type="checkbox" class="form-checkbox border-0 rounded text-gray-800 ml-1 w-5 h-5" style="transition: all 0.15s ease 0s;" /><span class="ml-2 text-sm font-semibold text-gray-700">J'accepte <a href="fichierConditionGenerale.txt" style="color: #6f6cff">les condition relative </a> et <a href="fichierPolitique.txt" style="color: #c28607">la politique</a> de
                        confidentialité</span></label>
                  </div>
                  <div class="text-center mt-6">
                    <button class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full" type="submit" name="btn_register" style="transition: all 0.15s ease 0s;">
                      Creer mon compte
                    </button>
                  </div>
                </form>
                <!--Fin du formulaire-->

              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include(DOSSIER . '/composants/footer.html.php'); ?>
    </section>
  </main>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#form').on('submit', function(e) {
        e.preventDefault(); // empêche le comportement par défaut du navigateur
        $.ajax({
          url: '<?= LIEN ?>/views/traitement.php', // l'URL de la page de traitement PHP
          type: 'POST', // la méthode d'envoi des données
          data: $('#form').serialize(), // les données du formulaire à envoyer
          success: function(response) {
            if (response === 'Votre compte est créé, veuillez vous connecter') {
              document.getElementById('msg').innerHTML = response;

              function maFonction() {
                setTimeout(function() {
                  window.location.href = "<?= LIEN ?>/leading"; // la réponse du serveur positive    // Code à exécuter après le délai de 4 secondes
                }, 3000);
              }
              maFonction();
            } else {
              document.getElementById('msg').innerHTML = response; // la réponse du serveur negative
              setTimeout(function() {
                document.getElementById('msg').innerHTML = '';
              }, 3000);
            }
          }
        });
      });
    });
  </script>



<?php include(DOSSIER . '/composants/scripts.html.php'); ?>
</body>

</html>