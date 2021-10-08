<?php 
    session_start();
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

<body style="background-color: silver">
    <?php 
        include("../include/header.php");
    ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-top: 65px;">
                    <?php 
                        include("sideNav.php");

                        include('../include/connexionDB.php');

                        $admin = $_SESSION['admin'];

                        $query = "select * from admin where username='$admin'";

                        $result = mysqli_query($connect, $query);

                        while ($row = mysqli_fetch_array($result)){
                            $username = $row['username'];
                            $profiles = $row['profile'];
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
                                        style='height: 160px; width:160px; left:-3%; border-radius:160px'>";
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
                                     <label>Editer le username</label>
                                     <input type="text" class="form-control" name="username" style='width:60%' value="<?php echo $username ?>">
                                     <br>
                                     <input type="submit" name="change" class="btn btn-success" value="Editer">
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