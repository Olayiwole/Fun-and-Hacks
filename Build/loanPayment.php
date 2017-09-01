<?php
/**
 * Created by IntelliJ IDEA.
 * User: OLAYIWOLE
 * Date: 02/08/2017
 * Time: 00:39
 * The loan payment Table
 */

include 'loanPaymentTable.php';

// Loan balance
$balance = 15000.00;

// Term length of the loan, in months
$termLength = 3;

// Number of payment per month
$paymentPerMonth = 1;

// Payment iteration
$paymentIteration = 1;

// Determine total payment
$totalPayment = $termLength * $paymentPerMonth;

// Determine the periodic payment
$periodicPayment = $balance / $termLength;

// Round the periodic payment to two decimals
$periodicPayment = round($periodicPayment, 2);

// Create table
echo "<table width='50%' align='center' border='1'>";
echo '<tr>
    <th>Payment Number</th><th>Balance</th>
    <th>Payment</th><th>Principal</th>
</tr>';

// Call recursive function
loanPaymentTable($paymentNumber, $periodicPayment, $balance);

// Close table
echo '</table>';