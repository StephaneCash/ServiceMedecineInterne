<?php
session_start();

include('../include/connexionDB.php');
include('../include/functions.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $req = "DELETE FROM patient WHERE id_patient = '$id'";
    $result = mysqli_query($connect, $req);

    if ($result) {
        delete("message", "Patient supprimé avec succès");
        header('Location:../viewDoctors/patients.php');
    } else {
        echo "Echec de suppression";
    }
}
