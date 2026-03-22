<?php declare(strict_types=1);
require dirname(__FILE__) . '/debug.inc.php';

$data = range(1, 10);

/*
 * Checks if value is odd.
 * 
 * @param int $value Value
 *                   
 * @return int Result
 */
function is_odd(int $value) : int
{
    return ($value % 2);
}

var_dump(array_filter($data, 'is_odd'));
sort($data);
var_dump($data);