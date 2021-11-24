<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Header</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<style>
a {
    font-family: Segoe UI;
}
</style>

<body>

    <script src="../js/jquery.min.js"> </script>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand" title="Médecine Interne" style="margin-top:-5px">
                    <i class="glyphicon glyphicon-plus" style="font-size:19px; color:red; 
                        width:30px; height:30px;  
                        border-radius:30px; text-align:center; line-height:26px"></i>
                    Service
                    Médecine Interne
                </a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['admin'])) {
                    $user = $_SESSION['admin'];
                    echo "
                            <li class='nav-item'><a href='#' title='Admin' class='nav-link' ><i class='fa fa-user'></i> $user</a></li>
                            <li class='nav-item'><a href='../admin/logout.php' title='Déconnexion' class='nav-link'> <i class='glyphicon glyphicon-log-out'></i> Se déconnecter</a></li>
                        ";
                } else if (isset($_SESSION['doctor'])) {
                    $user = $_SESSION['doctor'];
                    echo "
                            <li class='nav-item'><a href='#' title='Doctor' class='nav-link' ><i class='fa fa-user'></i> $user</a></li>
                            <li class='nav-item'><a href='../doctor/logoutDoct.php' title='Déconnexion' class='nav-link'> <i class='glyphicon glyphicon-log-out'></i> Se déconnecter</a></li>
                        ";
                } else {
                    echo "
                            <li class='nav-item'><a href='#' title='Accueil' class='nav-link' >Accueil</a></li>
                            <li class='nav-item'><a href='adminLogin.php' title='Admin' class='nav-link' >Admin</a></li>
                            <li class='nav-item'><a href='doctorLogin.php' title='Docteur' class='nav-link' >Docteur</a></li>
                            <li class='nav-item'><a href='' title='Patient' class='nav-link' ;>Patient</a></li>
                        ";
                }
                ?>
            </ul>

            <script>

            </script>
        </div>
    </nav>

</body>

</html>