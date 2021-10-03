<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style/index.css">
</head>

<body>
    <?php 
    include("include/header.php");
?>
    <div class="container" style="margin-top:75px">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 mx-1 shadow">
                    <img src="images/hack.jpg" style="width:100%">

                    <h5 class="text-center">Click on the button for more information</h5>

                    <a href="">
                        <button class="btn btn-success my-3" style="margin-left:120px">More Information</button>
                    </a>
                </div>

                <div class="col-md-4 mx-1 shadow">
                    <img src="images/hack.jpg" style="width:100%">

                    <h5 class="text-center">Créer un compte si vous n'en possédez pas</h5>

                    <a href="">
                        <button class="btn btn-success my-3" style="margin-left:120px"> Créer un compte</button>
                    </a>
                </div>

                <div class="col-md-4 mx-1 shadow">
                    <img src="images/hack.jpg" style="width:100%">
                    
                    <h5 class="text-center">We are employing for doctors</h5>

                    <a href="">
                        <button class="btn btn-success my-3" style="margin-left:120px"> Apply Now !!</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>