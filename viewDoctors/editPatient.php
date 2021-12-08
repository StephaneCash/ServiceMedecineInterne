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
$description = $patient['description'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <title>Editer | Patient</title>
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
                        <?php include('menuLeft.php') ?>
                    </div>
                    <div class="col-md-10" style="margin-top: 100px;">
                        <div class="container">
                            <form action="../traitement/editPatient.php" method="post" enctype="multipart/form-data">
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
                                                        <input type="text" required value="<?php echo $nom ?>" class="form-control" placeholder="Le nom" name="nom">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Entrer le postnom</label>
                                                        <input type="text" value="<?php echo $postnom ?>" required class="form-control" placeholder="Le postnom" name="postnom">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Entrer le prénom</label>
                                                        <input type="text" required value="<?php echo $prenom ?>" class="form-control" placeholder="Le prénom" name="prenom">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sélectionnez du sexe</label>
                                                        <select class="form-control" required name="sexe">
                                                            <option value="Homme">Homme</option>
                                                            <option value="Femme">Femme</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Entrer le poids</label>
                                                        <input type="number" value="<?php echo $poids ?>" required class="form-control" placeholder="Le poids" name="poids">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Chosir une photo</label>
                                                        <input type="file" class="form-control" placeholder="Le postnom" name="photo">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Entrer le numéro du téléphone</label>
                                                        <input type="number" value="<?php echo $telephone ?>" required class="form-control" placeholder="Le numéro de téléphone" name="phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Entrer une adresse</label>
                                                        <textarea required name="description" placeholder="Description" class="form-control"><?php echo $description ?></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="padding:10px 45px">
                                                <a style="float:left; color:black !important" href="patients.php">Retour sur la page de patients </a>
                                                <button class="btn btn-default" style="float:right;background:#f0f0f0" name="editer_patient"> <i class="fa fa-edit"></i> Editer <?php echo $nom ?></button>
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