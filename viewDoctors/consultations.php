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
                            <div class="panel panel-default" style="height: 33vh; overflow: auto;">
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
                                                    <td style="width:300px; text-align:center">
                                                        <a href=''>
                                                            <button class="btn btn-default">
                                                                <i class="fa fa-trash"></i> Supprimer
                                                            </button>
                                                        </a>
                                                        <a href=''>
                                                            <button class="btn btn-default">
                                                                <i class="fa fa-edit"></i> Editer
                                                            </button>
                                                        </a>
                                                        <a href='consultations.php?id_consultation=<?php echo $data['id_consultation'] ?>'>
                                                            <button class="btn btn-default">
                                                                <i class="fa fa"></i> Détail
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row detailConsultation" style="padding: 0 15px">
                            <div class="panel panel-default" style="height: 34vh; overflow: auto;">
                                <div class="panel-heading">Détail de consultation</div>
                                <div class="panel-body">
                                    <div class="col-md-6" style="border:1px solid silver">
                                        <h4>Patient </h4>
                                        <?php
                                        include('../include/connexionDB.php');
                                        if (isset($_GET['id_consultation'])) {
                                            $id      = $_GET['id_consultation'];

                                            $requete = "SELECT * FROM consultation, doctors, patient, specialite WHERE (consultation.id_doctor = doctors.id_doctor)
                                            AND consultation.id_patient = patient.id_patient AND doctors.id_specialite = specialite.id_specialite AND id_consultation = '$id'";
                                            $resultat = mysqli_query($connect, $requete);
                                            $nums = mysqli_num_rows($resultat);

                                            while ($val = mysqli_fetch_array($resultat)) {
                                                $nomsP = $val['nom_patient'];
                                                $photo = $val['photo'];
                                                $postnom = $val['postnom'];
                                                $prenom = $val['prenom'];
                                                $poids = $val['poids'];
                                                $sexe = $val['sexe'];
                                                $telephone = $val['telephone'];
                                                $adresse = $val['description_patient'];
                                                $name = $nomsP;

                                                $nomD = $val['noms'];
                                                $nomSpe = $val['nom_specialite'];
                                                $profile = $val['profile'];
                                                $phone = $val['phone'];
                                                $genre = $val['genre'];
                                                $email = $val['email'];
                                            }
                                        }
                                        ?>

                                        <?php
                                        if (!empty($nums)) {
                                            echo "<div class='row'>
                                                <div class='col-md-4'>
                                                <td><img style='width:140px; margin-bottom:10px; height:140px; border-radius:100px' src='../images/$photo'></td>
                                                </tr>
                                                </div>
                                                <div class='col-md-8' style='font-size:14px; font-family:Segoe UI'>
                                                    <td>Noms : $nomsP $postnom $prenom</td><br />
                                                    <td > Poids : $poids kg</td><br />
                                                    <td> Sexe : $sexe </td><br />
                                                    <td> Téléphone : +243 $telephone </td><br />
                                                    <td> Adresse : $adresse </td>
                                                </div>
                                            </div>
                                            ";
                                        } else {
                                            echo "
                                            <tr>
                                                <td colSpan='5px' style='text-align:center'>
                                                    Cliquer sur un élément svp
                                                </td>
                                            </tr>
                                             ";
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-6" style="border:1px solid silver">
                                        <h4>Médecin </h4>

                                        <?php
                                        if (!empty($nums)) {
                                            echo "<div class='row'>
                                                    <div class='col-md-4'>
                                                    <td><img style='width:140px; margin-bottom:10px; height:140px; border-radius:100px' src='../admin/img/$profile'></td>
                                                    </tr>
                                                    </div>
                                                    <div class='col-md-8' style='font-size:14px; font-family:Segoe UI'>
                                                        <td>Noms : $nomD </td><br />
                                                        <td > Spécialité : $nomSpe </td><br />
                                                        <td> Sexe : $genre </td><br />
                                                        <td> Téléphone : $phone </td><br />
                                                        <td> Email : $email </td>
                                                    </div>
                                                </div>
                                                ";
                                        } else {
                                            echo "
                                                <tr>
                                                    <td colSpan='5px' style='text-align:center'>
                                                        Cliquer sur un élément svp
                                                    </td>
                                                </tr>
                                                 ";
                                        }
                                        ?>
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