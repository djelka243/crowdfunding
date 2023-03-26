<?php

use Models\Post;

$mo = new Post();
$mo->recupAll();

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



        <div class="flex md:flex lg:flex flex-wrap">
            <?php
            for ($i = 0; $i < count($_SESSION['projet']); $i++) {
                $projet_id = urlencode($_SESSION['projet'][$i]['id_projet']); // récupère l'identifiant unique du projet et l'encode en URL

                //var_dump($projet_id);

            ?>
                <div class="p-10 flex" data-aos="fade-top" data-aos-delay="1000">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="assets/images/Projet.jpg" alt="projet-banner">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2"><?php echo $_SESSION['projet'][$i]['nom_projet']; ?></div>
                            <h6 class="font-bold mb-3"><?php echo $_SESSION['projet'][$i]['risque']; ?></h6>
                            <p class="text-gray-700 text-base">
                                <?php echo $_SESSION['projet'][$i]['description']; ?>
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                            <p> Date de publication: <?php echo $_SESSION['projet'][$i]['date'] ?></p>
                        </div>
                        <div class="mt-3 bg-gray-400 py-4 px-5 hover:bg-gray-900 hover:text-white">
                            <a href="<?= LIEN ?>/detail?id=<?= $projet_id; ?>">En savoir +</a><!-- Ajoute l'identifiant unique du projet dans l'URL -->
                        </div>
                    </div>
                </div>
            <?php

            };
            ?>
        </div>
    </main>


    <?php include(DOSSIER . '/composants/modal.html.php'); ?>
    <?php include(DOSSIER . '/composants/scripts.html.php'); ?>
</body>

</html>