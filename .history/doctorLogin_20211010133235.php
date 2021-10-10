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
        include("include/header.php");
    ?>

    <div class="container loginDocteur">
        <div class="col-md-12" style="margin-top: 80px;">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 jumbotron">
                <span class="glyphicon glyphicon-user" style="font-size:64px;"></span>
                    <h4>Connexion Docteurs</h4>
                    <form action="" method="post" class="my-2">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Entrer votre username">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Votre mot de passe">
                        </div>

                        <input type="submit" name="login" class="btn btn-success" value="Se connecter">
                        <p>
                        </p>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>

</body>

</html>