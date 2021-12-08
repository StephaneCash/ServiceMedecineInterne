<?php
include('../include/connexionDB.php');

$query = "SELECT * FROM doctors WHERE status='En attente' ORDER BY data_reg ASC ";

$res = mysqli_query($connect, $query);

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
                <td>" . $row[' id_doctor'] . "</td>
                <td>" . $row['noms'] . "</td>
                <td>" . $row['username'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['genre'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['data_reg'] . "</td>
                <td>
                    <button id='" . $row[' id_doctor'] . "' class='btn btn-success approve'><i class='fa fa-check'></i> Approuver</button>
                            
                    <button id='" . $row[' id_doctor'] . "' class='btn btn-danger reject'> <i class='fa fa-close'></i> Rejeter</button>        
                </td>
            </tr>
        </tbody>
    ";
}

$output .= "
    </table>
";

echo $output;