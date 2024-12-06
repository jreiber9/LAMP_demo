<?php
// Database credentials
$host = 'localhost';
$user = 'root';
$password = 'root';
$db = 'my_references';
$port = 3306;

// Create a new connection using mysqli
$link = mysqli_init();
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
);

// Check if the connection was successful
if ($success) {
    echo 'Connected successfully to the database: ' . $db;
} else {
    echo 'Connection failed: ' . mysqli_connect_error();
}

// Close the connection
mysqli_close($link);
?>
