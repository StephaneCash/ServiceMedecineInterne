<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <title>Accueil | Doctor</title>
</head>

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
                    <div class="col-md-3" style="padding:0; margin-top:58px !important">
                        <?php include('menuLeft.php') ?>
                    </div>
                    <div class="col-md-9">
                        Div container
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>