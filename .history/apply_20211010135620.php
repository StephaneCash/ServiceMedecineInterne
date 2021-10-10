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

<body > 

<?php include("include/header.php"); ?>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 my-3 jumbotron">
                <h5>Apply Now !!</h5>
                
                <form>
                    <div class="form-group">
                        <label>Nom </label>
                        <input type="text" name="nom" class="form-control" placeholder="Entrer votre nom">
                    </div>

                    <div class="form-group">
                        <label>Postnom </label>
                        <input type="text" name="postnom" class="form-control" placeholder="Entrer votre postnom">
                    </div>

                    <div class="form-group">
                        <label>Nom </label>
                        <input Prénom="text" name="prenom" class="form-control" placeholder="Entrer votre prénom">
                    </div>

                    <div class="form-group">
                        <label>Email </label>
                        <input type="email" name="email" class="form-control" placeholder="Entrer votre email">
                    </div>

                    <div class="form-group">
                        <label>Genre </label>
                        <select name="genre">
                            <option>Genre</option>
                            <option>Femme</option>
                            <option>Homme</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Téléphone </label>
                        <input type="number" name="telephone" class="form-control" placeholder="Entrer votre Téléphone">
                    </div>

                    <div class="form-group">
                        <label>Créer un mot de passe </label>
                        <input type="password" name="password1" class="form-control" placeholder="Entrer un mot de passe">
                    </div>

                    <div class="form-group">
                        <label>Confirmer votre mot de passe </label>
                        <input type="password" name="password2" class="form-control" placeholder="Confirm password">
                    </div>

                    <input type="submit" name="apply" value="Créer" class="btn btn-success">
                    
                    <p>I already have an account <a href="adminLogin.php"></a></p>

                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>

</body>
</html>