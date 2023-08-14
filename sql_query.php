<?php
global $conn;
require "databaseconnect.php";
$sql = $conn ->prepare("SELECT * FROM Test_user_database.Adressbook ORDER BY id");
$sql -> execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
if (count($result) >0) {
    foreach ($result as $row) {
        echo " id: " . $row["id"] . " name: " . $row["name"] . " surname: " . $row["surname"] . " phone: " . $row["phone"] . " age: " . $row["age"] . " date_of_birth: " . $row["date_of_birth"] . "<br>";
    }
} else {
    echo "No result`s found. ";
}
