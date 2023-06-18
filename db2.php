<?php
session_start();
// Establish the database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "ta_web"; // Replace with your actual database name

$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$userName = $_POST['customer_name_lg'];
$userEmail = $_POST['customer_email_lg'];
$userPsw = $_POST['customer_password_lg'];

$checkQuery = "SELECT * FROM customer_catering WHERE customer_email = '$userEmail' AND customer_password = '$userPsw'";
$checkResult = mysqli_query($conn, $checkQuery);

if(mysqli_num_rows($checkResult) > 0){
    $userRow = mysqli_fetch_assoc($checkResult);
    $loggedInUsername = $userRow['customer_name'];
    $customerId = $userRow['id_customer'];

    $_SESSION ['customer_name'] = $loggedInUsername;
    $_SESSION['id_customer'] = $customerId;
    
    echo "<<script type ='text/javascript'> alert('Login cuccessful');</script>";
    header("location: inside.php?name=");
} else {
    echo "<script type ='text/javascript'> alert('Wrong username or password');
    window.location.href = 'login.php';</script>";
    exit();
}
?>