<?php
// Specify the file path
$file = 'students.txt';

// Check if the file exists
if (file_exists($file)) {
    // Read the contents of the file
    $students = file($file, FILE_IGNORE_NEW_LINES);

    echo "<h2>Student List</h2>";
    echo "<ul>";
    // Display each student name in an unordered list
    foreach ($students as $student) {
        echo "<li>" . htmlspecialchars($student) . "</li>";
    }
    echo "</ul>";
} else {
    echo "The file does not exist.";
}
?>
