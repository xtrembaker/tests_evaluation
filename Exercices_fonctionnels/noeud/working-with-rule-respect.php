<?php

$fromIds = [1, 3, 7, 4, 2, 6, 9, 5];
$toIds   = [3, 4, 3, 6, 6, 9, 5, null];

function findNextNodeId($startNodeId, $fromIds, $toIds){
    $toIdKey = array_search($startNodeId, $fromIds);
    if($toIdKey === false){
        throw new \Exception('StartNodeId '.$startNodeId.' cannot be found');
    }
    return $toIds[$toIdKey];
}

function findNetworkEndpoint($startNodeId, $fromIds, $toIds): int
{
    $nextNodeId = findNextNodeId($startNodeId, $fromIds, $toIds);

    while($nextNodeId !== null){
        $startNodeId = $nextNodeId;
        $nextNodeId = findNextNodeId($startNodeId, $fromIds, $toIds);
    }
    return $startNodeId;
}

echo findNetworkEndpoint(6, $fromIds, $toIds);