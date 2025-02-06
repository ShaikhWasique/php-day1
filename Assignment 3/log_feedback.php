<?php
// Set file for storing feedback
$feedbackFile = "feedback_log.txt";

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize user input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Prepare feedback content
    $feedbackData = "Name: $name\nEmail: $email\nFeedback: $feedback\nSubmitted on: " . date('Y-m-d H:i:s') . "\n\n";

    // Save feedback to file
    if (file_put_contents($feedbackFile, $feedbackData, FILE_APPEND | LOCK_EX)) {
        echo "Thank you for your feedback!";
    } else {
        echo "There was an error logging your feedback. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
