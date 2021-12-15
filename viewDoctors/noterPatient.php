<?php
session_start();

include('../include/connexionDB.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$req = "SELECT * FROM patient WHERE id_patient='$id'";
$result = mysqli_query($connect, $req);

$patient = mysqli_fetch_array($result);

$id_patient = $patient['id_patient'];
$nom = $patient['nom_patient'];
$postnom = $patient['postnom'];
$prenom = $patient['prenom'];
$sexe = $patient['sexe'];
$poids = $patient['poids'];
$telephone = $patient['telephone'];
$description = $patient['description_patient'];
$photo = $patient['photo'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <title>Noter | Patient</title>
</head>

<style>
    a:hover {
        background-color: white !important;
    }

    label {
        font-family: Segoe UI;
        font-size: 14px;
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
                        <?php include('menuDoct.php') ?>
                    </div>
                    <div class="col-md-10" style="margin-top: 100px;">
                        <div class="container">
                            <form action="../traitement/notePatient.php" method="post" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">Editer <?php echo $nom . " " . $postnom ?></div>
                                            <div class="panel-body">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="hidden" value="<?php echo $id_patient ?>" required class="form-control" placeholder="Le nom" name="id_patient">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Entrer le nom</label>
                                                        <input type="text" required disabled value="<?php echo $nom ?>" class="form-control" placeholder="Le nom" name="nom">
                                                    </div>

                                                    <img src="../images/<?php echo $photo ?>" style='width: 150px;height: 150px; border-radius: 100%' />

                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Entrer le poids</label>
                                                        <input type="number" disabled value="<?php echo $poids ?>" required class="form-control" placeholder="Le poids" name="poids">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Entrer le numéro du téléphone</label>
                                                        <input type="number" disabled value="<?php echo $telephone ?>" required class="form-control" placeholder="Le numéro de téléphone" name="phone">
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <div class='form-group'>
                                                    <label>Entrer un rapport</label>
                                                    <textarea class='form-control' placeholder="Noter un patient" name="note"></textarea>
                                                </div>
                                            </div>
                                            <div class="row" style="padding:10px 45px">
                                                <a style="float:left; color:black !important" href="patients.php">Retour sur la page d'accueil </a>
                                                <button class="btn btn-default" style="float:right;background:#f0f0f0" name="noter_patient"> <i class="fa fa-edit"></i> Noter <?php echo $nom ?></button>
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