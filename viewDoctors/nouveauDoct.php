<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <title>Add | Docteur</title>
</head>

<style>
    a:hover {
        background-color: white !important;
    }

    label {
        font-family: Segoe UI;
        font-size: 14px;
    }
</style>

<body>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        include "../include/header.php";
                        ?>
                    </div>
                    <div class="col-md-2" style="padding:0; margin-top:54px !important">
                        <?php include('menuLeft.php') ?>
                    </div>
                    <div class="col-md-10" style="margin-top: 100px;">
                        <div class="container">
                            <form action="../traitement/addDoctor.php" method="post" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Ajouter un nouveau docteur</div>
                                            <div class="panel-body">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Entrer les noms</label>
                                                        <input type="text" required class="form-control" placeholder="Le nom" name="nom">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Sélectionnez du sexe</label>
                                                        <select class="form-control" required name="sexe">
                                                            <option value="Homme">Homme</option>
                                                            <option value="Femme">Femme</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sélectionnez la spécialité</label>
                                                        <select class="form-control" required name="sexe">
                                                            <option value="Homme">-Choisir une spécialité-</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Chosir une photo</label>
                                                        <input type="file" required class="form-control" placeholder="Le postnom" name="photo">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Entrer le numéro du téléphone</label>
                                                        <input type="number" required class="form-control" placeholder="Le numéro de téléphone" name="phone">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Entrer l'email</label>
                                                        <input type="email" required class="form-control" placeholder="L'email" name="nom">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="padding:10px 45px">
                                                <a style="float:left; color:black !important" href="doctors.php">Retour sur la page de doctors </a>
                                                <button class="btn btn-default" style="float:right;background:#f0f0f0" name="ajouter_patient"> <i class="fa fa-plus"></i> Ajouter un nouveau Docteur</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>