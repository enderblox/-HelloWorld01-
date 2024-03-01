<?php

$random=rand(1,100);
$getal = 0;
$beurt = 1;

while($random != $getal){

    $getal=readline("Geef je antwoord: ");

    if($getal<1|| $getal>100|| $getal=="stop"){
        echo "Dit is niet geldig, het spel stopt\n";
        break;
    }

    if($random!=$getal){
        echo "Fout geraden.\n";
        if($getal<$random){
           echo "Het getal is hoger.\n";
        } else {
            echo "Het getal is lager.\n";
        }
        $beurt++;
    }

    if($getal==$random){
        echo "Geraden, gefeliciteerd\n";
    $final = $beurt++;
    echo "Zo vaak moest je raden $final\n";
    break;
    }

}




?>