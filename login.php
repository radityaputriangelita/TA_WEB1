<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TUGAS AKHIR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Ramaraja' rel="stylesheet">
  <link href="login.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="foto/Untitled design.jpg" width="274" height="auto"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="coba">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">MENU</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">PRICE LIST</a>
                  </li>
                  <li class="d-flex">
                    <button class="button"><a class="nav-link" href="#">ORDER NOW</a></button> 
                  </li>
                </ul>
              </div>
          </div>
        </div>
      </nav>
      <div class="bg-img">
        <form action="db2.php" method="POST" class="container">
          <h1>Login</h1>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="customer_email_lg" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="customer_password_lg" required>
          <br>
          <button type="submit" class="btn">Login</button>
          <br>
          <br>
          <p>Not have an account <a href="signup.php">signup</a> </p>
        </form>
      </div>
      <div class="footer">
        <div class="kanan">
            <div class="logofooter">
                <img src="foto/Untitled design (5).png" width="250" height="auto">
            </div>
            <div class="motofooter">
                <p>taste that</p><p>angel's choice</p>
            </div>
        </div>
        <div class="kiri">
            <div class="sejak">
                <p>© 2023 Angel’s Catering</p>
            </div>
            <div class="icon">
                <a href="#twitter"><img src="foto/twt icon.png" width="50" height="50"></a>
                <a href="#facebook"><img src="foto/fb icon.png" width="50" height="50"></a>
                <a href="#email"><img src="foto/email icon.png" width="50" height="50"></a>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>