<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>SideNav</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/index.css">
</head>

<style>
.ListeSide {
    margin: -15px;
    height: 100vh;
    background-color: #222222;
    position: fixed;
    width: 170px;
    text-align: center;
    line-height: 70px;
}

</style>

<body>
    <!-- SideNav -->
    <div class="list-group bg-info ListeSide" >
        <div class="ab">
        <a href="index.php" class="list-group-item list-group-item-action bg-info text-center nav-link"
            style="background-color: #222222; color:silver; border-left-color: black; font-size:17px; font-family: Tahoma">
            <i class="fa fa-dashboard"></i> Dashboard
        </a>
        <a href="profile.php" class="list-group-item list-group-item-action bg-info text-center nav-link"
            style="background-color: #222222; color:silver; border-left-color: black; font-size:17px; font-family: Tahoma;">
            <i class="fa fa-user" style="margin-left:-40px"></i> <span>Profile</span>
        </a>
        <a href="" class="list-group-item list-group-item-action bg-info text-center nav-link"
            style="background-color: #222222; color:silver; border-left-color: black; font-size:17px; font-family: Tahoma">
            <i class="fa fa-cog" style="margin-left:-8px"></i> Administra
        </a>
        <a href="" class="list-group-item list-group-item-action bg-info text-center nav-link"
            style="background-color: #222222; color:silver; border-left-color: black; font-size:17px; font-family: Tahoma">
            <i class="fa fa-user-md" style="margin-left:-20px"></i>  Docteurs
        </a>
        <a href="" class="list-group-item list-group-item-action bg-info text-center nav-link"
            style="background-color: #222222; color:silver; border-left-color: black; font-size:17px; font-family: Tahoma">
            <i class="fa fa-medkit" style="margin-left:-24px" ></i> Patients
        </a>
        </div>
    </div>
</body>

</html>
