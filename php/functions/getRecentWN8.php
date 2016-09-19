<?php
include 'C:\Users\MOUTH Box\Dropbox\College\Programming\Websites\BL4DE\php\simple_html_dom.php';
//getRecentWN8('TheCahyag');
//getRecentWN8('Elysium201');
//getRecentWN8('spudler');
function getRecentWN8($name){
    //echo 'Doing stuff with '.$name.'<br>';
    $html = new simple_html_dom();
    $html->load_file('http://www.noobmeter.com/player/na/'.$name);
    $ret = $html->find('tr');
    preg_match("/<span title=\"(.*)\">/", $ret[6], $data);
    //echo '<br>';
    //echo $data[0].'<br>';
    $wn8 = explode('(', $data[0]);
    $temp = explode(')', $wn8[2]);
    $recentWN8 = $temp[1];
    //echo 'Recent WN8 for '.$name.': '.$recentWN8.'<br>';
    return $recentWN8;
}