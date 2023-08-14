<?php
global $dbname, $username, $host, $password;
require_once "pdoconfig.php";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "<pre>";
    echo "Connected to $dbname at $host successfully."."<br>"."<br>";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}