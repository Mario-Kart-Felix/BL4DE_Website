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
            <h1 class="text-primary">Old Tournaments</h1>
            <?php
            $edit = 0;
            include ('php/functions/showOldTournaments.php');
            ?>
        </div>
    </div>
</div>
</body>
</html>