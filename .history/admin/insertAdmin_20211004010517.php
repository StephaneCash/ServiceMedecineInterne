<?php
session_start();

include "../include/connexionDB.php";

if (isset($_POST['add'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $image = $_FILES['photo']['name'];
}

echo $username . $password . $image;

$error = array();

if (empty($username)) {
    $error['u'] = "Veuiller entrer votre username";
} else if (empty($password)) {
    $error['u'] = "Veuillez entrer un password";
} else if (empty($image)) {
    $error['u'] = "Chosir une photo de profil";
}

if (count($error) == 0) {
    $req = "INSERT INTO admin(username, password,profile)
                    VALUES('$username', '$password', '$image')";
    $result = mysqli_query($connect, $req);

    if ($result) {
        move_uploaded_file($_FILES['photo']['tmp_name'], 'img/$image');
    }
}

$er = $error['u'];

$_SESSION['error'] = $er;

if (isset($error['u'])) {
    $er = $error['u'];
    $show = "<h5 class='alert alert-danger'>$er</h5>";
} else {
    $show = "";
}

header("Location:admin.php");
