<?php

namespace App;
// Enregistre une fonction pour charger automatiquement les classes PHP
spl_autoload_register(function ($class) {

    // Sépare le nom de la classe en un tableau en utilisant le caractère "\" comme séparateur
    $tb = explode('\\', $class);

    // Construit le chemin du fichier correspondant à la classe
    $fichier = "";
    if (count($tb) > 1) { // Si la classe contient au moins un "\", recherche le fichier dans un dossier
        foreach ($tb as $i => $element) {
            if ($i == count($tb) - 1) {
                // Si c'est le dernier élément, c'est le nom du fichier
                $fichier .= $element . '.php';
            } else {
                // Sinon, c'est le nom d'un sous-dossier
                $dossier = strtolower($element);
                $fichier .= $dossier . '/';
            }
        }
    } else { // Sinon, la classe est placée dans le même dossier que le fichier actuel
        $fichier = $class . '.php';
    }

    // Charge le fichier de la classe correspondante en utilisant l'instruction require
    require $fichier;
});
