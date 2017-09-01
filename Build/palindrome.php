<?php

$palindrome = strlen('racecar');

if (isset($_POST['car_name'])){
    
    $car_name = $_POST['car_name'];
    $rev = '';
    
    if (!empty($car_name)){
        
        for ($i=$palindrome-1; $i>=0; $i--){
            
            $rev += $i;
            
        }
        
        echo $rev;
        
        if ($rev == $palindrome){
            
            echo 'string entered is a palindrome';
            
        } else {
            
            echo 'string entered is not a palindrome';
            
        }
    } else {
        
        echo 'Please enter in a car type.';
        
    }
    
    
} 

?>

<form action="palindrome.php" method="POST">
    Enter Car: <input type="text" name="car_name">
    <input type="submit" value="submit">
    
</form>