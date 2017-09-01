<?php
/**
 * Created by IntelliJ IDEA.
 * User: OLAYIWOLE
 * Date: 31/07/2017
 * Time: 03:57
 * A program that detects primers and non-primers in an array
 */

$primers = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47); // array of @var primers

for ($count = 1; $count++; $count < 1000) // for this condition
{
    $randomNumber = mt_rand(1, 50); // range of @var random numbers

    /** @noinspection TypeUnsafeArraySearchInspection */
    if (in_array($randomNumber,
        $primers)) // check if and only if in array there is a primer amongst the @var random number
    {
        printf('Prime number found: %d <br>', $randomNumber); // print result if valid
        break; // break out
    } else {

        printf('Non-prime number found: %d <br>', $randomNumber); // if not valid print this result
    } // end if statement
} // end for