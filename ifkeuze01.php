<?php

$naam=readline("Geef je naam: ");
$leeftijd=readline("Geef je leeftijd: ");

echo "Hello $naam \n";

if($leeftijd < 25){
    echo "Jij bent jonger dan 25 jaar.\n";
}
if($leeftijd > 25){
    echo "Jij bent ouder dan 25 jaar.\n";
}
if($leeftijd == 25){
    echo "Jij bent precies 25 jaar.\n";
}


?>