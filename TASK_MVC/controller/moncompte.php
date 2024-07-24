<?php
//J'inclus les fichiers des View
//Je remplis la Session
function afficherCompte(){
    //1) Vérifier que l'utilisateur est connecté
    if(!isset($_SESSION['isConnected'])){
        return ["message" => "Vous n'êtes pas connecté", "nom" => "", "prenom" => '', 'login'=> ''] ;
    }

    //2) Je transmets à la vue les données du compte
    return ["message" => "", "nom" => $_SESSION['nom'], "prenom" => $_SESSION['prenom'], 'login'=> $_SESSION['login']] ;
}

//J'appelle la fonction qui affiche la vue en transmettant les données
echo renderHeader("");
echo showMonCompte(afficherCompte()['nom'],afficherCompte()['prenom'],afficherCompte()['login'],afficherCompte()['message']);
echo renderFooter("");
?>