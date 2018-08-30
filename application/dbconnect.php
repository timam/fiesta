<?php
    $servername = "swin-rds.coz5ywwvjdnp.us-east-1.rds.amazonaws.com";
    $username = "foo";
    $password = "foobarbaz";

    try {
        $conn = new PDO("mysql:host=$servername;port=3306;dbname=swindb", $username, $password); 
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
?>
