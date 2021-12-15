<?php

session_start();

include('../include/connexionDB.php');

$id = $_SESSION['rec']['id_doctor'];

$res = "SELECT * FROM consultation, doctors, patient, specialite WHERE (consultation.id_doctor = doctors.id_doctor)
   AND consultation.id_patient = patient.id_patient AND doctors.id_specialite = specialite.id_specialite AND doctors.id_doctor='$id'";

$query = mysqli_query($connect, $res);

$num = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/font-awesome.css" />
    <title>Doctor | Espace private</title>
</head>
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
                            <div class="col-md-6">
                                <a href='newPatient.php'>
                                    <button class="btn btn-default" style="background:#f0f0f0"> <i class="fa fa-edit"> </i> Editer Profile</button>
                                </a>
                            </div>
                        </div>
                        <div style="padding:0; margin-top:100px">
                            <div class="panel panel-default" style="height: 70vh; overflow: auto;">
                                <div class="panel-heading">Liste de patients (<?php echo $num ?>) <i class="fa fa-user-md fa-2x"></i></div>
                                <div class="panel-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Noms</th>
                                                <th>Sexe</th>
                                                <th>Poids</th>
                                                <th>Photo</th>
                                                <th>Téléphone et Adresse</th>
                                                <th>Date d'enregistrement</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($patient = mysqli_fetch_array($query)) { ?>
                                                <tr>
                                                    <td><?php echo $patient['id_patient'] ?></td>
                                                    <td><?php echo $patient['nom_patient'] . '  ' . $patient['postnom'] . ' ' . $patient['prenom'] ?></td>
                                                    <td><?php echo $patient['sexe'] ?></td>
                                                    <td><?php echo $patient['poids'] ?> kg</td>
                                                    <td> <img style="width:50px; height: 50px; border-radius: 100%;" src="../images/<?php echo $patient['photo'] ?>" </td>
                                                    <td>+243 <?php echo $patient['telephone'] ?></td>
                                                    <td><?php echo $patient['date'] ?></td>
                                                    <td style="width:220px; text-align:center">

                                                        <?php
                                                        if ($patient['consulte'] == 1) {
                                                            echo "<div class='alert alert-success'>Consulté 
                                                                <i class='fa fa-check'></i>
                                                            </div>";
                                                        } else {
                                                        ?>
                                                            <i class="fa fa-spinner fa-spin"></i> En attente...
                                                            <a href='noterPatient.php?id=<?php echo $patient['id_patient'] ?>'>
                                                                <button class="btn btn-default"><i class="fa fa-edit"></i>
                                                                    Noter
                                                                </button>
                                                            </a>
                                                        <?php }
                                                        ?>

                                                    </td>

                                                </tr>
                                            <?php }
                                            ?>
                                        </tbody>
                                    </table>
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