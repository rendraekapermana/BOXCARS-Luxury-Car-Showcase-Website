<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_found = false;

    $users_file = 'users.txt';
    if (file_exists($users_file)) {
        $users = file($users_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($users as $user) {
            list($stored_email, $stored_password) = explode(':', $user);
            if ($email === $stored_email && password_verify($password, $stored_password)) {
                $user_found = true;
                $_SESSION['email'] = $email;
                header('Location: index.php');
                exit();
            }
        }
    }

    $error_message = "Email atau password tidak sesuai.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login BOXCARS</title>
    <link rel="stylesheet" href="Styles/login.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <main class="container">
        <div class="card">
            <img src="Images/logo-black.svg" alt="BOXCARS Logo" class="logo">
            <h1>Login to your account</h1>
            <p>Unleash the luxury of automobiles, where elegance and power converge.</p>
            <div class="form">
                <form action="index.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    <input type="submit" value="Login" class="btn-get-started">
                    <p>Don't have an account? <a href="register.php">Sign in</a></p>
                </form>
            </div>
        </div>
    </main>
</body>

</html>