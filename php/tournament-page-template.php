<?php

echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>';
include 'head.php';
//include("C:\Users\MOUTH Box\Dropbox\College\Programming\Websites\BL4DE\php\head.php");
include 'menu.php';
echo'</head>
    <body>
        <div id="wrapper">
            <!--Sidebar-->';

//include("C:\Users\MOUTH Box\Dropbox\College\Programming\Websites\BL4DE\php\menu.php");
echo '    
            <!--Main content-->
            <div id="page-content-wrapper">
                <div class="container-fluid">';

//Tournament specific content
include ('C:\Users\MOUTH Box\Dropbox\College\Programming\Websites\BL4DE\php\functions\generateTournament.php');
$path = '../';
generateTournament($thefile, $path);




echo '          
                </div>
            </div>
        </div>
    </body>
    </html>';

?>