<?php
session_start();

include("../include/connexionDB.php");

if (isset($_GET['valueInput'])) {

    $dataInput = isset($_GET['valueInput']) ? $_GET['valueInput'] : "";

    $req = "SELECT * FROM specialite WHERE nom_specialite like '%$dataInput%' ";
    $result = mysqli_query($connect, $req);
} else {
    $req = "SELECT * FROM specialite";
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
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/toastr.min.css">
    <title>Dossiers | Patients</title>
</head>

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
                                <form action="services.php" method="GET">
                                    <input type="search" class="form-control" placeholder="Rechercher" name="valueInput" />

                                    <button class="btn btn-default" style="margin-top:10px; margin-bottom:10px">
                                        <i class="fa fa-search"> </i> Rechercher</button>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <a href='newService.php'>
                                    <button class="btn btn-default" style="background:#f0f0f0"> <i class="fa fa-plus"> </i> Nouveau service</button>
                                </a>
                            </div>
                        </div>
                        <div style="padding:0; margin-top:100px">
                            <div class="panel panel-default" style="height: 70vh; overflow: auto;">
                                <div class="panel-heading">Liste de services
                                    (<?php echo $num ?>)
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom</th>
                                                <th>Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody> <?php if ($num > 0) {
                                                    while ($service = mysqli_fetch_array($result)) { ?>
                                                    <tr>
                                                        <td><?php echo $service['id_specialite'] ?></td>
                                                        <td><?php echo $service['nom_specialite'] ?></td>
                                                        <td><?php echo $service['description'] ?></td>
                                                        <td style="width:220px; text-align:center">
                                                            <a onclick="return confirm(' Etes-vous sûr de vouloir supprimer ce service ?')" href='../traitement/deleteService.php?id=<?php echo $service['id_specialite'] ?>'>
                                                                <button class="btn btn-default"><i class="fa fa-trash "></i>
                                                                    Supprimer
                                                                </button>
                                                            </a>
                                                            <a href='editService.php?id=<?php echo $service['id_specialite'] ?>'>
                                                                <button class="btn btn-default"><i class="fa fa-edit"></i>
                                                                    Editer
                                                                </button>
                                                            </a>
                                                        </td>

                                                    </tr>
                                            <?php }
                                                } ?>

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