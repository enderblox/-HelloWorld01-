<?php

$random=rand(1,100);
echo "$random";
$getal = 0;
while($random != $getal){

    $getal=readline("Geef je antwoord: ");

    if($random<$getal){
        echo "Fout geraden.\n";
    }

    if($random>$getal){
        echo "Fout geraden.\n";
    }

}


echo "Geraden, gefeliciteerd";

?>