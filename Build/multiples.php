<?php
/**
 * Created by PhpStorm.
 * User: OLAYIWOLE
 * Date: 06/02/2016
 * Time: 10:16
 * A multiples program
 */

$t = 0; // initialized param @var t
$d = 0; // initialized param @var d

$maxNumber = 1000; // initialize param @var maximum number

for ($i = 0; $i < $maxNumber; $i++)  // for this condition
{
    if ($i % 3 === 0 OR $i % 5 === 0) // if and only if this condition is valid
        $t += $i; // add var i to t
        $d += $i; // add var i to d
} // end for
$sum = $t + $d; // sum of t and d

printf('The sum of the multiples of 3 = %d <br>', $t); // multiples of 3
printf('The sum of the multiples of 5 = %d <br>' , $d); // multiples of 5
printf(' The sum of both multiples = %d', $sum); // total sum of both multiples



