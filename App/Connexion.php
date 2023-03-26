<?php

namespace App;

use PDO;
use PDOException;

class Connexion
{

    public static function getConnexion()
    {

        try {
            $pdo = new PDO('mysql:host=localhost;dbname=bd_crowd', 'root', 'root');
            return $pdo;
        } catch (PDOException $e) {
            echo "La connexion a echoue: " . $e->getMessage();
        }
    }
}
