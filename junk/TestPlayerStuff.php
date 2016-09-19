<?php
$file = file_get_contents('players.txt');
$players = explode("\n", $file);
include ('../php/functions/getRecentWN8.php');
foreach ($players as $player){
    //echo '$'.$player.'$<br>';
    $fixedPlayer = trim(preg_replace('/\s\s+/', ' ', $player));
    $wn8 = getRecentWN8($fixedPlayer);
    echo 'Recent WN8 for '.$player.': '.$wn8.'<br>';
}