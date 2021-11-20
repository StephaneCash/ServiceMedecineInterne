<?php

include('../include/connexionDB.php');

if (isset($_POST['update'])) {
    $salaire = $_POST['salaire'];

    echo $salaire;

    $q = "UPDATE doctors SET salaire='$salaire' WHERE id='$id";

    $res = mysqli_query($connect, $q);

    if ($res) {
        echo "fini";
    }
}