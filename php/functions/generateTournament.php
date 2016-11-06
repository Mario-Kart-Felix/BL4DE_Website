<?php
/**
 * File: generateTournament.php
 * @author: Brandon Bires-Navel (brn5915@rit.edu)
 */

/**
 * generateTournament creates an html div element that contains all pertaining information related to a
 * given tournament listing
 * @param file - name of the text file with the information
 * @param path - path of the text file with the information
 */
function generateTournament($file, $path){
    //Init stuff here v
    $dom = new DOMDocument('1.0', 'uft-8');
    $div = $dom->createElement('div');
    $divAttr = $dom->createAttribute('class');
    $divAttr->value = 'row well';
    $div->appendChild($divAttr);
    $div2 = $dom->createElement('div');
    $div2Attr = $dom->createAttribute('class');
    $div2Attr->value = 'col-lg-6';
    $div2->appendChild($div2Attr);
    $readFile = fopen($path.'\\'.$file, 'r');

    //Un-serialize
    $data = unserialize(fgets($readFile));
    print_r($data);

    //Create the name of the tournament and have it link to the associated php file
    $element = $dom->createElement('h1');
    $elementAttr = $dom->createAttribute('class');
    $elementAttr->value = 'text-primary';
    $a = $dom->createElement('a', $data['name']);
    $aAttr2 = $dom->createAttribute('href');
    $aAttr2->value = '/tournaments/pages/'.substr($file, 0, sizeof($file) - 5).'.php';
    $element->appendChild($elementAttr);
    $a->appendChild($aAttr2);
    $element->appendChild($a);
    $div2->appendChild($element);

    //Iteratively read the dates and add them to the current div element
    for ($i = 0; $i < sizeof($data['date']); $i++){
        $element = $dom->createElement('h4', $data['date'][$i]);
        $div2->appendChild($element);
    }

    //Break down the information being displayed and format it
    $element = $dom->createElement('h4', str_replace("_", " ", $data['mapName'][0]).' '.$data['mapName'][1].' '.$data['numOfPlayers']
        .'v'. $data['numOfPlayers'].' T'.$data['tier'].' ('.$data['tierLimit'].' max tier points)');
    $div2->appendChild($element);

    //Take the given link and display it, if the text is '...' it does not link anywhere
    $a = $dom->createElement('a', $data['teamLink']);
    $aAttr = $dom->createAttribute('href');
    if ($data['teamLink'] == '...'){
        $aAttr->value = '#';
    } else {
        $aAttr->value = $data['teamLink'];
        $aAttr2 = $dom->createAttribute('target');
        $aAttr2->value = '_blank';
        $a->appendChild($aAttr2);
    }
    $a->appendChild($aAttr);
    $element = $dom->createElement('h4', 'Team: ');
    $element->appendChild($a);

    $div2->appendChild($element);

    //Take the given link and display it, if the text is '...' it does not link anywhere
    $a = $dom->createElement('a', $data['wotScoutLink']);
    $aAttr = $dom->createAttribute('href');
    if ($data['wotScoutLink'] == '...'){
        $aAttr->value = '#';
    } else {
        $aAttr->value = $data['wotScoutLink'];
        $aAttr2 = $dom->createAttribute('target');
        $aAttr2->value = '_blank';
        $a->appendChild($aAttr2);
    }
    $a->appendChild($aAttr);
    $element = $dom->createElement('h4', 'WoT Scout: ');
    $element->appendChild($a);

    $div2->appendChild($element);

    //Appending a bunch of elements to the main div element

    $div->appendChild($div2);

    $div3 = $dom->createElement('div');
    $div3Attr = $dom->createAttribute('class');
    $div3Attr->value = 'col-lg-6 text-center';

    $img = $dom->createElement('img');
    $imgAttr = $dom->createAttribute('src');

    //Adding the corresponding map image
    $imgAttr->value = '/images/wotmaps/'.$data['mapName'][0].'.png';
    $imgAttr2 = $dom->createAttribute('class');
    $imgAttr2->value = 'img-responsive img-rounded center-block';

    $img->appendChild($imgAttr);
    $img->appendChild($imgAttr2);

    $div3->appendChild($img);

    $div->appendChild($div3);
    $dom->appendChild($div);

    //Displaying the above work
    echo $dom->saveHTML();
}
?>