<!DOCTYPE html>
<html>

<head>
    <title>Update Account Information</title>
    <link rel="stylesheet" href="css/update.css">
</head>

<body>
    <div class="container">
        <h1>Update Account Information</h1>
        <form method="post" action="update.php">
            <div class="cont">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <br>
            <div class="cont">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
                
            </div>
            <br>
            <div class="cont">
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password" minlength="8">
            </div>
            <br>
            <div class="cont">
                <label for="password_confirmation">Confirm New Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>
            <br>
            <div class="cont">
                <input type="submit" value="Update" name="update">
            </div>
        </form>
    </div>
</body>

</html>




<?php
session_start();
include "connect.php";
$username = $_SESSION['username'];
if (isset($_POST['update'])) {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $query = "UPDATE users SET name = '$name', email = '$email' WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Update successful
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $pass;
            header("Location: profile.php");
            exit;
        } else {
            error_log("Database error: " . mysqli_error($conn));
            die("Database error. Please try again later.");
        }
    } else {
        die("Invalid form data. Please make sure all fields are filled.");
    }
}
?>