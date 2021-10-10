<?php
session_start();

include "../include/connexionDB.php";

if (isset($_POST['apply'])) {

    $noms = $_POST['noms'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $genre = $_POST['genre'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

}
