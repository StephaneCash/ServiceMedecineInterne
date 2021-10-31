<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total | Doctors</title>
</head>

<body>
    <?php
    include('../include/header.php');
    include('../include/connexionDB.php');
    ?>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2" style="margin-left:-30px; margin-top:56px">
                <?php
                include('sideNav.php');
                ?>
            </div>
            <div class="col-md-10" style='margin-top:63px'>
                <h5>Total Docteurs</h5>
                <?php


                $doctor = "SELECT * FROM doctors WHERE status='Approved' ORDER BY data_reg ASC";
                $res = mysqli_query($connect, $doctor);

                $output = "";

                $output .= "
        <table class='table table-bordered'>
            <thead style='background-color:silver; color:#282c34'>
                <tr>
                    <th>#</th>
                    <th>Noms</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Genre</th>
                    <th>Téléphone</th>
                    <th>Salaire</th>
                    <th>Date d'enregistrement</th>
                    <th>Actions</th>
                </tr>
            </thead>
    ";

                if (mysqli_num_rows($res) < 1) {
                    $output .= "
            <tbody>
                <tr>
                    <td colSpan='8px'style='text-align:center' >No Job request.</td>
                </td>
            </tbody>
        ";
                }

                while ($row = mysqli_fetch_array($res)) {
                    $output .= "
        <tbody style='border:1px solid black'>
            <tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['noms'] . "</td>
                <td>" . $row['username'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['genre'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['salaire'] . "</td>
                <td>" . $row['data_reg'] . "</td>
                <td>
                    <a href='edit.php?id=" . $row['id'] . "'>
                        <button class='btn btn-info'><i class='fa fa-eye'></i> Voir le détail</button>
                    </a>       
                </td>
            </tr>
        </tbody>
    ";
                }

                $output .= "
    </table>
";

                echo $output;

                ?>
            </div>
        </div>
    </div>
</body>

</html>