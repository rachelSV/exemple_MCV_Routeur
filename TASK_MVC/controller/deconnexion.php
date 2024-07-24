<?php

//je détruis la session
session_destroy();

//Redirection vers la page d'Accueil
header('Location:/');
exit();
?>