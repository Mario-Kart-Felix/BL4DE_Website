<?php
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

function move($path){
    echo $path;
    echo 'You\'re done now, go back to home!';
    $pathinfo = pathinfo($path);
    rename('../tournaments/'.$pathinfo['basename'], '../tournaments/old/'.$pathinfo['basename']);
    rename('../tournaments/pages/'.$pathinfo['filename'].'.php', '../tournaments/old/'.$pathinfo['filename'].'.php');
    echo '<script>t1 = window.setTimeout(function(){ window.location = "http://bl4de.servegame.com:25565/control.php"; },1);</script>';
}

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

function edit(){
    echo '<script>t1 = window.setTimeout(function(){ window.location = "http://bl4de.servegame.com:25565/control.php"; },1);</script>';
}


?>