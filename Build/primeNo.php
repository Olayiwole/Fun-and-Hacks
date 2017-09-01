<?php
/**
 * Created by PhpStorm.
 * User: OLAYIWOLE
 * Date: 07/08/2017
 * Time: 02:50
 */

$number = 2;

while ($number < 100) // while this statement holds true
{
    $div_count = 0; // initialized division counter

    for ($i=1; $i <= $number; $i++) // for this condition
    {
        if (($number % $i) === 0) // check if this condition is valid
        {
           $div_count++; // increment the division counter
        } // end if statement
    } // end for
    if ($div_count < 3) // if and only if the div_count is < 3
    {
        echo $number.','; // echo var number
    } // end if statement
    $number++; // increment number
} // while
