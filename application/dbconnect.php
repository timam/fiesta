<?php
    $servername = "swin-rds.coz5ywwvjdnp.us-east-1.rds.amazonaws.com";
    $username = "foo";
    $password = "foobarbaz";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>

