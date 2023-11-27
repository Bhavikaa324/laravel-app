<?php
// Function to generate Fibonacci series up to a given limit
function generateFibonacci($limit) {
    // Initialize the first two numbers in the series
    $num1 = 0;
    $num2 = 1;

    // Display the first two numbers
    echo $num1 . ", " . $num2;

    // Loop to generate the rest of the series
    while ($num1 + $num2 <= $limit) {
        // Calculate the next number in the series
        $nextNum = $num1 + $num2;

        // Display the next number
        echo ", " . $nextNum;

        // Update $num1 and $num2 for the next iteration
        $num1 = $num2;
        $num2 = $nextNum;
    }
}

// Set the limit for the Fibonacci series
$limit = 100;

// Call the function to generate and display the Fibonacci series
generateFibonacci($limit);
?>