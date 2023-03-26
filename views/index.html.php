<!doctype html>
<html>
<head>

<?php include(DOSSIER.'/composants/dependances.html.php'); ?>
</head>

<body>
<?php include(DOSSIER.'/composants/header.html.php'); ?>

 
  <main>

    <div class="relative px-6 lg:px-8">
      <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-50">
        <div class="text-center">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Investissements en Crowdfunding</h1>
          <p class="mt-6 text-lg leading-8 text-gray-600">Investir dans le crowdfunding est une grande opportunité pour
            les entrepreneurs et les investisseurs. Les entrepreneurs peuvent lever des capitaux rapidement et à moindre
            coût. Les investisseurs peuvent obtenir de bons retours sur investissement.</p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="<?= LIEN ?>/accueil"
              class="rounded-md bg-[#c28607] px-4 py-3 text-sm font-semibold text-white shadow-sm hover:bg-[#c28607] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Commencer
            </a>
            <a href="<?= LIEN ?>/qui-sommes-nous" class="text-sm font-semibold leading-6 text-gray-900 md:hover:text-[#c28607] ml-2">En savoir
              plus <span aria-hidden="true">→</span></a>
          </div>
        </div>
      </div>

    </div>

  </main>

  <?php include(DOSSIER.'/composants/modal.html.php'); ?>


  <?php include(DOSSIER.'/composants/scripts.html.php'); ?>
</body>

</html>