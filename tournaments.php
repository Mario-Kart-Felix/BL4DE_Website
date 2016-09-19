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
      <!-- Tournaments here -->
      <?php include ("php/tournament-generation.php") ?>
    </div>
  </div>
</div>
</body>
</html>