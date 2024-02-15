<?php

$naam=readline("Geef je naam: ");
$leeftijd=readline("Geef je leeftijd: ");

echo "Hello $naam \n";

if($leeftijd < 21){
    echo "Jij bent jonger dan 21 jaar.\n";
}
if($leeftijd > 21){
    echo "Jij bent ouder dan 21 jaar.\n";
}
if($leeftijd == 21){
    echo "Jij bent precies 21 jaar.\n";
}


?>