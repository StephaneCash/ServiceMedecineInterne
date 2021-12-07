<?php
session_start();

include('../include/connexionDB.php');
include('../include/functions.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $req = "DELETE FROM specialite WHERE id_specialite = '$id'";
    $result = mysqli_query($connect, $req);

    if ($result) {
        delete("message", "Service supprimé avec succès");
        header('Location:../viewDoctors/services.php');
    } else {
        echo "Echec de suppression";
    }
}
