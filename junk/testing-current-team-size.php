<?php
//$page = file_get_contents('http://worldoftanks.com/en/tournaments/1000000287/team/1000070890/');
//preg_match("/<span data-bind=\"text: playersCount\">.*span>/", $page, $currentPlayers);
//preg_match("/<span data-bind=\"text: playersCount\">*span>/", $page, $totalPlayers);
//print_r($currentPlayers[0]."\n");
echo "running<br>";
//echo $page;
//echo $totalPlayers[0];
include "../php/simple_html_dom.php";

$html = new simple_html_dom();
$html->load_file('http://gosutactics.com/tournamentTeam433-85943-bl4de/');

$ret = $html->find('a');
foreach ($ret as $item) {
    $dom = new DOMDocument('1.0', 'UTF-8');
    //$element = new DOMElement($item[1], $item[3:(strlen($item)-2)])
    $dom->loadHTML($item);
    foreach ($a as $element) {



    }

}




//
//preg_match("/<span class=\"tournament-heading_small\">.*span>/", $html, $currentPlayers);
//
//foreach ($currentPlayers as $num){
//    echo $num.'<br>';
//}

