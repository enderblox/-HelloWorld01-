<?php

$random=rand(1,100);
echo "$random";
$getal = 0;
$beurt = 1;

while($random != $getal){

    $getal=readline("Geef je antwoord: ");

    if($random!=$getal){
        echo "Fout geraden.\n";
        $beurt++;
    }


}


echo "Geraden, gefeliciteerd\n";
$final = $beurt++;
echo "Zo vaak moest je raden $final\n";
?>