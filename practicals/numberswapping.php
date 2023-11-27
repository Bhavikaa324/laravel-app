<?php
// Getting 2 numbers from user
$number1 = (int) readline("Enter 1st number:");
$number2 = (int) readline("Enter 2nd number:");

$n1 = 2;
$n2 = 3;
// Displaying Numbers Before Swapping
echo "Before Swapping \n";
echo "Number 1 = " , $n1 , " && Number 2 = ", $n2 ;
$temp = $n1;
$n1 = $n2;
$n2 = $temp;
echo "Number 1 = " , $number1 , "\nNumber 2 = ", $number2 , "\n";

//Swapping Numbers
$temporarynumber = $number1;
$number1 = $number2;
$number2 = $temporarynumber;

//Displaying Numbers After Swapping
echo "\nAfter Swapping \n";
echo "Number 1 = " , $n1 , " && Number 2 = ", $n2 ;
echo "Number 1 = " , $number1 , "\nNumber 2 = ", $number2 ,"\n";
?>