<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Header</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

    <script src="../js/jquery.min.js"> </script>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand" title="Médecine Interne">
                    <i class="glyphicon glyphicon-home" style="font-size:19s    px"></i> Service Médecine Interne
                </a>
            </div>

            <ul class="nav navbar-nav navbar-right">
               <?php 
                    if(isset($_SESSION['admin'])){
                        $user = $_SESSION['admin'];
                        echo "
                            <li class='nav-item'><a href='#' title='Admin' class='nav-link' ><i class='fa fa-user'></i> $user</a></li>
                            <li class='nav-item'><a href='../admin/logout.php' title='Docteur' class='nav-link'> <i class='glyphicon glyphicon-log-out'></i> Se déconnecter</a></li>
                        ";
                    }else{
                        echo "
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