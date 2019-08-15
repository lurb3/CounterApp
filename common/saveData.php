<?php 

require_once("connectDB.php");

saveData($conn);

function saveData($connection) {
    $time = $_GET['time'];
    $user = $_GET['user'];
    $categories = $_GET['categories'];
    $subjects = $_GET['subjects'];

    $sql2 = "INSERT INTO categories (name, time, userid) VALUES ('$categories', $time, $user)";
    $result2 = $connection->query($sql2);
    if ($result2 === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql2 . "<br>" . $connection->error;
    }

    $sql = "INSERT INTO subjects (name, time, userid) VALUES ('$subjects', $time, $user)";
    $results = $connection->query($sql);
    if ($results == TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    } 

    $connection->close();
}

    
?> 