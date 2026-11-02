<?php
    // Process login logic here
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate credentials (this is just a placeholder, implement your own validation)
        if ($username === 'admin' && $password === 'password') {
            // Successful login
            session_start();
            $_SESSION['username'] = $username;
            header('Location: dashboard.html');
            exit();
        } else {
            // Invalid credentials
            $error_message = 'Invalid username or password.';
        }
    }
?>