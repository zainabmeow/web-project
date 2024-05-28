<?php
// Define connection parameters
define("db_SERVER", "localhost");
define("db_USER", "root");
define("db_PASSWORD", "");
define("db_DBNAME", "contact");

// Create connection
$con = mysqli_connect(db_SERVER, db_USER, db_PASSWORD, db_DBNAME);

if (!$con) {
    die("connection failed: " . mysqli_connect_error());//as exist 
}

// Get POST data
$name = $_POST['name'];
$mail = $_POST['mail'];
$number = $_POST['number'];
$message = $_POST['message'];

// Create SQL query with embedded variables
$sql = "INSERT INTO messages (name, mail, number, message)
 VALUES ('$name', '$mail', '$number', '$message')";

// Execute query and check for success
if (mysqli_query($con, $sql)) {
    echo "New message added successfully.";

} else {
    echo "Error: " . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>