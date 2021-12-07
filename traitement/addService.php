<?php
session_start();

include('../include/connexionDB.php');
include("../include/functions.php");

if (isset($_POST['ajouter_service'])) {
    $nom = $_POST['nom'];
    $description = $_POST['description'];

    echo $nom . $description;

    $req = "INSERT INTO specialite (nom_specialite, description) VALUES('$nom', '$description')";
    $result = mysqli_query($connect, $req);

    if ($result) {
        flash(
            "msg", "Service ajouté avec succès"
        );
        header("Location:../viewDoctors/services.php");
    } else {
        echo "Echec d'enregistrement";
    }
}
