<?php

namespace controllers;
 use Models\Post;
 
 require "../models/Post.php";

 class PostController{
    protected $table = "posts";

    private $model;

    public function __construct()
    {
        $this->model = new Post();
    }

    //Enregistrement



    public function storage($local,$nomP,$desc,$risque, $rdm){

        $idMembre = $_SESSION['compte'];    
        $this->model->ajouter($local,$nomP,$desc,$risque, $rdm, $idMembre);
    }


    //afficher tous les elements 

    public function voirTous(){
       
     $tab= $this->model->recupAll();
     return $tab;


       // passage des données à la vue
      
        include('views/posts/post.html.php');
        //return $tab;

    
        
    }
 }