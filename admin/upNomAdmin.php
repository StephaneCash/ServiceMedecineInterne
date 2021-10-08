<?php 
    session_start();

    include("../include/connexionDB.php");

    $username = $_POST['username'];

    $admin = $_SESSION['admin'];

    if(isset($_POST['change'])){

        $query = "UPDATE admin SET username='$username' WHERE username='$admin' ";

        $result = mysqli_query($connect, $query);

        if($result){

            $_SESSION['admin'] = $username;

            header("Location:profile.php");
        }

    }
?>