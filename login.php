<?php
if (isset($_POST['login'])) {
    include 'connect.php';

    $name = $_POST['username'];
    $pass = $_POST['password'];

    $errors = [];

    // Validate username
    if (empty($name)) {
        $errors[] = "Please enter a username.";
    }

    // Validate password
    if (empty($pass)) {
        $errors[] = "Please enter a password.";
    }

    if (empty($errors)) {
        $query = "SELECT * FROM users WHERE username = '$name' AND password = '$pass'";
        $result = mysqli_query($conn, $query);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

        if ($count == 1) {
            session_start();
            $_SESSION['username'] = $name;
            $_SESSION['password'] = $pass;
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['address'] = $row['address'];
            header('Location: index.php');
            exit;
        } else {
            $errors[] = "Invalid login ";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <header>
        <div>
            <a href="main-page.php">
                <h1 class="logo">Watch<span>topia</span></h1>
            </a>
        </div>
        <!-- <nav class="navigation">
            <a href="1">Home</a>
            <a href="2">About</a>
            <a href="3">Services</a>
            <a href="4">Content</a>
            <button class="login">LOGIN</button>
        </nav> -->
    </header>

    <div class="wrapper">
        <!-- <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span> -->
        <div class="form-box login">
            <h2>Login</h2>
            <form method="post" action="">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" required name="username">
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" required name="password">
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                        Remember me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="btn" name="login">Login</button>
                <div class="login-register">
                    <p>Don't have an account?
                        <a href="signup.php" class="register-link">
                            Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>