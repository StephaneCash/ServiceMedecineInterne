<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit | doctors</title>
</head>

<body>

    <?php

    include("../include/header.php");
    include("../include/connexionDB.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="doct">
                <div class="col-md-2" style="margin-top: 56px; margin-left:-30px">
                    <?php include('sideNav.php') ?>
                </div>
                <div class="col-md-10">
                    <h5>Editer docteur</h5>

                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $query = "SELECT * FROM doctors WHERE id='$id'";
                        $res = mysqli_query($connect, $query);

                        $doct = mysqli_fetch_array($res);

                        $noms = $doct['noms'];
                        $username = $doct['username'];
                        $email = $doct['email'];
                        $genre = $doct['genre'];
                        $phone = $doct['phone'];
                        $password = $doct['password'];
                        $salaire = $doct['salaire'];
                        $data_reg = $doct['data_reg'];
                        $profile = $doct['profile'];
                    }
                    ?>

                    <div class='doct'>
                        <div class='col-md-8' style='margin-top:30px'>
                            <p>
                            <h4>Détails du docteur</h4>
                            </p>
                            <div style="border:1px solid silver; padding:10px; border-radius:4px; width:70%">
                                <h5>ID : <?php echo $doct['id']; ?></h5>
                                <h5>Noms : <?php echo $doct['noms']; ?></h5>
                                <h5>Username : <?php echo $doct['username']; ?></h5>
                                <h5>Genre : <?php echo $doct['genre']; ?></h5>
                                <h5>Téléphone : <?php echo $doct['phone']; ?></h5>
                                <h5>Salaire : <?php echo $doct['salaire']; ?></h5>
                                <h5>Date d'enregistrement : <?php echo $doct['data_reg']; ?></h5>
                            </div>
                        </div>
                        <div class='col-md-4' style='margin-top:32px'>
                            <h5>Editer le salaire</h5>

                            <?php
                            $idD = $_GET['id'];
                            if (isset($_POST['update'])) {
                                $salaire = $_POST['salaire'];

                                $q = "UPDATE doctors SET noms ='$noms', username='$username', email='$email', 
                                    genre='$genre', phone='$phone', password='$password', salaire='$salaire',
                                    data_reg='$data_reg', profile='$profile' WHERE id='$idD' AND status='Approved'";

                                mysqli_query($connect, $q);
                            }
                            ?>

                            <form>
                                <label></label>
                                <input type="number" name='salaire' class="form-control" autocomplete="off"
                                    placeholder="Entrer le salaire" value="<?php echo $doct['salaire'] ?>">
                                <input type='submit' name="update" class="btn btn-info " value="Editer le salaire"
                                    style="margin-top:10px">
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</body>

</html>