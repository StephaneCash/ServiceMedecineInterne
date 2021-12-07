<?php 
    session_start();

    include('../include/connexionDB.php');
    include('../include/functions.php');

    if (isset($_POST['id_specialite'])){
        //echo $_POST['id_specialite'];

        $id = $_POST['id_specialite'];
        
        $nom = $_POST['nom'];
        $description = $_POST['description'];

        $req = "UPDATE specialite set nom_specialite='$nom', description='$description' WHERE id_specialite='$id'";
        $result = mysqli_query($connect, $req);

        if($result){
            editer("edit", "Edition du service a été effectué avec succès");  
            header('Location:../viewDoctors/services.php');
        }else{
            echo "Echec d'édition";
        }
    }
