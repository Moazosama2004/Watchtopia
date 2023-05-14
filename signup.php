<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Watchtopia</title>

  <link rel="stylesheet" href="css/signup.css?v=<?php echo time(); ?>">
</head>

<body>
  <header>
    <div>
      <a href="main-page.php">
        <h1 class="logo">Watch<span>topia</span></h1>
      </a>
    </div>
  </header>

  <div class="wrapper" style="height:800px">
    <div class="form-box login" style="height: 560px;">
      <h2>SIGN UP</h2>
      <form method="post">

        <div class="input-box">
          <span class="icon">
            <ion-icon name="person-outline"></ion-icon>
          </span>
          <input type="text" name="fullname" required
          value="<?php if (isset($_POST['fullname'])) {
            echo $_POST['fullname'];
          } ?>">>
          <label>Full Name</label>
          <?php if (!empty($errors) && isset($errors['fullname'])) { ?>
            <span class="error-msg"><?php echo $errors['fullname']; ?></span>
          <?php } ?>
        </div>

        <div class="input-box">
          <span class="icon">
            <ion-icon name="person-circle-outline"></ion-icon>
          </span>
          <input type="text" name="username" required
          value="<?php if (isset($_POST['username'])) {
            echo $_POST['username'];
          } ?>">>
          <label>Username</label>
          <?php if (!empty($errors) && isset($errors['username'])) { ?>
            <span class="error-msg"><?php echo $errors['username']; ?></span>
          <?php } ?>
        </div>

        <div class="input-box">
          <span class="icon">
            <ion-icon name="mail"></ion-icon>
          </span>
          <input type="text" name="email" required
            value="<?php if (isset($_POST['email'])) {
              echo $_POST['email'];
            } ?>">>
          <label>Email</label>
          <?php if (!empty($errors) && isset($errors['email'])) { ?>
            <span class="error-msg"><?php echo $errors['email']; ?></span>
          <?php } ?>
        </div>

        <div class="input-box">
          <span class="icon">
            <ion-icon name="lock-closed"></ion-icon>
          </span>
          <input type="password" name="password" required 
          value="<?php if(isset($_POST['password'])){ echo $_POST['name'];}?>">
          <label>Password</label>
          <?php if (!empty($errors) && isset($errors['password'])) { ?>
            <span class="error-msg"><?php echo $errors['password']; ?></span>
          <?php } ?>
        </div>

        <div class="input-box">
          <span class="icon">
            <ion-icon name="call-outline"></ion-icon>
          </span>
          <input type="text" name="phone" required
                  value="<?php if (!empty($errors)) {
                    echo $errors['phone'];
                  } ?>">>
          <label>Phone</label>
          <?php if (!empty($errors) && isset($errors['phone'])) { ?>
            <span class="error-msg"><?php echo $errors['phone']; ?></span>
          <?php } ?>
        </div>

        <div class="input-box">
          <span class="icon">
            <ion-icon name="location-outline"></ion-icon>
          </span>
          <input type="text" name="address" required
                  value="<?php if (isset($_POST['address'])) {
                    echo $_POST['address'];
                  } ?>">>
          <label>Address</label>
          <?php if (!empty($errors) && isset($errors['address'])) { ?>
            <span class="error-msg"><?php echo $errors['address']; ?></span>
          <?php } ?>
        </div>

        <div class="confermpass">
          <label>
            <input type="checkbox" required>
            I agree to the terms and conditions of the site</label>
        </div>

        <input type="submit" class="btn" name="register" value="Signup">
    </form>
    </div>
  </div>

  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>


<?php
if (isset($_POST['register'])) {
  include 'connect.php';

  $name = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
  $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $pass = $_POST['password'];
  $phone_number = $_POST['phone'];
  $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);

  $errors = [];

  // Validate Full Name
  if (empty($name)) {
    $errors['fullname'] = "Please enter your full name.";
  } elseif (!preg_match("/^[a-zA-Z ]{1,100}$/", $name)) {
    $errors['fullname'] = "Full name can only contain letters and spaces, up to 100 characters.";
  }

  // Validate Username
  if (empty($username)) {
    $errors['username'] = "Please enter a username.";
  } elseif (!preg_match("/^[a-zA-Z0-9_]{1,50}$/", $username)) {
    $errors['username'] = "Username can only contain letters, numbers, and underscores, up to 50 characters.";
  }

  // Validate Email
  if (empty($mail)) {
    $errors['email'] = "Please enter an email address.";
  } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Invalid email format.";
  }

  // Validate Password
  if (empty($pass)) {
    $errors['password'] = "Please enter a password.";
  } elseif (strlen($pass) < 8) {
    $errors['password'] = "Password must be at least 8 characters long.";
  }

  // Validate Phone Number
  if (empty($phone_number)) {
    $errors['phone'] = "Please enter a phone number.";
  } elseif (!preg_match("/^[0-9]{11}$/", $phone_number)) {
    $errors['phone'] = "Phone number must be 10 digits long.";  
  }

  // Validate Address
  if (empty($address)) {
    $errors['address'] = "Please enter an address.";
  }

  if (empty($errors)) {
    // All fields are valid, proceed with database insertion
    $query = "INSERT INTO users (name, username, email, password, phone, address) VALUES ('$name', '$username', '$mail', '$pass', '$phone_number', '$address')";
    $result = mysqli_query($conn, $query);

    if ($result) {
      session_start();
      $_SESSION['name'] = $name;
      $_SESSION['username'] = $username;
      $_SESSION['email'] = $mail;
      $_SESSION['password'] = $pass;
      $_SESSION['phone'] = $phone_number;
      $_SESSION['address'] = $address;
      header('Location: profile.php');
      exit;
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }
}
?>