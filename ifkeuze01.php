<?php

$naam=readline("Geef je naam: ");
$leeftijd=readline("Geef je leeftijd: ");

echo "Hello $naam \n";

if($leeftijd < 22){
    echo "Jij bent jonger dan 22 jaar.\n";
}
if($leeftijd > 22){
    echo "Jij bent ouder dan 22 jaar.\n";
}
if($leeftijd == 22){
    echo "Jij bent precies 22 jaar.\n";
}


?>