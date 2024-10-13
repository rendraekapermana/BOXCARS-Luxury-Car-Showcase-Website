<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $users = file('users.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($users as $user) {
        list($storedEmail) = explode(':', $user);
        if ($storedEmail === $email) {
            die('Email sudah terdaftar!');
        }
    }

    $userData = "$email:$hashedPassword\n";
    file_put_contents('users.txt', $userData, FILE_APPEND | LOCK_EX); // Menambahkan data ke file

    header('Location: login.php');
    exit();
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
            <h1>Create an account</h1>
            <p>Unleash the luxury of automobiles, where elegance and power converge.</p>
            <div class="form">
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    <input type="submit" value="Create Account" class="btn-get-started">
                    <p>Already have an account? <a href="login.php">Sign in</a></p>
                </form>
            </div>
        </div>
    </main>
</body>

</html>