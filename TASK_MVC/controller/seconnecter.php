<?php
//J'inclus les fichiers des View

function seConnecter(){
    if(!isset($_POST["submit"])){
        return;
    }

    if(!isset($_POST['login_user']) || empty($_POST['login_user']) ||
        !isset($_POST['password_user']) || empty($_POST['password_user'])){
           
        return "Veulliez remplir tous les champs";
    }

    //nettoyer les champs
    $login = sanitize($_POST['login_user']);
    $password = sanitize($_POST['password_user']);
    //connexion bdd
    $bdd = connectBDD($_ENV['hostBDD'],$_ENV['dbnameBDD'],$_ENV['dbLogin'],$_ENV['dbPassword']);
    //récup les info utilisateur (login) 
    //[DES QUE JE SUIS CONNECTER A LA BDD, JE MET UN TRY CATCH (là non car il y a deja un try catch dans ma function model Read by login)]
    $data = readUserByLogin($bdd,$login);
    //password verify
    //super global session
    if($login && password_verify($password, $data[0]['mdp_user'])){
        $_SESSION['id_user'] = $data[0]['id_user'];
        $_SESSION['name_user'] = $data[0]['name_user'];
        $_SESSION['first_name_user'] = $data[0]['first_name_user'];
        $_SESSION['login_user'] = $data[0]['login_user'];
        return "Vous êtes connecté";
    } return "Le Login ou le mot de passe est incorrect";
    
}
echo renderHeader("");
$message = seConnecter();
echo connexion($message);
echo renderFooter("");
?>