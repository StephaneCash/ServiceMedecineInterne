<?php
include('../include/connexionDB.php');

$query = "SELECT * FROM doctors WHERE status='En attente' ORDER BY data_reg ASC ";

$res = mysqli_query($connect, $query);

$output = "";

$output .= "
        <table class='table table-bordered'>
            <thead style='background-color:#3a3a3a; color:silver'>
                <tr>
                    <th>#</th>
                    <th>Noms</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Genre</th>
                    <th>Téléphone</th>
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
                <td>" . $row['data_reg'] . "</td>
                <td>
                    <div class='col-md-12'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <button id='" . $row['id'] . "' class='btn btn-success approve'>Approuver</button>
                            </div>
                            <div class='col-md-6'>
                                <button id='" . $row['id'] . "' class='btn btn-danger reject'>Rejeter</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    ";
}

$output .= "
    </table>
";

echo $output;