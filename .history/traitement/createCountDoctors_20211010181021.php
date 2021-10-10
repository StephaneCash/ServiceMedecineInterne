<?php
session_start();

include "../include/connexionDB.php";

if (isset($_POST['apply'])) {

    $noms = $_POST['noms'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $genre = $_POST['genre'];
    $phone = $_POST['phone'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    $error = array();

    if (empty($noms)) {
        $error['apply'] = "Entrer vos noms svp !";
    } elseif (empty($username)) {
        $error['apply'] = "Entrer un username svp !";
    } else if (empty($email)) {
        $error['apply'] = "Entrer une adresse email svp !";
    } else if (empty($genre)) {
        $error['apply'] = "Choisir un genre svp !";
    } else if (empty($phone)) {
        $error['apply'] = "Entrer un numéro de téléphone svp !";
    }

}
