<?php

$fromIds = [1, 3, 7, 4, 2, 6, 9, 5];
$toIds   = [3, 4, 3, 6, 6, 9, 5, null];

function findNetworkEndpoint($startNodeId, $fromIds, $toIds): int
{
    $toIdKey = array_search($startNodeId, $fromIds);
    if($toIdKey === false){
        throw new \Exception('StartNodeId '.$startNodeId.' cannot be found');
    }
    $nextNodeId = $toIds[$toIdKey];
    if($nextNodeId === null){
        return $startNodeId;
    }

    return findNetworkEndpoint($nextNodeId, $fromIds, $toIds);
}

echo findNetworkEndpoint(2, $fromIds, $toIds);