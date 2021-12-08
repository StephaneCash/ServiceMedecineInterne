<?php
session_start();

include('../include/connexionDB.php');
include('../include/functions.php');

if (isset($_POST['editer_patient'])) {
    //echo $_POST['id_specialite'];

    $id_patient = $_POST['id_patient'];
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $poids = $_POST['poids'];
    $telephone = $_POST['phone'];
    $description = $_POST['description'];

    $date =  date('l jS \of F Y h:i:s A');

    $photo = isset($_FILES['photo']['name']) ? $_FILES['photo']['name'] : "";
    $Img_temp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($Img_temp, "../images/" . $photo);

    if (!empty($photo)) {
        $req = "UPDATE patient set nom='$nom', postnom='$postnom', prenom='$prenom', 
                sexe='$sexe', poids='$poids', photo='$photo', telephone='$telephone', 
                date='$date', description='$description' WHERE id_patient = '$id_patient'";
        $result = mysqli_query($connect, $req);

        if ($result) {
            editer("edit", "Edition du patient a été effectué avec succès");
            header('Location:../viewDoctors/patients.php');
        } else {
            echo "Echec d'édition";
        }
    } else {
        $req = "UPDATE patient set nom='$nom', postnom='$postnom', prenom='$prenom', 
                sexe='$sexe', poids='$poids', telephone='$telephone', date='$date', 
                description='$description' WHERE id_patient = '$id_patient'";
        $result = mysqli_query($connect, $req);
        if ($result) {
            editer("edit", "Edition du patient a été effectué avec succès");
            header('Location:../viewDoctors/patients.php');
        } else {
            echo "Echec d'édition";
        }
    }
}
