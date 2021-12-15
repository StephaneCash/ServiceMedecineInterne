<?php

include('../include/connexionDB.php');

$id = $_POST['id'];

$query = "UPDATE doctors SET statut='Approved' WHERE  id_doctor='$id'";

mysqli_query($connect, $query);