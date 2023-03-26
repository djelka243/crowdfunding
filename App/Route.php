<?php

namespace App;

class Route
{

    public static function access()
    {
       $url = '';

        if (isset($_GET['url'])) {
            $url = explode('/', $_GET['url']);
        }

        switch ($url[0]) {
            case '':
                require 'views/index.html.php';
                break;
            case 'leading':
                require 'views/index.html.php';
                break;
            case 'accueil':
                require 'views/accueil.html.php';
                break;
            case 'contact':
                require 'views/contact.html.php';
                break;
            case 'creer-un-compte':
                require 'views/register.html.php';
                break;
            case 'qui-sommes-nous':
                require 'views/qsN.html.php';
                break;
            case 'apropo-du-crowdfunding':
                require 'views/qsqCrowd.html.php';
                break;
            case 'logout':
                require 'views/logout.php';
                break;
            case 'mon-compte':
                require 'views/account.html.php';
                break;
            case 'publier':
                require 'views/makePub.html.php';
                break;
            case 'post':
                require 'views/posts/post.html.php';
                break;
            case 'mes-posts':
                require 'views/posts/mesPosts.html.php';
                break;
                case 'detail':
                    require 'views/posts/detailPost.html.php';
                    break;
        
            default:
                require 'views/erreur.html.php';
                break;
        }/*

  

// Exemple de route pour une application web

// Récupération de la méthode HTTP utilisée
$http_method = $_SERVER['REQUEST_METHOD'];

// Récupération de l'URL demandée
$request_uri = $_SERVER['REQUEST_URI'];

// Suppression de la query string (si présente) de l'URL demandée
if (strpos($request_uri, '?') !== false) {
    $request_uri = substr($request_uri, 0, strpos($request_uri, '?'));
}

// Routage en fonction de la méthode HTTP et de l'URL demandée
switch ($http_method) {
    case 'GET':
        switch ($request_uri) {
            case '/':
                // Afficher la page d'accueil
                break;
            case '/about':
                // Afficher la page "À propos"
                break;
            case '/contact':
                // Afficher le formulaire de contact
                break;
            default:
                // Afficher une erreur 404
                break;
        }
        break;
    case 'POST':
        switch ($request_uri) {
            case '/contact':
                // Traiter le formulaire de contact et envoyer l'e-mail
                break;
            default:
                // Afficher une erreur 404
                break;
        }
        break;
    default:
        // Afficher une erreur 405 (Méthode non autorisée)
        break;
}*/

    }

    public static function lien()
    {
        // Récupérer le protocole utilisé (http ou https)

        if ((!empty($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] == 'https') ||
            (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ||
            (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443')
        ) {
            $http = 'https';
        } else {
            $http = 'http';
        }

        // Récupérer le chemin complet du fichier PHP en cours d'exécution
        $index = $_SERVER['PHP_SELF'];

        // Extraire le chemin vers la racine du site
        $tb = explode('/', $index);
        $racine = (count($tb) < 3) ? null : str_replace('/index.php', '', $index);


        // Récupérer le nom de domaine de la requête en cours
        $domaine = $_SERVER['HTTP_HOST'];

        // Concaténer les éléments pour former le lien de base de l'application
        $lien = $http . "://" . $domaine . $racine;

        // Retourner le lien de base de l'application

        return $lien;
    }
}
