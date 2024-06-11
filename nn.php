<?php
// Start the session
session_start();


// Retrieve the user_id from the session
$user_id = $_SESSION['uid'];

include("connection.php");

// Retrieve user information from the database based on the user_id
$query = "SELECT * FROM customer_t WHERE c_id='$user_id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

// Display user information
echo "Welcome, " . $row['c_fname'] . "!<br>";
echo "Email: " . $row['c_email'];

// Close the database connection
mysqli_close($con);
?>
