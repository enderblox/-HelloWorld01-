<?php

$naam=readline("Geef je naam: ");
$leeftijd=readline("Geef je leeftijd: ");
$getal=21;

echo "Hello $naam \n";

if($leeftijd < $getal){
    echo "Jij bent jonger dan 21 jaar.\n";
}
if($leeftijd > $getal){
    echo "Jij bent ouder dan 21 jaar.\n";
}
if($leeftijd == $getal){
    echo "Jij bent precies 21 jaar.\n";
}


?>