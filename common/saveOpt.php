<?php 

require_once("connectDB.php");

saveData($conn);

function saveData($connection) {
    $userid = $_GET['userid'];
    $type = $_GET['type'];
    $name = $_GET['name'];
    $currentDate = date("Y-m-d");

    $sql2 = "INSERT INTO $type (name, insertdate, userid) VALUES ('$name', $currentDate, $userid)";
    $result2 = $connection->query($sql2);
    if ($result2 === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql2 . "<br>" . $connection->error;
    }

    $connection->close();
}

    
?> 