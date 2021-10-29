<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB Request</title>
</head>

<body style="background-color: #f0f0f0">

    <script src="../js/jquery.min.js"></script>

    <?php
    include("../include/header.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <?php include('sideNav.php') ?>
                </div>
                <div class="col-md-10" style='margin-top:60px'>
                    <h3>Job Request</h3>

                    <div id="show"></div>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
$(document).ready(function() {

    show();

    function show() {
        $.ajax({
            url: "ajax_job_request.php",
            method: "POST",
            success: function(data) {
                $('#show').html(data);
            }
        })
    }

});
</script>

</html>