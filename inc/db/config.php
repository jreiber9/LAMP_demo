<?php
function getConnection() {
    $user = 'root';
    $password = 'root';
    $db = 'my_references';
    $host = 'localhost';
    $port = 3306;

    // Initialize MySQLi
    $link = mysqli_init();
    
    // Attempt to connect
    $success = mysqli_real_connect(
        $link,
        $host,
        $user,
        $password,
        $db,
        $port
    );

    // Check connection
    if (!$success) {
        echo 'Connection failed: ' . mysqli_connect_errno();  // Show the error code
        echo '<br>';
        echo 'Error: ' . mysqli_connect_error();  // Show the error message
        exit();  // Stop execution if connection fails
    } else {
        echo 'Connected successfully to the database: ' . $db;  // Success message
        return $link;  // Return the connection link if successful
    }
}
?>
