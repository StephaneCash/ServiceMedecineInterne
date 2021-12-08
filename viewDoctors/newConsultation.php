<?php
session_start();

include('../include/connexionDB.php');

$doctorSelect = "SELECT * FROM doctors";
$resultDoct = mysqli_query($connect, $doctorSelect);

$patientSelect = "SELECT * FROM patient";
$resultPatient = mysqli_query($connect, $patientSelect);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <title>Nouvelle | Consultation</title>
</head>

<style>
    a:hover {
        background-color: white !important;
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
                            <form action="../traitement/addConsultation.php" method="post" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Ajouter une nouvelle consultation</div>
                                            <div class="panel-body">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Patient</label>
                                                            <select class="form-control" name="patient">
                                                                <?php while ($patient = mysqli_fetch_array($resultPatient)) {
                                                                    echo '
                                                                    <option value="' . $patient[0] . '">' . $patient[1] . '</option>
                                                                ';
                                                                } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Médecin</label>
                                                            <select class="form-control" name="doctor">
                                                                <?php while ($doctor = mysqli_fetch_array($resultDoct)) {
                                                                    echo '
                                                                        <option value="' . $doctor[0] . '">' . $doctor[1] . '</option>
                                                                    ';
                                                                } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="padding: 15px">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Description" name="description" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row" style="padding: 15px;">
                                                    <button class="btn btn-default" style="width:100%; background:#f0f0f0" name="ajouter_consultation">
                                                        <i class="fa fa-plus"></i> Ajouter
                                                    </button>
                                                </div>
                                                <div class="col-md-12">
                                                    <a style="float:left; color:black !important" href="services.php">Retour sur la page de consultations </a>
                                                </div>
                                            </div>
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