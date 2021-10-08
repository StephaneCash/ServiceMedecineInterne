<?php
session_start();

include("../include/connexionDB.php");

$admin = $_SESSION["admin"];

$photo = isset($_FILES['photo']['name'])?$_FILES['photo']['name']:"";
    $Img_temp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($Img_temp, "img/" .$photo);

if (isset($_POST['update'])) {
   // $username = $_POST['username'];

    $photo = isset($_FILES['photo']['name']) ? $_FILES['photo']['name'] : "";

    if (empty($photo)) {
        header("Location:profile.php");
    } else {
        $query = "UPDATE admin SET profile = '$photo' WHERE username='$admin' ";

        $result = mysqli_query($connect, $query);

        if ($result) {
            move_uploaded_file($_FILES['photo']['tmp_name'], 'img/$profile');
            header("Location:profile.php");
        }
    }
}


?>