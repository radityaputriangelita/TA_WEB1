<?php
  session_start();
  $_SESSION;
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
  <link href="order.css" rel="stylesheet">
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
                      <a class="nav-link" href="inside.php">HOME</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">ABOUT</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="myorder.php">MY ORDER</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">LOGOUT</a>
                    </li>
                    <li class="d-flex">
                      <button class="button"><a class="nav-link" href="#">ORDER NOW</a></button> 
                    </li>
                </ul>
              </div>
          </div>
        </div>
      </nav>
      <div class="container bg-img">
        <form method="POST" action="ordering.php" class="container">
          <h1>ORDER</h1>
          <h4>You can place your order by filling the form below</h4>

          <label for="start_date"><b>Start Date</b></label>
          <input type="date" name="order_start_date" required>

          <label for="end_date"><b>End Date</b></label>
          <input type="date" name="order_end_date" required>

          <label for="pilih_paket"><b>Pilih Paket Menu</b></label>
          <!-- <input type="text" name="paket_pilih" required> -->
          <br>
          <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "ta_web";

            $conn = mysqli_connect($servername, $username, $password, $database);

            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM paket_menu_catering";
            $result = mysqli_query($conn, $sql);

            echo "<select name='menu_title'>";
            while ($row = mysqli_fetch_assoc($result)) {
              $menuTitle = $row['menu_title'];
              echo "<option value='$menuTitle'>$menuTitle</option>";
            }
            echo "</select>";

            mysqli_free_result($result);
            mysqli_close($conn);
          ?>
          <br>
          <br>
          <button type="submit" name= "ordering" class="btn">Order Now</button>
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
