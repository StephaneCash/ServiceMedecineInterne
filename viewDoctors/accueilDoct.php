<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <title>Accueil | Doctor</title>
</head>

<style>
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
                    <div class="col-md-10" style="margin-top: 70px;">
                        <div class="col-md-8" style="padding:0px">
                            <div class="col-md-6" style="padding:0px">
                                <input type="search" class="form-control" placeholder="Rechercher" />
                                <button class="btn btn-default" style="margin-top:10px; margin-bottom:10px">
                                    <i class="fa fa-search"> </i> Rechercher</button>
                            </div>
                            <div class="col-md-6">
                                <a href='newPatient.php'>
                                    <button class="btn btn-default"> <i class="fa fa-plus"> </i> Nouveau patient</button>
                                </a>
                            </div>
                        </div>
                        <div style="padding:0; margin-top:100px">
                            <div class="panel panel-default">
                                <div class="panel-heading">Liste de patients <i class="fa fa-user-md fa-2x"></i></div>
                                <div class="panel-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Noms</th>
                                                <th>Sexe</th>
                                                <th>Poids</th>
                                                <th>Maladie et Docteurs</th>
                                                <th>Photo</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>