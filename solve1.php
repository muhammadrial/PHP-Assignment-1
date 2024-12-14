<?php


/**
 * i. Electric bill calculation (For first 50 units – 3.50 tk/unit For next 100 units – 4.00
 * tk/unit For next 100 units – 5.20 tk/unit For units above 250 – 6.50 tk/unit)
 */

$units=50.1;


if ($units <= 50 && $units >0) {
    $bill = $units * 3.50;
} elseif ($units <= 150  && $units >50) {
    $bill = (50 * 3.50) + (($units - 50) * 4.00);
} elseif ($units <= 250  && $units >150) {
    $bill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
} else {
    $bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
}

echo ($bill);

echo "<br>";

// ii. A PHP calculator using switch case (Addition, Subtraction, Multiplication, Division)


$num1 = 4; // First number
$num2 = 0;  // Second number
$operator = '/'; // Operator: '+', '-', '*', '/'

// Perform the calculation
switch ($operator) {
    case '+':
        echo $num1 + $num2;
        break;
    case '-':
        echo $num1 - $num2 ;
        break;
    case '*':
        echo $num1 * $num2;
        break;
    case '/':
        if ($num2 != 0) {
            echo $num1 / $num2;
        } else {
            echo "Error: Division by zero is not allowed";
        }
        break;
    default:
        echo "Error: Invalid operator";
}


echo "<br>";


// iii. Check if a person is eligible to vote by age


$age = 18; // Person's age

// Check eligibility

if ($age >= 18) {
    echo "You are eligible to vote";
} else {
    echo "You are not eligible to vote";
}


echo "<br>";


// iv. Check if a person is eligible for marriage in BD by gender.

$age = 30; // Person's age
$gender = 'male'; // Person's gender ('male' or 'female')

// Check eligibility 


if (($gender === 'male' && $age >= 21) || ($gender === 'female' && $age >= 18)) {
    echo "Eligible";
} else {
    echo "Not eligible";
}

echo "<br>";

//v. Check if number is positive or negetive


$number = -35; // Input number

// Check 

if ($number > 0) {
    echo "The number is positive";
} elseif ($number < 0) {
    echo "The number is negative";
} else {
    echo "The number is zero";
}


echo "<br>";

//vi. Check if number is odd or even 

$number = 15; // Input number

// Check 

if ($number % 2 == 0) {
    echo "Even";
} else {
    echo "Odd";
}


//vii. Check if data is integer or string

echo "<br>";

$data = "Hello, world!"; // Input data

// Check


if (is_int($data)) {
    echo "Integer";
} elseif (is_string($data)) {
    echo "String";
} else {
    echo "Error";
}

?>

