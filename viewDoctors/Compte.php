<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte | doctor</title>
</head>

<body>
    <?php

    session_start();

    include('../include/connexionDB.php');

    $id = $_SESSION['rec']['id_doctor'];

    ?>

    <style>
        td,
        th {
            font-size: 14px;
            font-family: Segoe UI;
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
                            <?php include('menuDoct.php');
                            include('../include/functions.php') ?>
                        </div>
                        <div class="col-md-10" style="margin-top: 100px;">
                            <div class="col-md-8" style="padding:0px">
                                <div class="col-md-6" style="padding:0px">
                                    <form action="patients.php" method="GET">
                                        <input type="search" class="form-control" placeholder="Rechercher" name="valueInput" />

                                        <button class="btn btn-default" style="margin-top:10px; margin-bottom:10px">
                                            <i class="fa fa-search"> </i> Rechercher</button>
                                    </form>
                                </div>
                            </div>
                            <div style="padding:0; margin-top:100px">
                                <div class="panel panel-default" style="height: 70vh; overflow: auto;">
                                    <div class="panel-heading">Compte <i class="fa fa-user-md fa-2x"></i></div>
                                    <div class="panel-body">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script src="../js/jquery.min.js"></script>
        <script src="../js/toastr.min.js"></script>

        <script>
            toastr.options = {
                "preventDuplicates": true,
                "positionClass": 'toast-bottom-right'
            }
            <?php if (isset($_SESSION['msg'])) : ?>
                toastr.success("<?php echo flash('msg'); ?>");
            <?php endif ?>
            <?php if (isset($_SESSION['message'])) : ?>
                toastr.success("<?php echo delete('message'); ?>");
            <?php endif ?>
            <?php if (isset($_SESSION['edit'])) : ?>
                toastr.success("<?php echo editer('edit'); ?>");
            <?php endif ?>
        </script>
    </body>

</html>
</body>

</html>