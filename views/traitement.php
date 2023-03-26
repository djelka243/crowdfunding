<?php
//error_reporting(0);
require ('../controllers/MembreController.php');
require ('../controllers/PostController.php');
use controllers\MembreController;
use controllers\PostController;

//s'inscrire
if(isset($_POST['btn_register'])){
// Récupération des données du formulaire et validation
$nom = trim(htmlspecialchars($_POST['nom']));
$postnom = trim(htmlspecialchars($_POST['postnom']));
$prenom = trim(htmlspecialchars($_POST['prenom']));
$email = trim(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
$password = trim(htmlspecialchars($_POST['password']));
$passwordConf = trim(htmlspecialchars($_POST['passwordConf']));


// Vérification de la validité des données
if (empty($nom) || empty($prenom) || empty($email) || empty($password) || empty($passwordConf)) {
    echo "Veuillez remplir tous les champs";
} else if ($password !== $passwordConf) {
    echo "Les mots de passe ne correspondent pas.";
} else if (!$email) {
    echo "L'adresse email n'est pas valide.";
} else {
    $password = md5($password);
    // Création de l'instance du controller et stockage des données
    $controller = new MembreController();
    $controller->storage($nom, $postnom, $prenom, $email, $password);
}
}


if (isset($_POST['btn_pub'])) {
   
    $local = trim(htmlspecialchars($_POST['local']));
    $nomP = trim(htmlspecialchars($_POST['nomP']));
    $desc = trim(htmlspecialchars($_POST['desc']));
    $risque = trim(htmlspecialchars($_POST['risque']));
    $rdm = trim(htmlspecialchars($_POST['rdm']));

     
    if(empty($local) || empty($nomP) || empty($desc) || empty($risque) || empty($rdm)){
        echo "Veuillez remplir tous les champs";
    }else{
        $controller = new PostController();
        $controller->storage($local, $nomP, $desc, $risque, $rdm);
    }
}



