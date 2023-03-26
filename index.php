<?php
session_start();
require 'app/autoload.php';

use App\Route;
//une constante qui retourne le domaine en cours ex: http://localhost/phpavance
define('LIEN', Route::lien());
//une constante qui retourne la racine du dossier de votre projet
define('DOSSIER', dirname(__FILE__) . '/views');
Route::access();
