<?php

$username = null;
$password = null;

if (!empty($_POST) && ($_POST["username"]) && ($_POST["mdp"]))
{
    $username = $_POST["username"];
    $password = $_POST["mdp"];
}

$users = [
    "luc"=> "motDePasseDeLuc4",
    "michel"=> "pasteque",
    "eglantine"=> "choucroute",
    "patricia"=> "surf"
];




if (array_key_exists($username, $users) && $users[$username] === $password) //vérifie que le username existe et que la valeur attribué au username est la même que le mot de passe
{
    header("location: resultat.php");
}
else header("location: index.php");



//les bons utilisateurs et mot de passe
// peuvent se connecter, les autres sont renvoyés à l'accueil
//
//Sur une connection réussie, on renvoie vers la page résultat qui dit bravo.
//elle a un bouton déconnexion (retour accueil)
//
//JEUX SQL :
// https://sql-island.informatik.uni-kl.de/
//https://mystery.knightlab.com/