<?php
$host = 'mysql';
$user = getenv('MYSQL_USER');
$password = getenv('My-Secretpasswor-132');
$database = getenv('mi-aplicación-php-mysql');

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to MySQL!";
$conn->close();
?>
