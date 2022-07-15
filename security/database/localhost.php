<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "steamlogger";
$port = "3306";


$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . "Ocorreu um erro com a conexão ao banco de dados!");
  // die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";