<?php

$path = getcwd().DIRECTORY_SEPARATOR."file1.txt";

echo $path."\n";

$lines = [];

// --------------- NE MODIFIEZ PAS LE CODE AU DESSUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE L’EXECUTION ------

$handle = fopen($path, 'rb');
$i=0;
while(! feof($handle)){
    $lines[$i] =  fgets($handle);
    $lines[$i] = explode(' ', $lines[$i]);
    $lines[$i][0] = strtoupper($lines[$i][0]);
    $lines[$i] = implode(' ', $lines[$i]);
    $i++;
}

fclose($handle);

// --------------- NE MODIFIEZ PAS LE CODE AU DESSOUS DE CETTE LIGNE, IL SERA REINITIALISE LORS DE L’EXECUTION ------
foreach($lines as $theline)
{
    echo $theline."<br>";
}

