<?php
/**
 * Created by IntelliJ IDEA.
 * User: OLAYIWOLE
 * Date: 02/08/2017
 * Time: 00:06
 * A recursive program that pays back a loan over the duration of 3 months
 */

function loanPaymentTable ($pNum, $periodicPayment, $balance)
{
    
    // Calculate payment principle
    /** @var integer $paymentPrincipal */
    $paymentPrincipal = round($periodicPayment, 2); // calculates the payment principal and rounds it to two decimal places
    
    // deduct principal from remaining balance
    $newBalance = round($balance - $paymentPrincipal, 2); // balance gotten after the principal as been deducted from the initial balance
    
    // if the new balance < monthly payment, set to zero
    if ($newBalance < $paymentPrincipal)
    {
        $newBalance = 0;
    }

    printf('<tr><td>%d</td>', $pNum);
    printf("<td>$%s</td>", number_format($newBalance, 2));
    printf("<td>$%s</td>", number_format($periodicPayment, 2));
    printf("<td>$%s</td>", number_format($paymentPrincipal, 2));

    // if the balance not yet zero, recursively call the function loanPaymentTable

    if ($newBalance > 0)
    {
        $pNum++; 
        loanPaymentTable($pNum, $periodicPayment,
            $newBalance);
    }else {
        return 0;
    } // end else
} // end function loanPaymentTable


