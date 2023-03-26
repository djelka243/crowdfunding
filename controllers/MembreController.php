<?php

namespace controllers;

use Models\Membre;

require_once '../models/Membre.php';


class MembreController
{
    private $model;
    public function __construct()
    {
        $this->model = new Membre();
    }

    //enregistrer à la bd 
    public function storage($nom, $postnom, $prenom, $email, $password)
    {
       $this->model->create($nom, $postnom, $prenom, $email, $password);
    }

    //se connecter 
    public function seconnecter($email, $password)
    {
        $id = $this->model->login($email, $password);
    
    }
}
