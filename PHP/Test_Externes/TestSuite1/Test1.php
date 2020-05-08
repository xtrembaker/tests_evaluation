<?php

function iterateNumber(){
    // --------------- NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE L’EXECUTION ------
    static $mynum = 0;
    $mynum++;
    // --------------- NE MODIFIEZ PAS LE CODE AU DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE L’EXECUTION ------
    return $mynum;
}

$testnum = 0;
for($x=0;$x<10;$x++){
    $testnum = iterateNumber();
}

echo $testnum;