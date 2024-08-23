<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple authentication (just for demonstration)
    // Replace with a database check in a real-world application
    if ($username === 'admin' && $password === 'password') {
        echo "Welcome, $username!";
    } else {
        echo "Invalid username or password!";
    }
}
