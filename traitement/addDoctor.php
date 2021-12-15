<?php
include('../include/connexionDB.php');
include('../include/functions.php');

if (isset($_POST['ajouter_doctor'])) {
 
    $specialite = $_POST['specialite'];
    $doctor = $_POST['doctor'];

    $req = "UPDATE doctors set id_specialite = '$specialite' WHERE id_doctor='$doctor'";
    $result = mysqli_query($connect, $req);

    if ($result) {
        flash('msg', 'Spécialiste ajouté avec succès');
        header('Location:../viewDoctors/doctors.php');
    } else {
        echo "Echec";
    }
}
