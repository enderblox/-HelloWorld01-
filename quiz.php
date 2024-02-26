<?php

$random=rand(1,100);
$antwoord=readline("Geef je antwoord: ");
$getal=$antwoord;

if($random==$getal){
    echo "Jij hebt gewonnen!\n";
}

if($random<$getal){
    echo "Fout geraden.\n";
}

if($random>$getal){
    echo "Fout geraden.\n";
}
?>