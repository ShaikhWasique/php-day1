<?php
// Initialize the sum variable
$sum = 0;

// Loop through even numbers from 2 to 100 (inclusive)
for ($i = 2; $i <= 100; $i += 2) {
    // Add the current even number to the sum
    $sum += $i;
}

// Display the sum of even numbers
echo "The sum of all even numbers between 1 and 100 is: " . $sum . "<br>";

// Find the city with the highest population
$cities = array(
    "New York" => 8405837,
    "London" => 8908081, 
    "Tokyo" => 13929286 
);

$maxPopulation = 0;
$mostPopulousCity = "";

foreach ($cities as $city => $population) {
    if ($population > $maxPopulation) {
        $maxPopulation = $population;
        $mostPopulousCity = $city;
    }
}

echo "The city with the highest population is: " . $mostPopulousCity . " with a population of " . $maxPopulation . "<br>";

// Check if a string is a palindrome
function isPalindrome($string) {
    // Convert the string to lowercase and remove spaces
    $cleanString = strtolower(str_replace(" ", "", $string));
    
    // Reverse the string
    $reversedString = strrev($cleanString);
    
    // Compare the original and reversed strings
    return ($cleanString === $reversedString);
}

// Example usage of the isPalindrome function
$word1 = "racecar";
$word2 = "hello";

if (isPalindrome($word1)) {
    echo $word1 . " is a palindrome.<br>";
} else {
    echo $word1 . " is not a palindrome.<br>";
}

if (isPalindrome($word2)) {
    echo $word2 . " is a palindrome.<br>";
} else {
    echo $word2 . " is not a palindrome.<br>";
}
?>

