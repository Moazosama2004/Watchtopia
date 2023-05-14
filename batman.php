<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="UTF-8">
        <title>Watchtopia</title>
        <!-- Render all elements in normal mode File  -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- Font awesome File -->
        <link rel="stylesheet" href="css/all.min.css">
        <!-- Main Css File -->
        <link rel="stylesheet" href="css/film.css?v=<?php echo time(); ?>">
        <link rel="icon" type="image/x-icon" href="images/W.png">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
            rel="stylesheet">
    </head>
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

            </div>
        </div>
    </header>

    <main>
        <section class="film">
            <div class="container">
                <div class="parent">
                    <div class="image">
                        <img src="images/movie-5.png" alt="">
                    </div>

                    <div class="details">
                        <h3>new eposides</h3>
                        <h2>The <span>Batman</span></h2>
                        <div class="wrapper">
                            <div class="age">
                                pg 18
                            </div>
                            <div class="quality">
                                4k
                            </div>
                            <div class="category">
                                <a href="">comedy</a>
                                ,
                                <a href="">action</a>
                                ,
                                <a href="">adventure</a>
                            </div>
                            <div class="date">
                                <i class="fa-solid fa-calendar-days"></i>
                                <div class="year">2022</div>
                            </div>
                            <div class="duration">
                                <i class="fa-solid fa-clock"></i>
                                <div class="time">115 min</div>
                            </div>
                        </div>
                        <p class="description"> A bank teller called Guy realizes he is a background character in an
                            open world video game called Free City that will
                            soon go offline..</p>
                        <div class="wrapper-2">
                            <div class="share">
                                <a href="">
                                    <i class="fa-solid fa-share"></i>
                                </a>
                                <div>share</div>
                            </div>
                            <div class="prime">
                                <h4>prime video</h4>
                                <p>streaming channels</p>
                            </div>
                            <div class="watchnow">
                                <a href="#vid">
                                    <button class="btn btn-watchnow">
                                        <i class="fa-solid fa-play"></i>
                                        watch now
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="download">
                    <a href="" onclick="window.open('download.html', '_blank', 'toolbar=0,location=0,menubar=0');">
                        <i class="fa-solid fa-download fa-bounce"></i>
                    </a>
                    </div>
                </div>
            </div>
        </section>


        
        <section class="preview">
                <div class="controls">
                    <button onclick="
                    document.getElementById('vid').src = 'trailer/THE BATMAN – Main Trailer.mp4';
                    ">Trailer</button>
                    <button onclick="
                    document.getElementById('vid').src = 'trailer/The Adam Project  Official Trailer  Netflix.mp4';
                    "
                    >Watch</button>
                </div>
                <video src="trailer/The Adam Project  Official Trailer  Netflix.mp4" controls id="vid"></video>
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
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-lists">
                <ul>
                    <li class="list-head">BROWSE</li>
                    <li><a href="#footer">TV Shows</a></li>
                    <li><a href="#footer">Movies</a></li>
                    <li><a href="#footer">Originals</a></li>
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
</body>

</html>