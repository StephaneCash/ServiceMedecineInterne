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
        margin-top: 1px;
        border-bottom: 1px solid #428bca;
        width: 68%;
    }

    ul {
        padding: 0;
        list-style: none;
    }

    ul li {
        border-bottom: 1px solid #333842;
    }

    .ListeSide a:hover {
        background: #1a202c;
    }
</style>

<body>
    <!-- SideNav -->
    <div class="ListeSide">
        <?php $page = basename($_SERVER['PHP_SELF']); ?>
        <ul>
            <li>
            </li>
            <li class="<?php if ($page == 'doctorPrivate.php') : echo "active";
                        endif ?>">
                <a href="doctorPrivate.php" class="list-group-item list-group-item-action nav-link">
                    <i class="fa fa-folder"></i>Patients à cons.
                </a>
            </li>
            <li class="<?php if ($page == 'Compte.php') : echo "active";
                        endif ?>">
                <a href="Compte.php" class="list-group-item list-group-item-action nav-link">
                    <i class="fa fa-user-circle"></i>Compte
                </a>
            </li>
            
        </ul>
    </div>
</body>

</html>