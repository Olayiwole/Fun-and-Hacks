<?php
/**
 * Created by PhpStorm.
 * User: OLAYIWOLE
 * Date: 31/08/2017
 * Time: 10:16
 * A fuzzBuzz program
 */

$maxNumber = 100; // initializing param @var maxNumber

for ($i=1; $i<= $maxNumber; $i++) // for this condition
{
    if ($i % 3 === 0 || $i % 5 === 0) // checks if and only if conditions are valid
        printf('%d fuzz <br>', $i); // echo's fuzz if and only if the conditions are meet

    else printf('%d buzz <br>', $i); // echo's buzz if otherwise
} // end for