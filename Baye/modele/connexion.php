<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "simplondb";

//connexion à la bdd
try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$basededonnees", $utilisateur, $motdepasse);
} catch (Exception $e) {
    die('La connexion à la base de données a échoué : ' . $e->getMessage());
}

//verification de l'existance de l'utilisateur lors de la connexion
$select_use = $bdd->prepare('SELECT * FROM users WHERE mail=? AND password=?');

//verification de l'existance de l'user lors de son ajout puis ajout
$select_user = $bdd->prepare('SELECT * FROM users WHERE mail=?');
$ajout_user = $bdd->prepare('INSERT INTO users (mail,password) VALUES (?, ?)');

