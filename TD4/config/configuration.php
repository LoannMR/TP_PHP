<?php
 
const DEBUG = true; // production : false; dev : true

// Accès base de données
const BD_HOST = 'localhost';
const BD_DBNAME = 'PHP';
const BD_USER = 'root';
const BD_PWD = 'root';

// Langue du site
const LANG ='FR-fr';

// Paramètres du site : nom de l'auteur ou des auteurs
const AUTEUR = 'Loann MR'; 

//dossiers racines du site
define('PATH_CONTROLLERS','./controllers/c_');
define('PATH_ENTITY','./entities/');
define('PATH_ASSETS','./assets/');
define('PATH_LIB','./lib/');
define('PATH_MODELS','./models/m_');
define('PATH_VIEWS','./views/v_');
define('PATH_TEXTES','./languages/');

//sous dossiers
define('PATH_CSS', PATH_ASSETS.'css/');
define('PATH_IMAGES', PATH_ASSETS.'images/');
define('PATH_SCRIPTS', PATH_ASSETS.'scripts/');

//fichiers
define('PATH_LOGO', PATH_IMAGES.'logo.png');
define('PATH_MENU', PATH_VIEWS.'menu.php');

//Dictionnaire
$listeSelection = [
    0 => "Toutes les photos",
    1 => "Animaux",
    2 => "Repas",
    3 => "Monuments",
];
