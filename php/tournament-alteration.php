<?php
/**
 * File tournament-alteration.php
 * @author: Brandon Bires-Navel (brn5915@rit.edu)
 * Description: tournament-alteration contains the functions to move files around in the file system.
 * There are three operations: move, delete, edit (not implemented).
 * Move - takes the files from the current directory they are stored in and moves them the 'old'
 *  directory under 'tournaments'.
 * Delete - deletes the files outright
 * Edit (not implemented) - redirects to a page that has all the present tournament fields laid
 *  out and you can edit or complete elements and save the changes to the serialized file.
 * After the operation is complete it redirects the user back to the control panel (where they originally were)
 */

$path = '../tournaments/'.$_GET['name'];
echo $_GET['action'];
if (isset($_GET['action'])){
    switch ($_GET['action']){
        case 'move':
            move($path);
            break;
        case 'delete':
            delete($path);
            break;
        case 'edit':
            echo 'Editing now, sorry not sorry (tournament-alteration.php)';
            break;
    }
}

/**
 * move will take a file (most likely from 'pages') and will move it to the 'old' directory under 'tournaments'
 * @param $path - path of the file to be moved
 */
function move($path){
    echo $path;
    echo 'You\'re done now, go back to home!';
    $pathinfo = pathinfo($path);
    rename('../tournaments/'.$pathinfo['basename'], '../tournaments/old/'.$pathinfo['basename']);
    rename('../tournaments/pages/'.$pathinfo['filename'].'.php', '../tournaments/old/'.$pathinfo['filename'].'.php');
    echo '<script>t1 = window.setTimeout(function(){ window.location = "http://bl4de.servegame.com:25565/control.php"; },1);</script>';
}

/**
 * delete outright deletes the given file
 * @param $path - path of file to be deleted
 */
function delete($path){
    $pathParts = pathinfo($path);
    $firstFile = '../tournaments/'.$pathParts['filename'].'.txt';
    $secondFile = '../tournaments/pages/'.$pathParts['filename'].'.php';;

    unlink($firstFile);
    unlink($secondFile);

    echo $path,"\n";
    echo $firstFile,"\n";
    echo $secondFile,"\n";
    echo 'DELETED';
    echo 'You\'re done now, go back to home!';
    echo '<script>t1 = window.setTimeout(function(){ window.location = "http://bl4de.servegame.com:25565/control.php"; },1);</script>';
}

/**
 * edit redirects to a page that has all the present tournament fields laid
 * out and you can edit or complete elements and save the changes to the serialized file.
 */
function edit(){
    echo '<script>t1 = window.setTimeout(function(){ window.location = "http://bl4de.servegame.com:25565/control.php"; },1);</script>';
}


?>