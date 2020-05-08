<?php

function matchStrings($str){
    $ret = array();

    // --------------- NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE L’EXECUTION ------
    $matches = [];
    // (sh[^\Wsh]+sh) => will find all string that match sh[something that is a word AND NOT "sh]sh
    // by adding "?" at the end, we enforce the fact that a string may contain multiple times the subpattern. Ex: sh4shsh5sh will be split into sh4sh and sh5sh
    preg_match_all('/(sh[^\Wsh]+sh)?/', $str, $matches);
    // then we filter only not empty matches
    $ret = array_values(array_filter($matches[0], function($match){
        return !empty($match);
    }));
    // --------------- NE MODIFIEZ PAS LE CODE AU DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE L’EXECUTION ------

    return $ret;
}

$test = <<<MULTI
    xx xx sh1sh xx xx
    xx sh2sh xx xx xx
    xx sh**sh xx xx x
    xx xx sh3xxxsh xx
    xx sh4shsh5sh xxx
MULTI;

$matches = matchStrings($test);

print_r($matches);
