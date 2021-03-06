<?php session_start();

include('../include/connexionDB.php');

if (isset($_GET['valueInput'])) {

    $valueInput = $_GET['valueInput'];

    $req = "SELECT * FROM patient WHERE nom_patient like '%$valueInput%' OR postnom like '%$valueInput%'";
    $result = mysqli_query($connect, $req);
} else {
    $req = "SELECT * FROM patient";
    $result = mysqli_query($connect, $req);
}

$num = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/toastr.min.css">
    <title>Dossiers | Patients</title>
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
                        <?php include('menuLeft.php');
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
                                    <button class="btn btn-default" style="background:#f0f0f0"> <i class="fa fa-plus"> </i> Nouveau patient</button>
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
                                                <th>T??l??phone et Adresse</th>
                                                <th>Consult??</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($patient = mysqli_fetch_array($result)) { ?>
                                                <tr>
                                                    <td><?php echo $patient['id_patient'] ?></td>
                                                    <td><?php echo $patient['nom_patient'] . '  ' . $patient['postnom'] . ' ' . $patient['prenom'] ?></td>
                                                    <td><?php echo $patient['sexe'] ?></td>
                                                    <td><?php echo $patient['poids'] ?> kg</td>
                                                    <td> <img style="width:50px; height: 50px; border-radius: 100%;" src="../images/<?php echo $patient['photo'] ?>" </td>

                                                    <td>+243 <?php echo $patient['telephone'] . ' , ' . $patient['description_patient'] ?></td>
                                                    <td><?php if($patient['consulte'] == 1){ ?>
                                                        <div class="alert alert-success"><i class="fa fa-check"></i> Consult??</div>
                                                    <?php } ?> 
                                                    <?php if($patient['consulte'] == 0){ ?>
                                                        <div class="alert alert-info"> <i class="fa fa-spinner fa-spin"></i> En attente... </div>
                                                    <?php } ?>
                                                </td>
                                                    
                                                    <td style="width:310px; text-align:center">
                                                        <a onclick="return confirm(' Etes-vous s??r de vouloir supprimer ce patient ?')" href='../traitement/deletePatient.php?id=<?php echo $patient['id_patient'] ?>'>
                                                            <button class="btn btn-default"><i class="fa fa-trash "></i>
                                                                Supprimer
                                                            </button>
                                                        </a>
                                                        <a href='editPatient.php?id=<?php echo $patient['id_patient'] ?>'>
                                                            <button class="btn btn-default"><i class="fa fa-edit"></i>
                                                                Editer
                                                            </button>
                                                        </a>
                                                        <a href='patients.php?id=<?php echo $patient['id_patient'] ?>'>
                                                            <button class="btn btn-default"><i class="fa fa-user"></i>
                                                                D??tail
                                                            </button>
                                                        </a>
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