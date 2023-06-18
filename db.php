<?php
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

// Prepare the input data from the web form
    $userName = $_POST['customer_name'];
    $userEmail = $_POST['customer_email'];
    $userPnum= $_POST['customer_telp'];
    $userPsw = $_POST['customer_password'];
    $userPnt = $_POST['customer_pantangan'];

    $userProvinsi = $_POST['alamat_provinsi'];
    $userKotaKabupaten = $_POST['alamat_kota_kabupaten'];
    $userKecamatan = $_POST['alamat_kecamatan'];
    $userKodePos = $_POST['alamat_kode_pos'];
    $userJalan = $_POST['alamat_jalan_norumah'];
    $userPatokan = $_POST['alamat_patokan'];

// Insert data into the customer table
    $sqlAlamat = "INSERT INTO alamat_catering (alamat_provinsi, alamat_kota_kabupaten, alamat_kecamatan, alamat_kode_pos, alamat_jalan_norumah, alamat_patokan) VALUES ('$userProvinsi', '$userKotaKabupaten', '$userKecamatan', '$userKodePos', '$userJalan', '$userPatokan')";

if (mysqli_query($conn, $sqlAlamat)) {
    $alamatID = mysqli_insert_id($conn); // Get the auto-generated customer ID
    // Insert data into the alamat table with the customer ID as the foreign key
    $sqlCustomer = "INSERT INTO customer_catering (customer_name, customer_email, customer_telp, customer_password, customer_pantangan, id_alamat) VALUES ('$userName', '$userEmail', '$userPnum', '$userPsw', '$userPnt', '$alamatID')";
    if (mysqli_query($conn, $sqlCustomer)) {
        echo "<script type ='text/javascript'> alert('Successfully Register');
        window.location.href = 'signup.php';</script>";
        
    } else {
        echo "<script type ='text/javascript'> alert('Failed Register')</script>" . mysqli_error($conn);
    }
} else {
    echo "<script type ='text/javascript'> alert('Please Enter The Form Corectly')</script>". mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

?>
