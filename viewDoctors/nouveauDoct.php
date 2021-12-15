<?php
session_start();

include('../include/connexionDB.php');

$req = "SELECT * FROM specialite";
$query = mysqli_query($connect, $req);

$reqD = 'SELECT * FROM doctors';
$queryD = mysqli_query($connect, $reqD);

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
                                                        <label>Sélectionnez un docteur</label>
                                                        <select class="form-control" required name="specialite">
                                                            <?php while ($specialite = mysqli_fetch_array($query)) {
                                                                echo '<option value="' . $specialite[0] . '">' . $specialite[1] . '</option>';
                                                            } ?>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label>Sélectionnez la spécialité</label>
                                                    <select class="form-control" required name="doctor">
                                                        <?php while ($doct = mysqli_fetch_array($queryD)) {
                                                            echo '<option value="' . $doct[0] . '">' . $doct[1] . '</option>';
                                                        } ?>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row" style="padding:10px 45px">
                                                <a style="float:left; color:black !important" href="doctors.php">Retour sur la page de doctors </a>
                                                <button class="btn btn-default" style="float:right;background:#f0f0f0" name="ajouter_doctor"> <i class="fa fa-plus"></i> Ajouter un nouveau Docteur</button>
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