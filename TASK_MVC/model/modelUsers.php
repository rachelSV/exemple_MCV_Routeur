<?php
function readUsersAll($bdd){
    try{
        //2) Prepare la requête SELECT
        $req=$bdd->prepare('SELECT id_user, name_user, first_name_user, login_user FROM users');

        //3) Executer la requête
        $req->execute();

        //4) Récupérer la réponse de la BDD
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }catch(EXCEPTION $error){
        return $error->getMessage();
    }
}

function readUserByLogin($bdd,$login){
    try{
        //7) Vérifier que le login est dispo
        $req=$bdd->prepare('SELECT id_user, name_user, first_name_user, login_user, mdp_user FROM users WHERE login_user = ?');

        $req->bindParam(1,$login,PDO::PARAM_STR);

        $req->execute();

        return $req->fetchAll(PDO::FETCH_ASSOC);

    }catch(EXCEPTION $error){
        return $error->getMessage();
    }
}

function addUser($bdd,$name,$firstname,$login,$password){
    try{
        //Préparer la requête d'enregistrement
        $req=$bdd->prepare('INSERT INTO users (name_user, first_name_user, login_user, mdp_user) VALUES (?,?,?,?)');

        //Binding de Param
        $req->bindParam(1,$name,PDO::PARAM_STR);
        $req->bindParam(2,$firstname,PDO::PARAM_STR);
        $req->bindParam(3,$login,PDO::PARAM_STR);
        $req->bindParam(4,$password,PDO::PARAM_STR);

        //Executer la requête     
        if($req->execute()){
            return true;
        }
    }catch(EXCEPTION $error){
        return $error->getMessage();
    }
}
?>