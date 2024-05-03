<?php

    // récuperation des données pour se connecter par des variables d'environnement 
    $host = getenv('DB_HOST');
    $username = getenv('DB_USER');
    $password = getenv('DB_PASSWPORD');
    $db = getenv('DB_NAME');

    /*
    $host = "db";
    $username = "root";
    $password = "root";
    $db = "gestion_produits";
    */


    $link = mysqli_connect($host,$username,$password,$db) or die ("Erreur de connexion à la base de données.");
    mysqli_set_charset($link,"utf8");
?>