<?php
error_reporting(0);
if (!$_SESSION['compte']) {
  echo '<script>window.location.href="leading";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include(DOSSIER . '/composants/dependances.html.php'); ?>
  <title>Accueil</title>
</head>

<body>
  <?php

  include(DOSSIER . '/composants/header.html.php');

  ?>
  <main>


    <div class="mt-10 sm:mt-0 px-20 py-10 ">
      <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
          <div class="px-4 sm:px-0">
            <h3 class="text-base font-semibold leading-6 text-gray-900">Informations sur le projet</h3>
            <p class="mt-1 text-sm text-gray-600">Ces informations seront affichées publiquement alors faites attention à ce que vous partagez.</p>
          </div>
        </div>
        <div class="mt-0 md:col-span-2 px-0">
          <div>
            <p id="msg" class="bg-red-900"></p>
          </div>
          <!--Début du formulaire-->
          <form id="form" name="form" method="post" action="<?= LIEN ?>/views/traitement.php">

            <div class="grid gap-6 mb-6 md:grid-cols-2">
              <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                <input type="text" id="nomP" name="nomP" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 py-3 px-2" placeholder="nom du projet">
              </div>
              <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Localisation</label>
                <input type="text" id="local" name="local" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 py-3 px-2" placeholder="ville d'execution du projet">
              </div>
              <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Risque du projet</label>
                <input type="text" id="risque" name="risque" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 py-3 px-2" placeholder="ex: Faible, Moyen, Elevé">
              </div>
              <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rendement du projet</label>
                <input type="text" id="rdm" name="rdm" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 py-3 px-2">
              </div>
              <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea name="desc" id="desc" cols="39" rows="10" class="bg-gray-50 px-2 py-4" style="resize:none;" placeholder="la description totale du projet"></textarea>
              </div>
              <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>

                <div class="flex items-center justify-center w-full">
                  <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                      <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                      </svg>
                      <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Cliquez pour télécharger</span> ou glisser-déposer</p>
                      <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG or JPEG (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                  </label>
                </div>
              </div>
            </div>
            <input type="submit" value="Publier" name="btn_pub" class="text-white bg-blue-700 hover:bg-[#c28607] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-full px-4 py-3 text-center dark:bg-blue-600 dark:hover:bg-[#c28607] dark:focus:ring-blue-800">


          </form>
          <!--fin du formulaire-->
        </div>
      </div>
    </div>

  </main>


  <?php include(DOSSIER . '/composants/footer.html.php'); ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> <script>
   $(document).ready(function() {
      $('#form').on('submit', function(e) {
        e.preventDefault(); // empêche le comportement par défaut du navigateur
        $.ajax({
          url: '<?= LIEN ?>/views/traitement.php', // l'URL de la page de traitement PHP
          type: 'POST', // la méthode d'envoi des données
          data: $('#form').serialize(), // les données du formulaire à envoyer
          success: function(response) {
            if (response === 'Votre projet a été publier avec succes') {
            //  console.log(response); // afficher le message de succès dans la console
              document.getElementById('msg').innerHTML = response; //reponse négative du serveur
             // mettre à jour le message sur la page
            } else {
              document.getElementById('msg').innerHTML = response; //reponse négative du serveur
            
             // console.log(response); // afficher le message d'erreur dans la console
             // alert(response); // afficher le message d'erreur sur la page
            }
          }
        });
      });
    });
  </script>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://unpkg.com/create-file-list"></script>
<script>
function dataFileDnD() {

  /*
    return {
        files: [],
        fileDragging: null,
        fileDropping: null,
        humanFileSize(size) {
            const i = Math.floor(Math.log(size) / Math.log(1024));
            return (
                (size / Math.pow(1024, i)).toFixed(2) * 1 +
                " " +
                ["B", "kB", "MB", "GB", "TB"][i]
            );
        },
        remove(index) {
            let files = [...this.files];
            files.splice(index, 1);

            this.files = createFileList(files);
        },
        drop(e) {
            let removed, add;
            let files = [...this.files];

            removed = files.splice(this.fileDragging, 1);
            files.splice(this.fileDropping, 0, ...removed);

            this.files = createFileList(files);

            this.fileDropping = null;
            this.fileDragging = null;
        },
        dragenter(e) {
            let targetElem = e.target.closest("[draggable]");

            this.fileDropping = targetElem.getAttribute("data-index");
        },
        dragstart(e) {
            this.fileDragging = e.target
                .closest("[draggable]")
                .getAttribute("data-index");
            e.dataTransfer.effectAllowed = "move";
        },
        loadFile(file) {
            const preview = document.querySelectorAll(".preview");
            const blobUrl = URL.createObjectURL(file);

            preview.forEach(elem => {
                elem.onload = () => {
                    URL.revokeObjectURL(elem.src); // free memory
                };
            });

            return blobUrl;
        },
        addFiles(e) {
            const files = createFileList([...this.files], [...e.target.files]);
            this.files = files;
            this.form.formData.files = [...files];
        }
    };*/
}
</script>

<?php include(DOSSIER . '/composants/scripts.html.php'); ?>

</body>

</html>