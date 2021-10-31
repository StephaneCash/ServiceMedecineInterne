<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style/index.css">
</head>

<body style='background-color:#f0f0f0'>
    <?php include("../include/header.php") ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-top:56px; margin-left: -30px;">
                    <?php
                    include("sideNav.php");
                    include("../include/connexionDB.php");
                    ?>

                </div>
                <div class="col-md-10" style="margin-top:60px">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-center" style="font-size:18px; font-family: Segoe UI;">Tous les Admin
                                </h5>

                                <?php
                                $ad = $_SESSION['admin'];
                                $requete = "SELECT * FROM admin WHERE username !='$ad'";
                                $res = mysqli_query($connect, $requete);

                                $output = "
                                     <table class='table table-striped table-bordered'>
                                     
                                         <tr>
                                             <th style='width:10%'>#</th>
                                             <th >Username</th>
                                             <th style='width:10%'>Actions</th>
                                     ";
                                if (mysqli_num_rows($res) < 1) {
                                    $output .= "<tr><td colspan='3' style='text-align:center'> Pas d'admins !</td></tr>";
                                }

                                while ($row = mysqli_fetch_array($res)) {
                                    $id = $row['id'];
                                    $username = $row['username'];

                                    $output .= "
                                            <tr>
                                                <td>$id</td>
                                                <td>$username</td>
                                                <td>
                                                    <a href='admin.php?id=$id'><button id='$id' class='btn btn-danger remove'>
                                                       <i class='fa fa-trash'></i>
                                                    </button> </a>
                                                </td>
                                        ";
                                }

                                $output .= "
                                        </tr>
                                    </table>
                                     ";

                                echo $output;
                                ?>

                            </div>
                            <div class="col-md-6">

                                <h5 class="text-center" style="font-size:18px; font-family: Segoe UI;">Ajouter Admin
                                </h5>
                                <form method="post" action="insertAdmin.php" enctype="multipart/form-data">
                                    <div>
                                        <?php
                                        if (isset($_SESSION['erreur'])) {
                                            $er = $_SESSION['erreur'];
                                            echo "<h5 class='alert alert-danger'>$er</h5>";
                                        }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Chosir une photo</label>
                                        <input type="file" name="photo" class="form-control">
                                    </div>
                                    <input type="submit" name="add" value="Ajout admin" class="btn btn-success">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>