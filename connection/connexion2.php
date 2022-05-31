<?php

include_once 'db/db.php';

if ($_POST["mdp"] === $_POST["mdp2"] ){
$mdphash = $_POST["mdp2"];
$mdp = $mdphash;

$mdphash = hash(
    "sha256",
    $mdp,
);

$mdp = $_POST['mdp'];
$token = $_POST["token"];


$sql = "UPDATE users SET passwords = ? WHERE token = ?"; 

$connection->prepare($sql)->execute([$mdphash, $token]);

}

;


