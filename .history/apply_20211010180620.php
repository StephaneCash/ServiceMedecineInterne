<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Apply</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style/index.css">
</head>

<style>
label {
    font-size: 15px;
    font-family: Segoe UI;
}

.IconeUser {
    font-size: 75px;
}

input[type="submit"] {
    padding: 10px;
    font-family: Arial;
    width: 100%;
    margin-top: 20px;
    margin-bottom: 40px;
}
</style>

<body > 

<?php include("include/header.php"); ?>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 my-3 jumbotron" style="margin-top:80px;">
                <h2 style="text-align:center">Apply Now !!</h2>
                
                <form method="post" action="traitement/createCountDoctors.php">
                    <div class="form-group">
                        <label>Noms complets </label>
                        <input  type="text" name="noms" class="form-control" placeholder="Entrer votre nom">
                    </div>
                    <div class="form-group">
                        <label>Nom d'utilisateur </label>
                        <input  type="text" name="username" class="form-control" placeholder="Entrer votre nom">
                    </div>

                    <div class="form-group">
                        <label>Email </label>
                        <input type="email" name="email" class="form-control" placeholder="Entrer votre email">
                    </div>

                    <div class="form-group">
                        <label>Genre </label>
                        <select name="genre" class="form-control" > 
                            <option>Genre</option>
                            <option>Femme</option>
                            <option>Homme</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>T??l??phone </label>
                        <input type="number" name="phone" class="form-control" placeholder="Entrer votre T??l??phone">
                    </div>

                    <div class="form-group">
                        <label>Cr??er un mot de passe </label>
                        <input  type="password" name="password1" class="form-control" placeholder="Entrer un mot de passe">
                    </div>

                    <div class="form-group">
                        <label>Confirmer votre mot de passe </label>
                        <input  type="password" name="password2" class="form-control" placeholder="Confirm password">
                    </div>

                    <input type="submit" name="apply" value="Cr??er un compte" class="btn btn-success">
                    
                    <p style="font-size:15px">Vous avez d??j?? un compte ? <a href="adminLogin.php"> Cliquer ici</a></p>

                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>

</body>
</html>