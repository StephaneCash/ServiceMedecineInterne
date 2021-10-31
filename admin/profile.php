<?php
session_start();
if (isset($_SESSION['error'])) {
    $erreurLogin = $_SESSION['error'];
} else {
    $erreurLogin = "";
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color: #f0f0f0">
    <?php
    include "../include/header.php";
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-top: 56px; margin-left:-30px">
                    <?php
                    include "sideNav.php";

                    include '../include/connexionDB.php';

                    $admin = $_SESSION['admin'];

                    $query = "select * from admin where username='$admin'";

                    $result = mysqli_query($connect, $query);

                    while ($row = mysqli_fetch_array($result)) {
                        $username = $row['username'];
                        $profiles = $row['profile'];
                        $password = $row['password'];
                    }
                    ?>
                </div>
                <div class="col-md-10" style="margin-top: 60px">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6" style="left: 8.3%">
                                <h4><?php echo $username; ?> Profile</h4>

                                <form method="post" enctype="multipart/form-data" action="updateAdminProfile.php">
                                    <?php echo "<img src='img/$profiles' class='col-md-12'
                                        style='height: 140px; width:140px; border-radius:140px'>";
                                    ?>

                                    <br><br>
                                    <div class="form-group">
                                        <label>Editer le profile</label>
                                        <input type="file" name="photo" class="form-control" style="width:auto">
                                    </div>

                                    <input type="submit" name="update" value="Editer" class="btn btn-success">
                                </form>
                            </div>
                            <div class="col-md-6" style="margin-top:10px">
                                <form method="post" action="upNomAdmin.php">

                                    <div class="form-group">
                                        <label>Editer le username</label>
                                        <input type="text" class="form-control" name="username" style='width:60%'
                                            value="<?php echo $username ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Entrer l'ancien mot de passe : </label>
                                        <input type="password" class="form-control" name="password" style='width:60%'>
                                    </div>
                                    <label>Entrer le nouveau mot de passe</label>
                                    <input type="password" class="form-control" name="password1" style='width:60%'><br>
                                    <label>Confirmer le nouveau mot de passe</label>
                                    <input type='password' class="form-control" name="password2" style='width:60%'>
                                    <br>
                                    <input type="submit" id="update" name="change" class="btn btn-success"
                                        value="Editer">
                                    <div id="contenu" style="padding: 5px; margin-top: 10px; width:60%">
                                        <?php
                                        if (!empty($erreurLogin)) { ?>
                                        <div class="alert alert-danger">
                                            <?php echo $erreurLogin ?>
                                        </div>
                                        <?php } ?>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.getElementById("update").addEventListener("click", function() {

        let cont = document.getElementById('contenu');

        setTimeout(() => {

            if (getComputedStyle(cont).display == "block") {
                cont.style.display = "none";
            }
        }, 3000);
    })
    </script>

</body>

</html>