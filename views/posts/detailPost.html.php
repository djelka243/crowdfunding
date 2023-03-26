<?php

/*if (isset($_GET['id'])) {
    $projet_id = urldecode($_GET['id']); */ // récupère l'identifiant unique du projet et le décode
    // Utilisez l'identifiant pour récupérer les données du projet correspondant dans votre base de données ou votre tableau $_SESSION
    // Affichez les informations du projet dans la page détail
// Vérifie si le paramètre 'id' est défini dans l'URL

var_dump($_GET['id']);
//var_dump($_SESSION['det']);

/*var_dump($_GET);
if (isset($_GET['id'])) {
    // Récupère l'id du projet depuis l'URL et le stocke dans une variable
    $projet_id = $_GET['id'];


    $projet = null;
    foreach ($_SESSION['projet'] as $p) { // Supposons que les projets soient stockés dans le tableau $_SESSION['projet']
        if ($p['id_projet'] == $projet_id) { // Vérifiez si l'identifiant correspond
            $projet = $p; // Stockez les informations du projet dans une variable $projet
           // var_dump($projet);
            break;
        }
    }
    if ($projet) {
        // Affichez les informations du projet
        echo '<div class="projet-detail">';
        echo '<h1>' . $projet['nom_projet'] . '</h1>';
        echo '<p>' . $projet['description'] . '</p>';
        // etc.
        echo '</div>';
    } else {
        // Si l'identifiant n'est pas trouvé, affichez un message d'erreur
        echo '<p>Le projet que vous recherchez n\'existe pas.</p>';
    }
    
}*/
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

    <?php

// $_SESSION['detail'];
//var_dump($_GET['id']);
//var_dump($projet_id);
    ?>

    <main>
        <h1>Page Details Posts</h1>
    </main>


    <?php include(DOSSIER . '/composants/modal.html.php'); ?>
    <?php include(DOSSIER . '/composants/scripts.html.php'); ?>
</body>

</html>