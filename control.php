<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("php/head.php") ?>
</head>
<body>
<div id="wrapper">
    <!--Sidebar-->
    <?php include("php/menu.php") ?>
    <!--Main content-->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row well">
                <div class="col-lg-6">
                    <h1 class="text-primary">Current Tournaments:</h1>
                    <?php include ('php/tournament-queries.php') ?>
                    <br>
                    <a href="createtournament.php"><button type="button" class="btn btn-primary">Create Tournament</button></a>
                </div>
                <div class="col-lg-6">
                    <h1 class="text-primary">Old Tournaments</h1>
                    <?php
                    $edit = 1;
                    include ('php/functions/showOldTournaments.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>