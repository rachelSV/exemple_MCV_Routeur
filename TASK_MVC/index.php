<?php
//J'active la session
session_start();

//J'inclus mon fichier d'environnement
include './controller/env.php';
//J'inclus mes fonctions utilitaires
include './utils/functions.php';
//J'inclus le model 
include './model/modelUsers.php';
//J'inclus les fichiers des View
include './view/viewHeader.php';
include './view/viewFooter.php';
include './components/viewCardUser.php';


//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);

//test soit l'url a une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';

/*--------------------------ROUTER -----------------------------*/
//test de la valeur $path dans l'URL et import de la ressource
switch($path){
    case '/';
    include './view/viewAccueil.php';
    include './controller/accueil.php';
    break;

    case '/moncompte';
    include './view/viewMonCompte.php';
    include './controller/moncompte.php';
    break;
    // route connexion
    case '/connexion';
    include './view/viewConnexion.php';
    include './controller/seconnecter.php';
    break;
    // route déconnexion
    case "/deconnexion";
    include './controller/deconnexion.php';
    break;

   
    //route par default
    default :
    include './controller/404.php';
    break;
}
?>