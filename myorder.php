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
  <link href="myorder.css" rel="stylesheet">
</head>
<body>
  <?php 
    session_start();
    $_SESSION;
  ?>
  <div class="welcome">
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
                      <a class="nav-link" href="#">MY ORDER</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">LOGOUT</a>
                    </li>
                    <li class="d-flex">
                      <button class="button"><a class="nav-link" href="order.php">ORDER NOW</a></button> 
                    </li>
                  </ul>
                </div>
            </div>
          </div>
      </nav>
      <div class="line">
        <hr color="white">
      </div>
      <div class="welcome_user">
        <h1><?php echo $_SESSION ['customer_name']; ?> Orders</h1>
      </div>
  </div>
  <div class="table-container">
  <?php

// Establish the database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "ta_web";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the customer ID from the session
$customerId = $_SESSION['id_customer'];

// Query to retrieve order details for the logged-in user
$query = "SELECT o.order_start_date, o.order_end_date, p.menu_title
          FROM orders_catering o
          JOIN paket_menu_catering p ON o.id_paket_menu = p.id_paket_menu
          WHERE o.id_customer = '$customerId'";

$result = mysqli_query($conn, $query);

// Display the order details in a table
if (mysqli_num_rows($result) > 0) {
    echo "<div class='container'>
            <table class='table table-bordered text-white table-responsive-md' style='width: 70%; margin: 0 auto;'>
              <thead>
                <tr>
                  <th>Order Start Date</th>
                  <th>Order End Date</th>
                  <th>Menu Title</th>
                </tr>
              </thead>
              <tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['order_start_date'] . "</td>
                <td>" . $row['order_end_date'] . "</td>
                <td>" . $row['menu_title'] . "</td>
              </tr>";
    }

    echo "</tbody>
          </table>
        </div>";
} else {
  echo "<div class='container' style='display: flex; flex-direction: column; align-items: center;'>
  <div style='text-align: center;'>
    <p>You haven't placed any orders yet. Click the link below to place an order.</p>
    <a href='order.php' style='color: #B88614;'>Order Now</a>
  </div>
</div>";
}

// Close the database connection
mysqli_close($conn);
?>
  </div>
    <div class="line">
      <hr color="white">
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