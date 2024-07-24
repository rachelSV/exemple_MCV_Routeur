<?php
//Fonction de nettoyage de donnée
function sanitize($data){
    return htmlentities(strip_tags(stripslashes(trim($data))));
}

//fonction de connexion à la BDD
function connectBDD($host,$dbname,$login,$password){
    return new PDO("mysql:host=$host;dbname=$dbname","$login","$password",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
?>