<?php
    session_start();

    include "../include/connexionDB.php";

    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $password1 = isset($_POST['password1']) ? $_POST['password1'] : "";
    $password2 = isset($_POST['password2']) ? $_POST['password2'] : "";

    $admin = $_SESSION['admin'];

    $query = "select * from admin where username='$admin'";

    $result = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_array($result)) {

        $passwordEx = $row['password'];

        $usernameEx = $row['username'];
    }

    if ($password == $passwordEx) {

        if ($password1 == $password2) {

            $msg = "Votre password a été changé avec succès ! ";

            $_SESSION['success'] = $msg;

            $_SESSION['error'] = "";

            $query = "UPDATE admin SET username='$username', password='$password1' WHERE username='$admin' ";

            $result = mysqli_query($connect, $query);

            $_SESSION['admin'] = $username;

            header("Location:profile.php");

        }else{
            
            $msg = "Les deux password ne correspondent pas";

            $_SESSION['error'] = $msg;

            $_SESSION['success'] = "";

            header("Location:profile.php");

        }
    } else if($password != $passwordEx) {

        $msg = "Votre ancien password n'est pas valide";

        $_SESSION['error'] = $msg;

        $_SESSION['success'] = "";

        header("Location:profile.php");
    }
    if($username != $usernameEx){

        $query = "UPDATE admin SET username='$username' WHERE username='$admin' ";

        $result = mysqli_query($connect, $query);

        if ($result) {

            $_SESSION['admin'] = $username;

            header("Location:profile.php");
        }
    } else {
        header("Location:profile.php");
    }
    

