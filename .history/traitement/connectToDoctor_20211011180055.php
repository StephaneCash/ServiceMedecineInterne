<?php
include '../include/connexionDB.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $error = array();

    if(empty($username)){
        $error['login'] = "Entrer votre username svp";
    }

}
