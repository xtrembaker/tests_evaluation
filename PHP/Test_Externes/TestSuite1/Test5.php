<?php

function getCallbackFunction($replaceString) {
    $invokecount = 0;
    // remplacez la valeur de la variable $anonfunction
    // par une autre fonction anonyme
    $anonfunction = function() {};

    // cette fonction anonyme doit se terminer par:
    //
    // return "$replaceString $invokecount";
    //
    // où $replaceString contient la valeur du paramètre passé à getCallbackFunction()
    // et $invokecount est incrémenté de 1 à chaque fois que la fonction anonyme est appelée.

    // --------------- NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE L’EXECUTION ------

    $anonfunction = function()use($replaceString, &$invokecount){
        $invokecount++;
        return "{$replaceString} $invokecount";
    };

    // --------------- NE MODIFIEZ PAS LE CODE AU DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE L’EXECUTION ------

    return $anonfunction;
}

$text = <<<MULTI
[item] firstly
[item] secondly
[item] thirdly
MULTI;

$text = preg_replace_callback("/\[item\]/", getCallbackFunction("Qu"), $text);

// La variable $test devrait maintenant contenir:
// Qu 1 firstly
// Qu 2 secondly
// Qu 3 thirdly

print_r($text);