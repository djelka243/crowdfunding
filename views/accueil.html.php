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
        <section>
            <div class="flex bg-[#007aff] py-5 px-10 items-center">
                <div class="px-10">
                    <h2 class="font-bold text-5xl mb-6 px-10">Investir,c’est s’investir.</h2>
                    <p class="px-10 mb-6">Chez Cope, nous faisons tout notre possible pour contribuer à un monde plus durable. Comment ? En réunissant des entrepreneurs et des investisseurs engagés qui souhaitent participer au développement d'aventures entrepreneuriales à impact !</p>
                    <?php if (isset($_SESSION['compte'])) { ?>
                        <a href="<?= LIEN ?>/mon-compte" type="button" class="px-10 ml-10 mb bg-[#c28607] py-3 rounded-full">J'investis</a>
                        <a href="<?= LIEN ?>/publier" type="button" class="ml-3 hover:text-[#c28607]">Publier mon projet</a>
                    <?php
                    } else { ?>
                        <input data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" value="J'investis" class="px-10 ml-10 mb bg-[#c28607] py-3 rounded-full">
                        <input data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" value="Publier mon projet" class="ml-3 hover:text-[#c28607]">
                    <?php
                    } ?>
                </div>
                <div class="w-full ml-10">
                    <img src="assets/images/img3.png" alt="image de l'entreprise">
                </div>
            </div>
        </section>
    </main>
    <?php include(DOSSIER . '/composants/modal.html.php'); ?>
    <?php include(DOSSIER . '/composants/scripts.html.php'); ?>
</body>

</html>