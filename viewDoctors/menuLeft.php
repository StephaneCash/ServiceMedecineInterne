<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>MenuLeft | Doctor</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/index.css">
</head>

<style>
    .ListeSide {
        background-color: #1a202c;
        margin: 0px;
        height: 93vh;
    }

    .ListeSide a {
        background-color: #1a202c;
        color: silver;
        font-family: Segoe UI;
        font-size: 16px;
        border: 0px solid #282c34;
    }
    .ListeSide .fa {
        margin-left: 12px;
        margin-right: 10px;
    }
    .active {
        border-bottom: 1px solid #428bca;
        width: 90%;
    }
    ul{
        padding: 0;
        list-style: none;
    }

    .ListeSide a:hover{
        background: #1a202c;
    }
</style>

<body>
    <!-- SideNav -->
    <div class="ListeSide">
        <?php $page = basename($_SERVER['PHP_SELF']); ?>
        <ul>
            <li class="<?php if($page == 'accueilDoct.php'):echo "active"; endif ?>">
                <a href="accueilDoct.php" class="list-group-item list-group-item-action nav-link">
                    <i class="fa fa-home"></i>Accueil
                </a>
            </li>
            <li class="<?php if($page == 'patients.php'): echo "active"; endif ?>">
                <a href="patients.php" class="list-group-item list-group-item-action nav-link">
                    <i class="fa fa-folder"></i>Patients
                </a>
            </li>
            <li class="<?php if($page == 'services.php'): echo "active"; endif ?>">
                <a href="services.php" class="list-group-item list-group-item-action nav-link">
                    <i class="fa fa-folder"></i>Sevices
                </a>
            </li>
            <li class="<?php if($page == 'profile.php'): echo "active"; endif?>">
                <a href="profile.php" class="list-group-item list-group-item-action nav-link">
                    <i class="fa fa-user"></i> <span>Consultations</span>
                </a>
            </li>
            <li class="<?php if($page == 'payement.php'): echo "active"; endif?>">
                <a href="Payement.php" class="list-group-item list-group-item-action nav-link">
                    <i class="fa fa-money"></i> Paiement
                </a>
            </li>
            <li class="<?php if($page == 'statistiques.php'): echo "active"; endif?>">
                <a href="" class="list-group-item list-group-item-action nav-link">
                    <i class="fa fa-medkit"></i> Statistiques
                </a>
            </li>
        </ul>
    </div>
</body>

</html>