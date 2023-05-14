<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Font awesome File -->
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/main-page.css?v=<?php echo time(); ?>" />
  <link rel="icon" type="image/x-icon" href="images/W.png">
  <title>Watchtopia</title>
</head>

<body>
  <header class="header">
    <nav>
      <ul>
        <li>
          <a href="login.php">
            <button class="login-btn">Log In</button>
          </a>
        </li>
      </ul>
    </nav>

    <div class="header-content">
      <h1 class="watchtopia">Watch<span class="topia">topia</span></h1>
      <div class="header-text-1">Watch thousands of TV shows and movies.</div>
      <a href="signup.php">
        <button class="btn btn-cta">Get Started</button>
      </a>
      <div class="legal-text">
        Free trial for new & eligible returning subscribers only.
      </div>
    </div>
  </header>

  <section class="sub-header">
    <img src="images/Studio_Project (2).png" alt="" />
    <div>
      <h4>Bundled with any Watchtopia plan & save</h4>
      <h3>Get Watchtopia, ESPN+, and Disney+.</h3>
    </div>
    <div>
      <a href="#" class="btn btn-outline">Get Bundle</a>
    </div>
  </section>

  <section class="categories">
    <h4>Included in all plans</h4>
    <div class="text-xl">All The TV You Love</div>
    <div class="sub-text">
      Stream full seasons of exclusive series, current-season episodes, hit
      movies, Watchtopia Originals, kids shows, and more.
    </div>

    <div class="covers">
      <div class="cover-1">
        <div class="cover-grad"></div>
        <div class="cover-text">
          <div class="sub-title">Past & Current Seasons</div>
          <h3>TV Shows</h3>
        </div>
      </div>
      <div class="cover-2">
        <div class="cover-grad"></div>
        <div class="cover-text">
          <div class="sub-title">New & Classics</div>
          <h3>Movies</h3>
        </div>
      </div>
      <div class="cover-3">
        <div class="cover-grad"></div>
        <div class="cover-text">
          <div class="sub-title">Groundbreaking</div>
          <h3>Watchtopia Originals</h3>
        </div>
      </div>
      <div class="cover-4">
        <div class="cover-grad"></div>
        <div class="cover-text">
          <div class="sub-title">Add-On</div>
          <h3>Premiums</h3>
        </div>
      </div>
    </div>
  </section>

  <section class="live">
    <div class="live-border">
      <h4>Live TV</h4>
      <div class="text-xl">Live TV Makes It Better</div>
      <div class="sub-text">
        Make the switch from cable. Get 75+ top channels with your favorite
        live sports, news, and events - plus the entire Watchtopia streaming
        library.
      </div>
      <div class="legal-text">
        Live TV plan required. Regional restrictions, blackouts and additional
        terms apply. See details
      </div>
      <a href="#">View Channels in Your Area</a>
    </div>
  </section>

  <section class="live-sports">
    <div class="live-sports-content">
      <div class="text-xl"><span style="color: #ff0000;">Live</span> Sports</div>
      <div class="sub-text">
        Catch your games at home or on the go. Stream live games from major
        college and pro leagues including the NCAA®, NBA, NHL, NFL, and more.
      </div>

      <div class="live-sports-logos">
        <div>
          <img src="images/live-sports-logo-1.png" alt="" />
        </div>
        <div>
          <img src="images/live-sports-logo-2.png" alt="" />
        </div>
        <div>
          <img src="images/live-sports-logo-3.svg" alt="" />
        </div>
        <div>
          <img src="images/live-sports-logo-4.png" alt="" />
        </div>
      </div>

      <div class="legal-text">
        Live TV plan required. Regional restrictions, blackouts and additional
        terms apply. See details
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-container">
      <div class="footer-lists">
        <ul>
          <li class="list-head">BROWSE</li>
          <li><a href="#">TV Shows</a></li>
          <li><a href="#">Movies</a></li>
          <li><a href="#">Originals</a></li>
          <li><a href="#">Live Sports</a></li>
        </ul>

        <ul>
          <li class="list-head">HELP</li>
          <li><a href="#">Account & Billing</a></li>
          <li><a href="#">Plans & Pricing</a></li>
          <li><a href="#">Supported Devices</a></li>
          <li><a href="#">Accesibility</a></li>
        </ul>

        <ul>
          <li class="list-head">ABOUT US</li>
          <li><a href="#">Press</a></li>
          <li><a href="#">Contact</a></li>
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
  <!-- 
    <div class="modal">
      <div class="modal-box">
        <div class="modal-body">
          <h3>Log In</h3>
          <form>
            <div class="form-control">
              <label for="email">Email</label>
              <input type="email" id="email" />
            </div>
            <div class="form-control">
              <label for="password">Password</label>
              <input type="password" id="password" />
            </div>
            <p><a href="#">Forgot your email or password</a></p>
            <button class="btn btn-dark">Log In</button>
          </form>
        </div>
        <div class="modal-footer">
          <p>Don't have an account? <a href="#">Sign Up</a></p>
        </div>
        <img class="close" src="images/close.svg" alt="close" />
      </div>
    </div> -->

  <script src="js/main.js"></script>
</body>

</html>