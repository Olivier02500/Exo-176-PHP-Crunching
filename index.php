<?php


//Combien de mots contient ce dictionnaire ?
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
$numWord = count($dico);
echo "<p> $numWord </p>";


//Combien de mots font exactement 15 caractères ?
$goodSize = [];
foreach ($dico as $word => $value) {
    if (strlen($value) === 13) {
        array_push($goodSize, [$value]);
    }
}
echo array_key_last($goodSize);

//Combien de mots contiennent la lettre « w » ?
$size = 0;
foreach ($dico as $word => $value) {
    if (stristr($value , 'w')){
        $size++;
    }
}
echo "<p> $size </p>";

//Combien de mots finissent par la lettre « q » ?
$lastQ = 0;
foreach ($dico as $word => $value) {
    if (strpos($value , 'q')){
        $lastQ++;
    }
}
echo "<p> $lastQ </p>";

//les films
$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films