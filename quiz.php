<?php

$random=rand(1,100);
$getal=$random;
$antwoord=readline("Geef je antwoord: ");

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