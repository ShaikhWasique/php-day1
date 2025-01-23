<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
} else {
    // Redirect if not POST
    header("Location: feedback_form.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Submission</title>
</head>
<body>

    <h2>Thank You for Your Feedback!</h2>

    <h3>Your Submitted Information:</h3>

    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Mobile Number:</strong> <?php echo $mobile; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Message:</strong></p>
    <p><?php echo nl2br($message); ?></p>

</body>
</html>
