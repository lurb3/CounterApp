<?php
	header('Access-Control-Allow-Origin: *');
    $servername = "gustavomonteiro.pt";
    $username = "gustavom_count";
    $password = "counter817wWqsa_:";
    $dbname="gustavom_countapp";

// Create connection
global $conn;
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
