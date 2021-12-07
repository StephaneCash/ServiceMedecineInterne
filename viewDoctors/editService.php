<?php
session_start();

include('../include/connexionDB.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$req = "SELECT * FROM specialite WHERE id_specialite='$id'";
$result = mysqli_query($connect, $req);

$service = mysqli_fetch_array($result);

$id_specialite = $service['id_specialite'];
$nom = $service['nom_specialite'];
$description = $service['description'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <title>Add | Patient</title>
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
                            <form action="../traitement/editService.php" method="post" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Ajouter un nouveau service</div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <input type="hidden" value="<?php echo $id_specialite ?>" class="form-control" placeholder="Le nom" name="id_specialite">
                                                </div>
                                                <div class="form-group">
                                                    <label>Entrer le nom</label>
                                                    <input type="text" class="form-control" value="<?php echo $nom ?>" placeholder="Le nom" name="nom">
                                                </div>
                                                <div class="form-group">
                                                    <label>Entrer la description</label>
                                                    <textarea class="form-control" placeholder="Une description" name="description"><?php echo $description ?></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <a style="float:left; color:black !important" href="services.php">Retour sur la page de patients </a>
                                                    <button class="btn btn-default" style="float:right" name="editer_service"> <i class="fa fa-edit"></i> Editer</button>
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