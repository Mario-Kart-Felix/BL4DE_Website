<?php
/**
 * File: getRecentWN8.php
 * @author: Brandon Bires-Navel (brn5915@rit.edu)
 */

include 'C:\Users\MOUTH Box\Dropbox\College\Programming\Websites\BL4DE_Website\php\simple_html_dom.php';

// Tests --

//getRecentWN8('TheCahyag');
//getRecentWN8('Elysium201');
//getRecentWN8('spudler');

// -- Tests

/**
 * getRecentWN8 takes the name of a player and will parse an HTML file
 * to find the WN8 value associated with the player. 'noobmeter.com' is
 * a web site that tracks the statistics of players, one of those numbers
 * is the player's WN8 value, this represents the general skill level of
 * the player (0 - 3000). It can go higher then 3000, but beyond that is
 *
 * @param $name - name of player
 * @return mixed - (int) WN8 value associated with the player
 */
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