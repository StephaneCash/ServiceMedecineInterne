<?php
include '../include/connexionDB.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $error = array();

    if(empty($username)){
        $error['login'] = "Entrer votre username svp";
        echo "<script>alert('Entrer votre username svp')</script>";
    }else if(empty($password)){
        echo "<script>alert('Entrer votre password svp')</script>";
    }

}
