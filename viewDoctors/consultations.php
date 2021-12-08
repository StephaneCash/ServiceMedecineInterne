<?php
session_start();

include('../include/connexionDB.php');

$req = "SELECT * FROM consultation, doctors, patient, specialite WHERE (consultation.id_doctor = doctors.id_doctor)
        AND consultation.id_patient = patient.id_patient AND doctors.id_specialite = specialite.id_specialite ";
$result = mysqli_query($connect, $req);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/toastr.min.css">
    <title>Accueil | Patient</title>
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
                        include('../include/functions.php');
                        ?>
                    </div>
                    <div class="col-md-2" style="padding:0; margin-top:54px !important">
                        <?php include('menuLeft.php') ?>
                    </div>
                    <div class="col-md-10" style="margin-top: 100px;">
                        <div class="col-md-8" style="padding:0px">
                            <div class="col-md-6" style="padding:0px">
                                <input type="search" class="form-control" placeholder="Rechercher" />
                                <button class="btn btn-default" style="margin-top:10px; margin-bottom:10px">
                                    <i class="fa fa-search"> </i> Rechercher</button>
                            </div>
                            <div class="col-md-6">
                                <a href='newConsultation.php'>
                                    <button class="btn btn-default"> <i class="fa fa-plus"> </i> Nouvelle consultation</button>
                                </a>
                            </div>
                        </div>
                        <div style="padding:0; margin-top:100px">
                            <div class="panel panel-default" style="height: 70vh; overflow: auto;">
                                <div class="panel-heading">Liste de consultations</div>
                                <div class="panel-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Noms patient</th>
                                                <th>Sexe</th>
                                                <th>Poids</th>
                                                <th>Noms Docteurs et Spécialité</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($data = mysqli_fetch_array($result)) { ?>
                                                <tr>
                                                    <td><?php echo $data['id_consultation'] ?></td>
                                                    <td><?php echo $data['nom_patient'] ?></td>
                                                    <td><?php echo $data['sexe'] ?></td>
                                                    <td><?php echo $data['poids'] ?></td>
                                                    <td><?php echo $data['noms'] . ' , ' . $data['nom_specialite'] ?></td>
                                                    <td>
                                                        <button>
                                                            
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php } ?>
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