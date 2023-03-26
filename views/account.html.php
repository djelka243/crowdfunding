<?php
error_reporting(0);
    if (!$_SESSION['compte']) {
        echo'<script>window.location.href="leading";</script>';
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
        <section class="relative block" style="height: 500px;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style="background-image: url('<?= LIEN ?>/assets/images/imgBg1.jpeg');">
                <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
            </div>

        </section>
        <section class="relative py-16 bg-gray-300">
            <div class="container mx-auto px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                <div class="relative">
                                    <img alt="photo de profil" src="<?= LIEN ?>/assets/images/profil.jpeg" class="shadow-xl rounded-full absolute -m-16 -ml-20 lg:-ml-16" style="max-width: 550px; max-height: 200px;" />
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                <div class="py-6 px-3 mt-32 sm:mt-0">
                                    <a href="<?= LIEN ?>/publier" class="bg-[#c28607] active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1" type="button" style="transition: all 0.15s ease 0s;">Publier
                                    </a>
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                    <div class="mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-gray-700">0</span><span class="text-sm text-gray-500">Abonnés</span>
                                    </div>
                                    <div class="mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-gray-700">0</span><span class="text-sm text-gray-500">Projet financé</span>
                                    </div>
                                    <div class="lg:mr-4 p-3 text-center">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-gray-700">0</span><span class="text-sm text-gray-500">Projet publié</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-12 justify-between">
                            <div class="flex justify-center">
                                <p class="mr-3 text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2">
                                    <?php echo $_SESSION['prenom'];  ?>
                                </p>
                                <p class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2">
                                    <?php echo "";
                                    echo $_SESSION['nom']  ?>
                                </p>
                            </div>
                            <div class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase">
                                <i class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"></i>
                                Mont-ngafula, Kinshasa
                            </div>
                            <div class="mb-2 text-gray-700 mt-10 mr-0 ml-0">
                                <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i>Concepteur - Développeur
                            </div>
                            <div class="mb-2 text-gray-700">
                                <i class="fas fa-university mr-2 text-lg text-gray-500"></i>Université de Kinshasa
                            </div>
                        </div>
                        <div class="mt-10 py-10 border-t border-gray-300 text-center">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-9/12 px-4">
                                    <p class="mb-4 text-lg leading-relaxed text-gray-800">
                                        Je suis un ingénieur logiciel spécialisé dans la création et la conception d’expériences numériques exceptionnelles.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include(DOSSIER . '/composants/scripts.html.php'); ?>
    <?php include(DOSSIER . '/composants/footer.html.php'); ?>
</body>

</html>