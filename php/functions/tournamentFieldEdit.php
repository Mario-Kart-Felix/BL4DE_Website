<?php
$fileName = str_replace(" ", "_", $_GET['name']);
$fileName = str_replace(".", "-", $fileName);
$fileName = str_replace(":", "_", $fileName);
echo $fileName."<br>";
$currentFile = fopen('../../tournaments/'.$fileName.'.txt', 'w');
$name = 'name|'.$_GET['name']."\n";
$dates = explode("\n", $_GET['date']);
$date = 'date';
foreach ($dates as $aDate){
    $date .= '|'.$aDate;
}
$date .= "\n";
$mapAndMode = explode(' ', $_GET['mapName']);
if (sizeof($mapAndMode) == 3){ # If the map name has two words
    $mapName = $mapAndMode[0].'_'.$mapAndMode[1];
    $mode = $mapAndMode[2];
} else {
    $mapName = $mapAndMode[0];
    $mode = $mapAndMode[1];
}
$mapAndStuff = 'mapandstuff|'.$mapName.'|'.$mode.
    '|'.$_GET['numOfPlayers'].'|'.$_GET['tier'].'|'.$_GET['tierLimit']."\n";
$teamLink = 'teamlink|'.$_GET['teamLink']."\n";
$wotScoutLink = 'wotscoutlink|'.$_GET['wotScoutLink'];
fwrite($currentFile, $name);
fwrite($currentFile, $date);
fwrite($currentFile, $mapAndStuff);
fwrite($currentFile, $teamLink);
fwrite($currentFile, $wotScoutLink);
echo "Got here, created file and dumped information. Close this page and return to tournament page.<br>";
$displayPageName = fopen('../tournaments/pages/'.$fileName.'.php', 'w');
$content = '<?php $thefile = \''.$fileName.'.txt\';
                  include(\'../../php/tournament-page-template.php\');
            ?>';
fwrite($displayPageName, $content);
echo '<script>t1 = window.setTimeout(function(){ window.location = "http://bl4de.servegame.com:25565/tournaments.php"; },1);</script>';
?>