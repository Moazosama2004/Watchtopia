<?php

if (isset($_POST['search'])) {
    include 'connect.php';
    $searchQuery = $_POST['search'];


    $sql = "SELECT * FROM movies WHERE name LIKE '%$searchQuery%'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);


    if (mysqli_num_rows($result) > 0) {
        header('Location: ' . $row['page']);
        exit();

    } else {
        header('Location: not_found.php');
    }
}

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
    <link rel="stylesheet" href="css/master.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="images/W.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
    <body>
        <div class="btn-go-to-top">
            <a href="#" class="gototop">
                <i class="fa-solid fa-arrow-up"></i>
            </a>
        </div>

        <header>
            <div class="container">
                <div class="logo">
                    <h1>watch<span>topia</span></h1>
                </div>

                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>
                        <a href="#movie">movie</a>
                    </li>
                    <li>
                        <a href="#tv-show">tv show</a>
                    </li>
                    <li>
                        <a href="#series">web series</a>
                    </li>
                    <li>
                        <a href="#pricing">pricing</a>
                    </li>
                </ul>

                <div class="control">
                    <form action="" method="POST">
                        <div class="search">
                            <input type="search" class="search-box" id="src-box" name="search">
                            <i class="fa-solid fa-magnifying-glass" id="src-icon"></i>
                        </div>
                        <input type="submit" value="Search" class="sub">
                    </form>

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
                                <a href="main-page.php">Log Out</a>
                                <a href="">Contact Us</a>
                        </div>
                    </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <p>unlimited <span>movie</span>, tVs shows, & more.</p>
                    <div class="main-wrapper">
                        <div class="badge-wrapper">
                            <div class="badge badge-fill">PG 18</div>
                            <div class="badge badge-outline">HD</div>
                        </div>
                        <div class="ganre-wrapper">
                            <a href="#">Romance,</a>
                            <a href="#">Drama</a>
                        </div>
                        <div class="date-time">
                            <div>
                                <i class="fa-solid fa-calendar"></i>
                                <time datetime="2022">2022</time>
                            </div>
                            <div>
                                <i class="fa-regular fa-clock"></i>
                                <time datetime="PT128M">128 min</time>
                            </div>
                        </div>
                    </div>
                    <div class="watchnow">
                        <button class="btn btn-watchnow">
                            <i class="fa-solid fa-play"></i>
                            watch now
                        </button>
                    </div>
                </div>
            </section>

            <section class="upcoming" id="tv-show">
                <div class="container">
                    <div class="upcoming-heading">
                        <div class="info">
                            <p>online streaming</p>
                            <h1>upcoming movies</h1>
                        </div>
                        <div class="actions">
                            <button>movies</button>
                            <button>series</button>
                            <button>anime</button>
                        </div>
                    </div>
                    <div class="movies">
                        <div class="movie-card">
                            <a href="the_northman.php">
                                <img src="images/upcoming-1.png" alt="">
                            </a>
                            <div class="movie-info">
                                <h3>the northman</h3>
                                <div class="date">
                                    <i class="fa-solid fa-star"></i>
                                    <p class="movie-date">2022</p>
                                </div>
                            </div>
                            <div class="details">
                                <div class="movie-quality">
                                    4k
                                </div>
                                <div class="movie-time">
                                    <i class="fa-regular fa-clock"></i>
                                    <time datetime="PT128M">128 min</time>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <a href="doctor_strange.php">
                                <img src="images/upcoming-2.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>Doctor Strange in the Multiverse of Madness</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="memory.php">
                                <img src="images/upcoming-3.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>Memory</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="massive_talent.php">
                                <img src="images/upcoming-4.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>The Unbearable Weight of Massive Talent</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="top" id="movie">
                <div class="container">
                    <div class="top-heading">
                        <div class="info">
                            <p>online streaming</p>
                            <h1>top rated movies</h1>
                        </div>
                        <div class="actions">
                            <button>movies</button>
                            <button>tv shows</button>
                            <button>documentary</button>
                            <button>sports</button>
                        </div>
                    </div>
                    <div class="movies">
                        <div class="movie-card">
                            <a href="sonic.php">
                                <img src="images/movie-1.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>Sonic the Hedgehog 2</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="morbius.php">
                                <img src="images/movie-2.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>Morbius</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="adam_project.php">
                                <img src="images/movie-3.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>The Adam Project</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="freeguy.php">
                                <img src="images/movie-4.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>free guy</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="batman.php">
                                <img src="images/movie-5.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>The Batman</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="uncharted.php">
                                <img src="images/movie-6.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>Uncharted</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="death_on_the_nile.php">
                                <img src="images/movie-7.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>Death on the Nile</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="the_kings_man.php">
                                <img src="images/movie-8.png" alt="">
                            </a>
                            <div class="movie-info">
                                <h3>The King's Man</h3>
                                <div class="date">
                                    <i class="fa-solid fa-star"></i>
                                    <p class="movie-date">2022</p>
                                </div>
                            </div>
                            <div class="details">
                                <div class="movie-quality">
                                    4k
                                </div>
                                <div class="movie-time">
                                    <i class="fa-regular fa-clock"></i>
                                    <time datetime="PT128M">128 min</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="series" id="series">
                <div class="container">
                    <div class="series-heading">
                        <div class="info">
                            <p>online streaming</p>
                            <h1>world best tV series</h1>
                        </div>
                    </div>
                    <div class="movies">
                        <div class="movie-card">
                            <a href="moon_knight.php">
                                <img src="images/series-1.png" alt="">
                            </a>
                            <div class="movie-info">
                                <h3>Moon Knight</h3>
                                <div class="date">
                                    <i class="fa-solid fa-star"></i>
                                    <p class="movie-date">2022</p>
                                </div>
                            </div>
                            <div class="details">
                                <div class="movie-quality">
                                    4k
                                </div>
                                <div class="movie-time">
                                    <i class="fa-regular fa-clock"></i>
                                    <time datetime="PT128M">128 min</time>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <a href="halo.php">
                                <img src="images/series-2.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>Halo</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="vikings.php">
                                <img src="images/series-3.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>Vikings: Valhalla</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                                <a href="money_heist.php">
                                    <img src="images/series-4.png" alt="">
                                </a>
                                <div class="movie-info">
                                    <h3>Money Heist</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>

<!-- - #CTA   -->

            <section class="cta" id="pricing">
                <div class="container">

                    <div class="title-wrapper">
                        <h2 class="cta-title">Trial start first 30 days.</h2>

                        <p class="cta-text">
                        Enter your email to create or restart your membership.
                        </p>
                    </div>

                    <form action="" class="cta-form">
                        <input type="email" name="email" required placeholder="Enter your email" class="email-field">

                        <button type="submit" class="cta-form-btn">Get started</button>
                    </form>

                </div>
            </section>
</main>

        <footer class="footer" id="footer">
            <div class="footer-container">
                <div class="footer-lists">
                    <ul>
                        <li class="list-head">BROWSE</li>
                        <li><a href="#tv-show">TV Shows</a></li>
                        <li><a href="#movie">Movies</a></li>
                        <li><a href="#series">Originals</a></li>
                        <li><a href="#footer">Live Sports</a></li>
                    </ul>
                    <ul>
                        <li class="list-head">HELP</li>
                        <li><a href="#footer">Account & Billing</a></li>
                        <li><a href="#footer">Plans & Pricing</a></li>
                        <li><a href="#footer">Supported Devices</a></li>
                        <li><a href="#footer">Accesibility</a></li>
                    </ul>
                    <ul>
                        <li class="list-head">ABOUT US</li>
                        <li><a href="#footer">Press</a></li>
                        <li><a href="#footer">Contact</a></li>
                    </ul>
                </div>
                <div class="divider"></div>
        
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </footer>
    <script src="js/index.js"></script>
    </body>
</html>
