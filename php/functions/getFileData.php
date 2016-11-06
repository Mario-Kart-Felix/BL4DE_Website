<?php
/**
 * File: getFileData.php
 * @author: Brandon Bires-Navel (brn5915@rit.edu)
 */

// Tests --

getFileData('Weekly_5v5_August_8_-_12.txt', 'C:\Users\brand\Dropbox\College\Programming\Websites\BL4DE\tournaments');

// -- Tests
/**
 * getFileData takes the name of a file and stores the data from the
 * file as variables to be used in editing the file. The information
 * is displayed on html forms. When done the new information is written
 * over the old data on that given file.
 * @param file - name of the text file with the information
 * @param path - path of the text file with the information
 */
function getFileData($file, $path){
    //Init variables that will hold data
    $name = ''; # Name of the tournament
    $dates = ''; # Dates of the tournament
    $mapName = ''; # Map name with the gamemode
    $numPlayers = ''; # Number of players on the team
    $tierLimit = ''; # Tier Limit
    $totalTierPoints = ''; # Total tier points
    $teamLink = ''; # Link to the team
    $wotScoutLink = ''; # Link to the gosustatistic (usally)
    // End useful data

    $readFile = fopen($path.'\\'.$file, 'r');
    while ($line = fgets($readFile)){
        $words = explode('|', $line); # Split each line into an array, breaking it on the '|'s
        switch ($words[0]){
            case 'name':
                $name = $words[1];
                break;
            case 'date':
                foreach ($words as $word){
                    echo $word."<br>";
                }
                break;
            case 'mapandstuff':
                
                break;
            case 'teamlink':
                break;
            case 'wotscoutlink':
                break;
            default:
                echo 'ERROR - Case has not been specified (generateTournament.php)<br/>';
                break;
        }
    }
}
?>