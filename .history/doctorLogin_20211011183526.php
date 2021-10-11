<?php

session_start();

include 'include/connexionDB.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $error = array();

    $query = "SELECT * FROM doctors WHERE username = '$username' AND password='$password' ";
    $result = mysqli_query($connect, $query);

    $row = $mysqli_fetch_array($result);

    if (empty($username)) {
        $error['login'] = "Entrer votre username svp";
    } else if (empty($password)) {
        $error['login'] = "Entrer votre password svp";
    } else if ($row['Pending'] == 'En attente') {
        $error['login'] = "S'il vous plait veuillez patienter que l'Admin confirme votre compte";
    } else if ($row['pending'] == "Rejete") {
        $error['login'] = "Essayer plus tard ";
    }

    if ($count($error) == 0) {

        $query = "SELECT * FROM doctors WHERE username = '$username' AND password='$password' ";
        $res = mysqli_query($connect, $query);

        if (mysqli_num_rows($res)) {

            echo "<script>alert('Vous êtes connecté')</script>";
            $_SESSION['doctor'] = $username;

        } else {

            echo "<script>alert('Compte non valide')</script>";

        }

    }
}

if (isset($error['login'])) {

    $msgErr = $error['login'];
    $show = "<h5 class='alert alert-danger'>$msgErr</h5>";

} else {

    $show = "";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Docteur Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style/index.css">
</head>

<style>
    input[type="submit"] {
        padding: 10px;
        font-family: Arial;
        width: 100%;
        margin-top: 20px;
        margin-bottom: 40px;
    }
    .loginDocteur label{
        font-size: 15px;
    }
</style>

<body >

    <?php
include "include/header.php";
?>

    <div class="container loginDocteur">
        <div class="col-md-12" style="margin-top: 80px;">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 jumbotron">
                <span class="glyphicon glyphicon-user" style="font-size:64px;"></span>
                    <h4>Connexion Docteurs</h4>
                    <div>
                        <?php echo $show; ?>
                    </div>
                    <form method="post" class="my-2">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Entrer votre username">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Votre mot de passe">
                        </div>

                        <input type="submit" name="login" class="btn btn-success" value="Se connecter">
                        <p style="font-size:16px">
                            Si vous n'avez pas de compte <a href="apply.php">Créer ici !!</a>
                        </p>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>

</body>

</html>