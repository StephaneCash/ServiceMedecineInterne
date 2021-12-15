<?php
session_start();

include('../include/connexionDB.php');
include('../include/functions.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    echo $id_doctors;

    $status = 'remove';

    $req = "UPDATE doctors set statut = '$status' WHERE id_doctor='$id'";

    $result = mysqli_query($connect, $req);

    if ($result) {
        flash('msg', 'Spécialiste enlevé avec succès');
        header('Location:../viewDoctors/doctors.php');
    } else {
        echo "Echec";
    }
}
