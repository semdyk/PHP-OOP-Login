<?php
session_start();

// Include the User and Auth classes
include 'classes/User.php';
include 'classes/Auth.php';

// Create some users (this simulates database users)
$users = [
    new User('john_doe', 'securepassword'),
    new User('jane_doe', 'anotherpassword')
];

// Initialize the Auth class
$auth = new Auth($users);

// Handle login submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($auth->login($username, $password)) {
        // Redirect to the dashboard on successful login
        header('Location: dashboard.php');
        exit;
    } else {
        echo 'Invalid username or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>