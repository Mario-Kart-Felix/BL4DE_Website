<?php
$path = 'C:\Users\MOUTH Box\Dropbox\College\Programming\Websites\BL4DE\tournaments\old';
$files = array_diff(scandir($path), array('.', '..', 'old'));
foreach ($files as $file){
    $pathParts = pathinfo($file);
    if (strcmp($pathParts['extension'], 'php')){
        if ($edit == 1) {
            echo '<div>
                  <form method="get" action="/php/tournament-alteration.php">
                      <h3>'.$file.'</h3>
                      <div class="text-left">                     
                        <button class="btn btn-primary" type="submit" name="action" value="edit"><span class="glyphicon glyphicon-pencil" style="padding-right: 10px"></span>Edit</button>                                          
                        <button class="btn btn-primary" type="submit" name="action" value="move"><span class="glyphicon glyphicon-erase" style="padding-right: 10px"></span>Move</button>                                     
                        <button class="btn btn-danger" type="submit" name="action" value="delete"><span class="glyphicon glyphicon-remove" style="padding-right: 10px"></span>Delete</button>
                        <input type="text" name="name" value="' . $file . '" style="visibility: hidden;"/>
                      </div>
                  </form>
              </div>';
        } else {
            $path = 'C:\Users\MOUTH Box\Dropbox\College\Programming\Websites\BL4DE\tournaments\old';
            $data = $pathParts['filename'].'.txt';
            include ('C:\Users\MOUTH Box\Dropbox\College\Programming\Websites\BL4DE\php\functions\generateTournament.php');
            generateTournament($data, $path);
        }

    }
}

?>