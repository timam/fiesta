<?php
    $servername = "coz5ywwvjdnp.us-east-1.rds.amazonaws.com";
    $username = "foo";
    $password = "foobarbaz";
    $dbname = "swindb";
    $port = 3306;

    // Create connection
    $conn = new mysqli($servername, $port, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo 'Connected successfully';
    $conn->close();
?>
