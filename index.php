<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $db->query($query);
    if ($result) {
        echo "User  found!";
    } else {
        echo "User  not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQL Injection Playground</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="Enter username" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
