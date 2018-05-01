<?php

function fileLineToArray($filename)
{
	// Ouver le fichier (le @ empêche l'affichage des erreurs)
	$fp = @fopen($filename, 'r'); 

	// ajoute chaque ligne à un tableau
	if ($fp) {
	   $array = explode("\n", fread($fp, filesize($filename)));
	   return $array;
	}
}

function fileTo2DArray($filename)
{
    $linesArray = fileLineToArray($filename);
    $wordsArray = [];
    
    foreach ($lineArray as $line)
    {
        array_push($wordsArray, explode(" ", $line));
    }
    return $wordsArray;
}