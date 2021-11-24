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
        background-color: #282c34;
        margin: 0px;
        height: 93vh;
    }

    .ListeSide a {
        background-color: #282c34;
        color: silver;
        font-family: Segoe UI;
        font-size: 16px;
        border: 1px solid #282c34;
    }

    .ListeSide a:hover {
        color: black;
        background-color: silver;
    }

    .ListeSide .fa {
        margin-left: 12px;
        margin-right: 10px;
    }

    .active {
        background-color: red;
    }
</style>

<body>
    <!-- SideNav -->
    <div class="ListeSide">
        <a href="index.php" class="list-group-item list-group-item-action nav-link">
            <i class="fa fa-folder"></i>Patients
        </a>

        <a href="profile.php" class="list-group-item list-group-item-action nav-link">
            <i class="fa fa-user"></i> <span>Consultations</span>
        </a>
        <a href="" class="list-group-item list-group-item-action nav-link">
            <i class="fa fa-cog"></i> Ordonance
        </a>
        <a href="" class="list-group-item list-group-item-action nav-link">
            <i class="fa fa-user-md"></i> Paiement
        </a>

        <a href="" class="list-group-item list-group-item-action nav-link">
            <i class="fa fa-medkit"></i> Médicament
        </a>

        <a href="" class="list-group-item list-group-item-action nav-link">
            <i class="fa fa-medkit"></i> Statistiques
        </a>
    </div>
</body>

</html>