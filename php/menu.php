<?php
/*
 * File: menu.php
 * @author: Brandon Bires-Navel (brn5915@rit.edu)
 * Description: Generates the menu bar located on the left. Reads the tournaments that are
 * active in the /tournaments folder.
 */

echo '<div id="sidebar-wrapper">';
echo '<ul class="sidebar-nav">';
echo '<li><a href="/index.php"><img src="/images/emblem_24x24.png"></a></li>';
echo '<li><a href="/home.php">Home</a></li>';
echo '<li><a href="/tournaments.php">Tournaments</a><ul>';
$path = 'C:\Users\MOUTH Box\Dropbox\College\Programming\Websites\BL4DE\tournaments\pages';
$files = array_diff(scandir($path), array('.', '..', 'old', 'pages'));
foreach ($files as $file) {
    echo '<li><a href="/tournaments/pages/'.$file.'">'.getName($file).'</a></li>';
}
echo '<li><a href="/old.php">Old Tournaments</a></li>';
echo'    </ul></li>';
echo '<li><a href="/events.php">Events</a></li>';
echo '<li><a href="/about.php">About</a></li>';
echo '</ul>';
echo '</div>';

/**
 * getName takes a file that contains a serialized element and pulls the name of the tournament
 * @param $file - file containing information about the given tournament
 * @return mixed - the name of a tournament
 */
function getName($file){
    $displayName = substr($file, 0, sizeof($file) - 5).'.txt';

    $target = fopen($_SERVER['DOCUMENT_ROOT'].'/tournaments/'.$displayName, 'r');
    $line = fgets($target);
    $data = unserialize($line); # Access data from the file that is serialized

    return $data['name'];
}
?>
