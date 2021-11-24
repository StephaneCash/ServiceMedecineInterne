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

<body style="background-color: #f0f0f0">
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
                        <div class="col-md-8">
                            <div class="col-md-6">
                                <input type="search" class="form-control" placeholder="Rechercher" />
                                <button class="btn btn-success" style="margin-top:10px; margin-bottom:10px">
                                    <i class="fa fa-search"> </i> Rechercher</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary"> <i class="fa fa-plus"> </i> Nouveau patient</button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exempleModal">Launch</button>
                            </div>
                        </div>
                        <div style="padding:0; margin-top:60px">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Noms</th>
                                        <th>Age</th>
                                        <th>Poids</th>
                                        <th>Sexe</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <div class="modal fade" id="exempleModal" tabindex="-1" role="dialog" aria-labelledby="exempleModalLabelledby">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class=""
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Body
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="../js/app.js"></script>
</body>

</html>