<?php

$host = 'localhost';
$user = 'root';
$dbname = 'crud_of_pdo';
$chars = 'utf8mb4';
$pass = 'factorise@123';

try {
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=$chars",$user, $pass);
    echo "Conenction successfully";
} catch (PDOException $error) {
    die("ERROR". $error -> getMessage());
}


?>