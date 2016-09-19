<?php
include ('C:\Users\MOUTH Box\Dropbox\College\Programming\Websites\BL4DE\php\functions\generateTournament.php');
$path = 'C:\Users\MOUTH Box\Dropbox\College\Programming\Websites\BL4DE\tournaments';
//$path = '/Users/Brandon/Dropbox/College/Programming/Websites/BL4DE/tournaments';
$files = array_diff(scandir($path), array('.', '..', 'old', 'pages', '.DS_Store'));
if (sizeof($files) != 0){
    foreach ($files as $file) {
        generateTournament($file, $path);
    }
} else {
    echo '<div class="well text-centered">
            <h1 class="text-primary">What the fuck Cahyag, why aren\'t there any tournaments planned?</h1>
          </div>';
}
?>