<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mzuni_tutoring_app";

// $servername = "localhost";                 
// $username = "u897516670_chaintechhub";
// $password = "P@55w0rD!G8&Zx7YtLq3#";
// $dbname = "u897516670_chaintechhub";



try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}


if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header("HTTP/1.1 200 OK");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
    exit;
}