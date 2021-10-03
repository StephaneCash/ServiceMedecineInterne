<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page d'accueil ADMIN</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<style>
    .ListeSide{
        margin: -15px;
        height: 100vh;
        background-color: #222222;
        position: fixed;
        width:170px;
        line-height: 56px;
    }
    
</style>

<body>
    <?php
        include "../include/header.php";
    ?>

    <div class="container-fluid" style='margin-top:65px;'>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <div>
                        <!-- SideNav -->
                        <div class="list-group bg-info ListeSide">
                            <a href="" class="list-group-item list-group-item-action bg-info text-center" style="background-color: #222222; color:silver">
                                Dashboard
                            </a>
                            <a href="" class="list-group-item list-group-item-action bg-info text-center" style="background-color: #222222; color:silver">
                                Administrateur
                            </a>
                            <a href="" class="list-group-item list-group-item-action bg-info text-center" style="background-color: #222222; color:silver">
                                Docteurs
                            </a>
                            <a href="" class="list-group-item list-group-item-action bg-info text-center" style="background-color: #222222; color:silver">
                                Patients
                            </a>
                        </div>
                    </div>
                    <!-- Ends -->
                </div>
                <div class="col-md-10"></div>
            </div>
        </div>
    </div>
</body>

</html>