<?php
/**
 * What would be the value of $a and $b at the end of the program ?
 */

function doSomething( &$arg ){
    $return = $arg;
    $arg += 1;
    return $return;
}
$a = 3;
$b = doSomething( $a );
