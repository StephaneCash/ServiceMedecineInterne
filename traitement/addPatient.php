<?php

session_start();

include('../include/connexionDB.php');
include("../include/functions.php");

if (isset($_POST['ajouter_patient'])) {
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $poids = $_POST['poids'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];

    $date =  date('l jS \of F Y h:i:s A');

    $photo = isset($_FILES['photo']['name']) ? $_FILES['photo']['name'] : "";
    $Img_temp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($Img_temp, "../images/" . $photo);

    $req = "INSERT INTO patient (nom, postnom, prenom, sexe, poids, photo, telephone, date, description)
        VALUES('$nom', '$postnom', '$prenom', '$sexe', '$poids', '$photo', '$phone', '$date', '$description')";
    $result = mysqli_query($connect, $req);

    if($result){
        flash('msg', 'Patient enregistré avec succès');
        header('Location:../viewDoctors/patients.php');
    }else{
        echo "Echec";
    }
}
?>
