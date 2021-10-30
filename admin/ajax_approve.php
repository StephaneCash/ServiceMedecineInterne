<?php
include('../include/connexionDB.php');

$id = $_POST['id'];

$query = "UPDATE doctors SET status='Approved' WHERE id='$id'";

mysqli_query($connect, $query);