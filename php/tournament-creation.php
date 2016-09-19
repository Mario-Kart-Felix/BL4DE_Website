<?php
$fileName = str_replace(" ", "_", $_GET['name']);
$fileName = str_replace(".", "-", $fileName);
$fileName = str_replace(":", "_", $fileName);
echo $fileName."<br>";
$currentFile = fopen('../tournaments/'.$fileName.'.txt', 'w');
$data = array(
    'name'=>$_GET['name'],
    'date'=>getDates(),
    'mapName'=>fixMapName(),
    'numOfPlayers'=>$_GET['numOfPlayers'],
    'tier'=>$_GET['tier'],
    'tierLimit'=>$_GET['tierLimit'],
    'teamLink'=>$_GET['teamLink'],
    'wotScoutLink'=>$_GET['wotScoutLink']
);

function getDates(){
    $dates = explode("\n", $_GET['date']);
    $data = array();
    foreach ($dates as $date){
        array_push($data, $date);
    }
    return $data;
}

function fixMapName(){
    $mapAndMode = explode(' ', $_GET['mapName']);
    $data = array();
    if (sizeof($mapAndMode) == 3){ # If the map name has two words
        $mapName = $mapAndMode[0].'_'.$mapAndMode[1];
        $mode = $mapAndMode[2];
        array_push($data, $mapName, $mode);
    } else {
        $mapName = $mapAndMode[0];
        $mode = $mapAndMode[1];
        array_push($data, $mapName, $mode);
    }
    return $data;
}

fwrite($currentFile, serialize($data));
echo "Got here, created file and dumped information. Close this page and return to tournament page.<br>";
$displayPageName = fopen('../tournaments/pages/'.$fileName.'.php', 'w');
$content = '<?php $thefile = \''.$fileName.'.txt\';
                  include(\'../../php/tournament-page-template.php\');
            ?>';
fwrite($displayPageName, $content);
echo '<script>t1 = window.setTimeout(function(){ window.location = "http://bl4de.servegame.com:25565/tournaments.php"; },1);</script>';
?>