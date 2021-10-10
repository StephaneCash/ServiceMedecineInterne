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
    } else if ($genre == "") {
        $error['apply'] = "Sélectionnez votre genre svp !";
    } else if (empty($phone)) {
        $error['apply'] = "Entrer un numéro de téléphone svp !";
    } else if (empty($password1)) {
        $error['apply'] = "Entrer un mot de passe svp !";
    }else if ($password2 != $password1) {
        $error['apply'] = "Les deux mots de passe ne correspondent pas !";
    }

}
