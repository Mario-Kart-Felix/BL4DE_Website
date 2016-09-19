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
                <div class="col-lg-3">
                    <h2>Column 1</h2>
                    <form action="php/tournament-creation.php" method="get">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name"/>
                        <label for="date">Dates:</label>
                        <textarea rows="3" class="form-control" id="date" name="date"></textarea>
                        <label for="mapName">Map Name: DO NOT FORGET THE GAMEMODE</label>
                        <input type="text" class="form-control" id="mapName" name="mapName"/>
                        <label for="numOfPlayers">Number of Players:</label>
                        <input type="text" class="form-control" id="numOfPlayers" name="numOfPlayers"/>
                        <label for="tier">Tier Limit:</label>
                        <input type="text" class="form-control" id="tier" name="tier"/>
                        <label for="tierLimit">Total Tier Points:</label>
                        <input type="text" class="form-control" id="tierLimit" name="tierLimit"/>
                        <label for="teamLink">Team Link:</label>
                        <input type="text" class="form-control" id="teamLink" name="teamLink"/>
                        <label for="wotScoutLink">WoT Scout Link:</label>
                        <input type="text" class="form-control" id="wotScoutLink" name="wotScoutLink"/>
                        <div class="text-center" style="padding-top: 10px">
                            <button type="submit" class="btn btn-primary">Create Tournament</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <h2>Column 2</h2>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>