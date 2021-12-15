<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dashboard_ADMIN</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color: #f0f0f0">
    <?php
    include "../include/header.php";
    include('../include/connexionDB.php');
    ?>

    <div class="container-fluid" style='margin-top:56px;'>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left:-30px">
                    <?php include("sideNav.php") ?>
                    <!-- Ends -->
                </div>
                <div class="col-md-10">
                    <h2 style="font-family: 'Segoe UI'; margin-top: 10px"> <i class="fa fa-dashboard"></i> Dashboard
                        Admin
                    </h2>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3"
                                style='height:130px; background-color: #648412; margin-top:2px; margin-right: 10px;'>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <?php
                                            $requete = mysqli_query($connect, "SELECT * FROM admin");

                                            $nombreUsers = mysqli_num_rows($requete);
                                            ?>
                                            <h5 style="color:white; font-size:30px"> <?php echo $nombreUsers ?> </h5>
                                            <h5 style="color:white; font-size:18px">Total</h5>
                                            <h5 style="color:white; font-size:18px">Admin</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="admin.php">
                                                <i class="fa fa-cog fa-spin fa-3x"
                                                    style="margin-top:12px; color:white"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3"
                                style='height:130px; background-color: #222222; margin-top:2px; margin-right: 10px;'>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <?php
                                            $doctor = mysqli_query($connect, "SELECT * FROM doctors WHERE statut='Approved'");
                                            $numbreDoctors = mysqli_num_rows($doctor);
                                            ?>
                                            <h5 style="color:white; font-size:30px"><?php echo $numbreDoctors ?></h5>
                                            <h5 style="color:white; font-size:18px">Total</h5>
                                            <h5 style="color:white; font-size:18px">Docteurs</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="doctor.php">
                                                <i class="fa fa-user-md fa-3x" style="margin-top:12px; color:white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"
                                style='height:130px; background-color: #0896ba; margin-top:2px; margin-right: px;'>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 style="color:white; font-size:30px">0</h5>
                                            <h5 style="color:white; font-size:18px">Total</h5>
                                            <h5 style="color:white; font-size:18px">Patient</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fa fa-medkit fa-3x" style="margin-top:12px; color:white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3"
                                style='height:130px; background-color: #ea4542; margin-top:10px; margin-right: 10px;'>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">

                                            <?php

                                            $job = mysqli_query($connect, "SELECT * FROM doctors WHERE statut='En attente'");

                                            $num1 = mysqli_num_rows($job);

                                            ?>

                                            <h5 style="color:white; font-size:30px"><?php echo $num1 ?></h5>
                                            <h5 style="color:white; font-size:18px">Total</h5>
                                            <h5 style="color:white; font-size:18px">Job Request</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="job_request.php">
                                                <i class="fa fa-book fa-3x" style="margin-top:12px; color:white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"
                                style='height:130px; background-color: #0896ba; margin-top:10px; margin-right: 10px;'>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 style="color:white; font-size:30px">0</h5>
                                            <h5 style="color:white; font-size:18px">Total</h5>
                                            <h5 style="color:white; font-size:18px">Rapport</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fa fa-flag fa-3x" style="margin-top:12px; color:white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"
                                style='height:130px; background-color: #ffbb00; margin-top:10px; margin-right: px;'>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 style="color:white; font-size:30px">0</h5>
                                            <h5 style="color:white; font-size:18px">Total</h5>
                                            <h5 style="color:white; font-size:18px">Revenu</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fa fa-usd fa-3x" style="margin-top:12px; color:white"></i>
                                        </div>
                                    </div>
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