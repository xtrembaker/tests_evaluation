<?php

$fromIds = [1, 7, 3, 4, 2, 6, 9];
$toIds = [3, 3, 4, 6, 6, 9, 5];

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