 <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto h-modal md:h-full py-10 my-2 md:mt-auto md:py-auto md:my-auto ">
   <div class="relative w-1/2 h-auto max-w-md md:h-auto">
     <!-- Modal content -->
     <div class="relative bg-blue-600 rounded-lg shadow">

       <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
         <div class="rounded-t mb-0 px-6 py-6">
           <div class="flex-auto px-6 lg:px-10 pt-10">
             <div class="text-gray-500 text-center mb-3">
               <h5 class="">Se connecter</h5>
             </div>
             <form name="form" id="form" method="post" action="<?= LIEN ?>/views/traitement2.php">
               <div class="relative w-full mb-3">
                 <label class="block uppercase text-gray-700 text-xs font-bold mb-2 " for="grid-password">Email</label><input type="email" name="email" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Email" style="transition: all 0.15s ease 0s;" />
               </div>
               <div class="relative w-full mb-3">
                 <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Mot de
                   passe</label><input type="password" name="password" id="password" class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full" placeholder="Password" style="transition: all 0.15s ease 0s;" />
               </div>
               <div>
                 <label class="inline-flex items-center cursor-pointer"><input id="checkbox" type="checkbox" name="checkbox" class="form-checkbox border-0 rounded text-gray-800 ml-1 w-5 h-5" style="transition: all 0.15s ease 0s;" /><span class="ml-2 text-sm font-semibold text-gray-700">Afficher le mot de passe</span></label>
               </div>
               <div class="text-center mt-6">
                 <button name="btn_login" class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-2 w-full hover:bg-[#c28607]" type="submit" style="transition: all 0.15s ease 0s;">
                   Connexion
                 </button>
               </div>
               <a href="<?= LIEN ?>/creer-un-compte" style="color: #c28607;">creer un compte</a>

             </form>
             <div class="">
               <p id="msg" class="text-red-800"></p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!--fin modal-->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script>
     $(document).ready(function() {
       $('#form').on('submit', function(e) {
         e.preventDefault(); // empêche le comportement par défaut du navigateur
         $.ajax({
           url: '<?= LIEN ?>/views/traitement2.php', // l'URL de la page de traitement PHP
           type: 'POST', // la méthode d'envoi des données
           data: $('#form').serialize(), // les données du formulaire à envoyer
           success: function(response) {
             if (response === 'connexion reussi') {
               window.location.href = "<?= LIEN ?>/accueil"; //reponse positive du serveur
             } else {
               document.getElementById('msg').innerHTML = response; //reponse négative du serveur
               setTimeout(function() {
                 document.getElementById('msg').innerHTML = '';
               }, 3000);
             }
           },
         });
       });
     });



     const checkBox = document.getElementById('checkbox');
     const passW = document.getElementById('password');
     checkBox.addEventListener('click', fonctionVoirPWD);

     function fonctionVoirPWD() {
       if (this.checked) {
         passW.type = "text";
       } else {
         passW.type = "password"
       }
     }
   </script>