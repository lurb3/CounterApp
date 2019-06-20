<?php 

require_once("connectDB.php");


saveData($conn);

function saveData($connection) {
    $time = $_GET['time'];
    $sql = "INSERT INTO userdata(time) VALUES ($time)";

    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    
$connection->close();
}

    
?> 