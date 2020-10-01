<?php

$links = [
    1 => 3,
    7 => 3,
    3 => 4,
    4 => 6,
    2 => 6,
    6 => 9,
    9 => 5
];

$fromIds = array_keys($links);
$toIds = array_values($links);

function findNetworkEndpoint($startNodeId, $fromIds, $toIds): int
{
    foreach($toIds as $toId){
        if(!in_array($toId, $fromIds)){
            return $toId;
        }
    }
}

// 5
echo findNetworkEndpoint(1, $fromIds, $toIds);