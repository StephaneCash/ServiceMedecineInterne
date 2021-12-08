<?php
session_start();

include('../include/connexionDB.php');
include('../include/functions.php');

if (isset($_POST['ajouter_consultation'])) {

    $patient = $_POST['patient'];
    $doctor = $_POST['doctor'];
    $description = $_POST['description'];

    $date =  date('l jS \of F Y h:i:s A');

    $req = "INSERT INTO consultation (id_patient, id_doctor, date, description)
                VALUES('$patient', '$doctor','$date', '$description')";
    $result = mysqli_query($connect, $req);

    if($result){
        flash('msg', 'Consultation créée avec succès');
        header('Location:../viewDoctors/consultations.php');
    }else{
        echo "Echec de création de consultation";
    }
}
