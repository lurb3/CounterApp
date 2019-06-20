<?php 

require_once("connectDB.php");


saveData($conn);

function saveData($connection) {
    $time = $_GET['time'];
    $user = $_GET['user'];
    
    $result = $mysqli->query("SELECT user from userdata WHERE user like '$user'");
    if($result->num_rows == 0) {
        echo "yeap";
    } else {
        echo "nope";
    }

    $sql = "INSERT INTO userdata(time, user) VALUES ($time, '$user')";

    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    
$connection->close();
}

    
?> 