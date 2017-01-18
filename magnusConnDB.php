<?php
$servername = "localhost";
$username = "shikaru";
$password = "a1s2d3f4g5h6j7k8l9";
$dbname = "magnus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//conjunto de caracteres
//printf("Conjunto de caracteres : %s\n", $conn->character_set_name());
$conn->set_charset('utf8'); // Para que las consultas se importen modelo utf8 y se puedan mostrar las ñ y Ñ.
//fin conjunto de caracteres






?>