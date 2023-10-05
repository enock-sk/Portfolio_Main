<?php
// Retrieve form data
$email = $_POST['email'];
$message = $_POST['message'];
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_main";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Insert data into database
$sql = "INSERT INTO portfolio_main (email,message) VALUES ('$email','$message')";

if (mysqli_query($conn, $sql)) {
  echo "Successfully.................Thankyou for conducting SANG ENOCK..I will reach you via email";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
