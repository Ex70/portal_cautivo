<?php
$servername = "localhost:3306";
$username = "root";
$password = "terry123456789";
$database = "portal_cautivo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


