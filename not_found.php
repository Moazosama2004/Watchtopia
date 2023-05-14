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
    <link rel="stylesheet" href="css/not_found.css">
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
                        <img src="images/343850635_1179476012593331_8067228627598846340_n.jpg" alt="">
                    </a>
                    <div class="dropdown">
                        <button class="dropbtn" onclick="myFunction()">
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <div class="dropdown-content" id="myDropdown">
                            <a href="profile.php">Profile</a>
                            <a href="logout.php">Log Out</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                </div>
    </header>

    <main>
        <h1>Not Found..</h1>
        <h2>Your Movie Not Avaliable !</h2>
        <h3>Sorry....</h3
    </main>
    <script src="js/index.js"></script>
</body>
</html>