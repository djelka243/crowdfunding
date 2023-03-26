<?php

require ('../controllers/MembreController.php');
use controllers\MembreController;

  //se connecter 
 // if(isset($_POST['btn_login'])) {
        
    $email = trim(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = trim(htmlspecialchars($_POST['password']));
    $password = md5($password);
        if(empty($email) || empty($password)){
            echo'Veuillez remplir tous les champs';
        }elseif(!$email){
            echo 'L\'adresse email n\'est pas valide.';
        }else{

            $controller2 = new MembreController();
            $controller2->seconnecter($email, $password);
        }  
?>