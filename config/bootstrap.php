<?php
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;
use Dotenv\Dotenv;

/**
 * -----------------------------------------------------------
 * Hello!
 * 
 *Voici le fichier de configuration permettant d'amorcer l'application.
 * -----------------------------------------------------------
 */



// Chargement de l'autoloader de composer 
require __DIR__ . "/../vendor/autoload.php";

// Chargement des constantes représentants des raccourcis
require __DIR__ . "/constants/app.php";


    // Chargement de Whoops pour avoir des msg d'erreur un peu plus stylés
    // et permettre un debug plus facilement 
$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

    // Chargement des variables d'environnement
$dotenv = Dotenv::createImmutable(ROOT);
$dotenv->load();

    // Chargement du conteneur de dépendances 

