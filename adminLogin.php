<?php 

    session_start();

    include("include/connexionDB.php"); // Inclusion de la connexion à la BD

    if(isset($_POST['login'])){
        $username = $_POST['username']; // Recupération du champ pour le username
        $password = $_POST['password']; // Recupération du champ pour le password

        $error = array(); // Tableau d'erreurs

        //Si le username ou le password est vide
        if(empty($username)){  
            $error['admin'] = "Veuillez renseigner votre username";
        }else if(empty($password)){
            $error['admin'] = "Veuillez renseigner votre password";
        }

        $error2 = "";

        if(count($error) == 0){
            $requete = " SELECT * FROM admin WHERE username='$username' AND password='$password' ";

            $result = mysqli_query($connect, $requete);

            if(mysqli_num_rows($result) == 1){
                echo " <script> alert('Vous êtes connecté en ADMIN')</script> ";

                $_SESSION['admin'] = $username;

                header("Location:admin/index.php");
            }else{
                echo " <script> alert('Nom d\'utilisateur ou mot de passe incorrect')</script> ";
            }
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>AdminLogin</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<style>
   label{
       font-size:15px;
   }
   .IconeUser{
       font-size:75px;
   }
   input[type="submit"]{
       padding:10px;
       font-family: Arial;
       width:100%;
       margin-top:20px;
       margin-bottom: 40px;
   }
</style>

<body>

    <script src="../js/jquery.min.js"> </script>

    <?php 
        include("include/header.php");
    ?>

    <div class="container" style="margin-top:80px; font-family: Segoe UI; ">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 jumbotron" >
                    <span class="glyphicon glyphicon-user" style="font-size:64px;"></span>
                    <h4>Connexion</h4>
                    <form method="post" class="my-2">

                       <div>
                            <?php if(!empty($error['admin'])){?>
                                <div class="alert alert-danger">
                                    <?php 
                                        $show = $error['admin'];
                                        echo $show;
                                    ?> 
                                </div>
                            <?php } ?>
                        </div>

                        <div class="form-group">
                            <label>Votre username</label>
                            <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Entrer votre username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Entrer votre password">
                        </div>
                        <input type="Submit" name="login" class="btn btn-success" value="Se connecter">
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>

</html>
