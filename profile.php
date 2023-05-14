<?php

session_start();
include "connect.php";

if (isset($_POST['edit'])) { 
    $userName = $_SESSION['username'];
    $_SESSION['name'] = $_POST['name_profile'];
    $updateName = $_SESSION['name'];

    $query = "UPDATE users SET name = $updateName WHERE username = $userName";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $updateName, $userName);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header('Location: index.php');
        exit();
    } 
}


        // if(isset($_POST['submit'])){
        // $fullname = $_POST['fname'];
        // $gender = $_POST['gender'];
        // $age = $_POST['age'];
        // $address = $_POST['address'];
        // $result = mysqli_query($db, $query) or die(mysqli_error($db));
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Watchtopia</title>
    <!-- Render all elements in normal mode File  -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Font awesome File -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Main Css File -->
    <link rel="stylesheet" href="css/profile.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="images/W.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <h1>watch<span>topia</span></h1>
                </a>
            </div>
    
            <ul>
                <li>
                    <a href="index.php">home</a>
                </li>
                <li>
                    <a href="">movie</a>
                </li>
                <li>
                    <a href="">tv show</a>
                </li>
                <li>
                    <a href="">web series</a>
                </li>
                <li>
                    <a href="">pricing</a>
                </li>
            </ul>
    
            <div class="control">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="lang-wrapper">
                    <label for="language">
                        <i class="fa-solid fa-earth-americas"></i>
                    </label>
    
                    <select name="language" id="language">
                        <option value="en">EN</option>
                        <option value="au">AU</option>
                        <option value="ar">AR</option>
                        <option value="tu">TU</option>
                    </select>
                </div>
                    <div class="profile-btn">
                        <a href="profile.php">
                            <img src="images/download.jpeg" alt="">
                        </a>
                        <div class="dropdown">
                            <button class="dropbtn" onclick="myFunction()">
                                <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="dropdown-content" id="myDropdown">
                                <a href="profile.php">Profile</a>
                                <a href="logout.php" >Log Out</a>
                                <a href="">Contact Us</a>
                            </div>
                </div>
            </div>
    </header>

    <main class="profile">
        <div class="container">
            <h1>profile</h1>
            <div class="parent">
                <div class="parent-1">
                    <div class="image">
                        <a href="">
                            <img src="images/download.jpeg" alt="">
                        </a>
                    </div>
                    <div class="name">
                        <h2>
                            <?php
                                echo $_SESSION['name'];
                            ?>
                            </h2>
                        <p>@<?php
                                echo $_SESSION['username'];
                            ?>
                        </p>
                    </div>
                    <hr>

                    <div class="highlights">
                        <h2>
                            <i class="fa-solid fa-star"></i>
                            highlights
                        </h2>
                        <div class="category">
                            <a href="">comedy</a> 
                            <a href="">action</a> 
                            <a href="">advantage</a>
                        </div>
                        
                    </div>

                
                    <div class="social-links">
                        <div class="social">
                            <i class="fa-brands fa-facebook"></i>
                            <a href="#">https://www.facebook.com</a>
                        </div>
                        <div class="social">
                            <i class="fa-brands fa-twitter"></i>
                            <a href="#">https://twitter.com</a>
                        </div>
                        <div class="social">
                            <i class="fa-brands fa-instagram"></i>
                            <a href="#">https://www.instagram.com/</a>
                        </div>
                    </div>
                </div>
                
                <div class="parent-2">
                    <div class="box-content">
                        <div class="content">
                            <div class="info">
                                <i class="fa-solid fa-person"></i>
                                <h3>full name :</h3>
                            </div>
                            <p style="text-transform: capitalize;">
                            <?php
                            echo $_SESSION['name'];
                            ?>
                            </p>

                            </form>
                        </div>
                        <div class="content">
                            <div class="info">
                                <i class="fa-solid fa-envelope"></i>
                                <h3>email :</h3>
                            </div>
                            <p>
                                <?php
                                echo $_SESSION['email'];
                                ?>
                            </p>
                        </div>
                        <div class="content">
                            <div class="info">
                                <i class="fa-solid fa-phone"></i>
                                <h3>phone :</h3>
                            </div>
                            <p>+2<?php
                                echo $_SESSION['phone'];
                                ?>
                            </p>
                        </div>
                        <div class="content">
                            <div class="info">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                <h3>address :</h3>
                            </div>
                            <p style="text-transform: capitalize;">
                                <?php
                                echo $_SESSION['address'];
                                ?>
                            </p>
                        </div>
                        <div class="content">
                            <div class="info">
                                <i class="fa-solid fa-lock"></i>
                                <h3>password :</h3>
                            </div>
                            <p>********</p>
                        </div>
                        <div class="content" name="edit">
                            <a href="update.php">
                                <button >
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    Edit
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/index.js"></script>
</body>
</html>