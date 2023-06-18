<?php
session_start();

if (isset($_POST['ordering'])) {
    $osd = date('Y-m-d', strtotime($_POST['order_start_date']));
    $oed = date('Y-m-d', strtotime($_POST['order_end_date']));
    $selectedMenu = $_POST['menu_title'];

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

    // Get the menu ID based on the selected menu title
    $menuQuery = "SELECT id_paket_menu FROM paket_menu_catering WHERE menu_title = '$selectedMenu'";
    $menuResult = mysqli_query($conn, $menuQuery);
    $menuRow = mysqli_fetch_assoc($menuResult);
    $selectedMenuId = $menuRow['id_paket_menu'];

    // Get the customer ID from the session
    $customerId = $_SESSION['id_customer'];

    // Insert the order details into the new table
    $insertQuery = "INSERT INTO orders_catering (id_customer, id_paket_menu, order_start_date, order_end_date) VALUES ('$customerId', '$selectedMenuId', '$osd', '$oed')";
    $insertResult = mysqli_query($conn, $insertQuery);

    if ($insertResult) {
        echo "<script type='text/javascript'>alert('Ordered Successfully');
        window.location.href = 'inside.php';</script>";
    } else {
        echo "<script type='text/javascript'>alert('Order Failed');
        window.location.href = 'order.php';</script>";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
