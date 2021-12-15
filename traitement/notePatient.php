<?php
include('../include/connexionDB.php');
include('../include/functions.php');

if (isset($_POST['noter_patient'])) {
    $id_patient = $_POST['id_patient'];
    $note = $_POST['note'];

    $bo = true;

    $requete = "UPDATE patient set consulte='$bo', note='$note' WHERE id_patient='$id_patient'";
    $resReq = mysqli_query($connect, $requete);

    if($resReq){
        header("Location:../viewDoctors/doctorPrivate.php");
    }else{
        echo "Echec";
    }
}
