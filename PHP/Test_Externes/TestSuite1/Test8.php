<?php

date_default_timezone_set("Europe/London");

function getPrettyDates($timestamp=null){
    $dates = [];

    // --------------- NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE L’EXECUTION ------
    if($timestamp){
        $dates[] = (new \DateTime())->setTimestamp($timestamp);
    }else{
        $dates[] = (new \DateTime());
    }

    for($i = 1; $i<=6; $i++){
        $newDate = clone $dates[$i-1];
        $dates[] = $newDate->modify('-1 year');
    }

    // --------------- NE MODIFIEZ PAS LE CODE AU DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE L’EXECUTION ------
    return array_map(function($date){
        return $date->format('H:i:s A \o\\n l d M, Y');
    }, $dates);
}

// now
//print_r(getPrettyDates());

//
print_r(getPrettyDates(mktime(01, 0, 0, 12, 25, 2012)));