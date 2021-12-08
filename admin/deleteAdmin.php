<?php 
    session_start();

    include "../include/connexionDB.php";

    if(isset($_GET['id'])){ 

        $id = $_GET['id'];

        $req = "DELETE FROM admin WHERE id = '$id'";
        $result = mysqli_query($connect, $req);
    
        if ($result) {
            header('Location:admin.php');
        } else {
            echo "Echec de suppression";
        }
    }
