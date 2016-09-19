<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BL4DE Gaming</title>
    <meta name="author" content="Brandon Bires-Navel">
    <link rel="icon" href="../images/emblem_24x24.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js">

    <!-- jQuery Library -->
    <script src="../js/jquery-3.0.0.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <!--Sidebar-->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li><a href="../index.php"><img src="../images/emblem_24x24.png"></a></li>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../tournaments.php">Tournaments</a></li>
            <li><a href="../about.php">About</a></li>
        </ul>
    </div>
    <script>
        $(document).ready(function () {
            var div = document.createElement("div");
            var name = document.createElement("h1");
            var date = document.createElement("h4");
            var mapAndMore = document.createElement("h4");
            var team = document.createElement("h4");
            var wotScout = document.createElement("h4");
            var teamLink = document.createElement("a");
            var wotScoutLink = document.createElement("a");

            $(div).addClass("well");
            $(name).addClass("text-primary");

            $(name).text("Stand-To 6.25.16");
            $(date).text("June 25 @ 7 PM Est");
            $(mapAndMore).text("Himmelsdorf Encounter 3v3 T8 (23 max tier points)");
            $(team).text("Team: ");
            $(wotScout).text("WoT Scout: ");

            $(teamLink).attr("href", "#");
            $(wotScoutLink).attr("href", "#");

            $(teamLink).html("...");
            $(wotScoutLink).html("...");

            $(name).appendTo(div);
            $(date).appendTo(div);
            $(mapAndMore).appendTo(div);
            $(teamLink).appendTo(team);
            $(team).appendTo(div);
            $(wotScoutLink).appendTo(wotScout);
            $(wotScout).appendTo(div);

            $(div).appendTo("#target");
            })
    </script>

    <!--Main content-->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div id="target">
                        <!-- Tournaments here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>