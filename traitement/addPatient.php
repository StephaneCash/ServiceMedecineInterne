<?php
include('../include/connexionDB.php');

if (isset($_POST['ajouter_patient'])) {
    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $poids = $_POST['poids'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];

    $photo = isset($_FILES['photo']['name']) ? $_FILES['photo']['name'] : "";
    $Img_temp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($Img_temp, "../img/" . $photo);
}
