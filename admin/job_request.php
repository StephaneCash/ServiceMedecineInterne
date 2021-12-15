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

<style>
body {
    font-family: Segoe UI;
}
</style>

<body style="background-color: #f0f0f0">

    <script src="../js/jquery.min.js"></script>

    <?php
    include("../include/header.php");
    ?>

    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-top: 56px; margin-left: -30px">
                    <?php include('sideNav.php') ?>
                </div>
                <div class="col-md-10" style='margin-top:57px'>
                    <h3>Confirmation compte</h3>

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

    $(document).on('click', '.rejA', function() {

        let id = $(this).attr("id");

        $.ajax({
            url: "ajax_approve.php",
            method: "POST",
            data: {
                id: id
            },
            success: function(data) {
                show();
            }
        })
    })

    $(document).on('click', '.reject', function() {

        let id = $(this).attr("id");

        $.ajax({
            url: "ajax_reject.php",
            method: "POST",
            data: {
                id: id
            },
            success: function(data) {
                show();
            }
        })
    })

});
</script>

</html>