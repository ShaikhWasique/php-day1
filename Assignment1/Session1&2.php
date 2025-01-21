<?php
$a =25;
$b =20;
echo "Arithmetic Operators"."<br>";
echo "a + b =". ($a+$b)."<br>";
echo "a - b =". ($a-$b)."<br>";
echo "a * b =". ($a*$b)."<br>";
echo "a / b =". ($a/$b)."<br>";
echo "a % b =". ($a%$b)."<br>";
echo "a ^ b =". ($a^$b)."<br>";
echo"Assignment Operators"."<br>";
$a= 10;
$a  += 5; // $a = $a +5;
echo "a += 5: ". $a."<br>";
$a  -= 5; // $a = $a -3;
echo "a -= 3: ". $a."<br>";
$a  *= 2; // $a = $a *2;
echo "a *= 2: ". $a."<br>";
$a  /= 4; // $a = $a /4;
echo "a /= 4: ". $a."<br>";
$a  %= 3; // $a = $a %3;
echo "a %= 3: ". $a."<br>";
echo "String Operations". "<br>";
$str1 = "Hello,";
$str2 = "World!";
$concatenated =$str1 . $str2."<br>";
echo "Concatenated string:" .$concatenated . "<br>";
$str = "This is a string.";
$length = strlen($str);
echo "String length:". $length."<br>";
$str = "This is a substring.";
$substring = substr($str, 10, 5);
echo "Substring:". $substring."<br>";
echo "Case Converions"."<br>";
$str = "This is a mixed string.";
$uppercase = strtoupper($str);
echo "Uppercase:". $uppercase. "<br>";
$lowercase = strtolower($str);
echo "Lowercase:". $lowercase. "<br>";
$ucfirst = ucfirst($str);
echo "UCFirst:". $ucfirst. "<br>";
$ucwords = ucwords($str);
echo "UCWords:". $ucwords. "<br>";
echo"Trimmed function"."<br>";
$str = "     This string has leading and trailing spaces.";
$trimmed= trim($str);
echo "Trimmed:".$trimmed. "<br>";
$ltrimmed= ltrim($str);
echo "Left Trimmed:".$ltrimmed. "<br>";
$rtrimmed= rtrim($str);
echo "Right Trimmed:".$rtrimmed."<br>";
$string1 = "Hello, World!";
$string2 = "hello, world!";
/**
 * Reverses a given string.
 *
 * @param string $str The string to reverse.
 * @return string The reversed string.
 */
function reverseString($str) {
    return strrev($str);
}

/**
 * Compares two strings case-sensitively.
 *
 * @param string $str1 The first string.
 * @param string $str2 The second string.
 * @return bool True if the strings are equal, False otherwise.
 */
function compareStringsCaseSensitive($str1, $str2) {
    return $str1 === $str2;
}

/**
 * Compares two strings case-insensitively.
 *
 * @param string $str1 The first string.
 * @param string $str2 The second string.
 * @return bool True if the strings are equal, False otherwise.
 */
function compareStringsCaseInsensitive($str1, $str2) {
    return strtolower($str1) === strtolower($str2); 
}

// Reverse the string
$reversedString = reverseString($string1);
echo "Reversed string: " . $reversedString . "\n";

// Case-sensitive comparison
$caseSensitiveResult = compareStringsCaseSensitive($string1, $string2);
echo "Case-sensitive comparison: " . ($caseSensitiveResult ? "Equal" : "Not Equal") . "\n";

// Case-insensitive comparison
$caseInsensitiveResult = compareStringsCaseInsensitive($string1, $string2);
echo "Case-insensitive comparison: " . ($caseInsensitiveResult ? "Equal" : "Not Equal") . "\n";
function arithmeticOperations($num1, $num2) {
    $result = array();
    $result['addition'] = $num1 + $num2;
    $result['subtraction'] = $num1 - $num2;
    $result['multiplication'] = $num1 * $num2;
    $result['division'] = ($num2 != 0) ? $num1 / $num2 : "Division by zero";
    $result['modulus'] = ($num2 != 0) ? $num1 % $num2 : "Modulus by zero";
    return $result;
  }
  // Function to round up to the nearest integer
function roundUp($num) {
    return ceil($num);
  }
  
  // Function to round down to the nearest integer
  function roundDown($num) {
    return floor($num);
  }
  
  // Function to calculate square root
  function squareRoot($num) {
    if ($num >= 0) {
      return sqrt($num);
    } else {
      return "Square root of negative number is not defined";
    }
  }
  
  // Function to generate random number
  function generateRandomNumber($min, $max) {
    return rand($min, $max);
  }
  
  // Function to check if a value is numeric
  function isNumeric($value) {
    return is_numeric($value);
  }
  
  // Example usage
  $num1 = 10;
  $num2 = 5;
  
  // Arithmetic operations
  $operations = arithmeticOperations($num1, $num2);
  echo "Addition: " . $operations['addition'] . "<br>";
  echo "Subtraction: " . $operations['subtraction'] . "<br>";
  echo "Multiplication: " . $operations['multiplication'] . "<br>";
  echo "Division: " . $operations['division'] . "<br>";
  echo "Modulus: " . $operations['modulus'] . "<br><br>";
  
  // Rounding functions
  $number = 3.14;
  echo "Round Up: " . roundUp($number) . "<br>";
  echo "Round Down: " . roundDown($number) . "<br><br>";
  
  // Square root
  $number = 25;
  echo "Square Root: " . squareRoot($number) . "<br><br>";
  
  // Generate random number
  $min = 1;
  $max = 100;
  echo "Random Number: " . generateRandomNumber($min, $max) . "<br><br>";
  
  // Check if value is numeric
  $value1 = "123";
  $value2 = "abc";
  echo "Is '$value1' numeric? " . (isNumeric($value1) ? "Yes" : "No") . "<br>";
  echo "Is '$value2' numeric? " . (isNumeric($value2) ? "Yes" : "No") . "<br>";
  ?>