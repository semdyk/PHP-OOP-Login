<?php
// Start the session
session_start();

// Include the User class
include 'classes/User.php';

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header('Location: index.php');
    exit;
}


// Get the username from the session
$loggedInUsername = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Welcome to the Dashboard!</h1>
    <p>Hello, <?php echo htmlspecialchars($loggedInUsername); ?>. You are logged in.</p>
</body>

</html>