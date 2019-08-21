<?php 

require_once("../common/connectDB.php");
require_once("../common/infos.php");

saveData($conn);

function saveData($connection) {
    $userid = $_POST['userid'];
    $type = $_POST['type'];
    $name = $_POST['name'];
    $currentDate = date("Y-m-d");

    $sql2 = "INSERT INTO $type (name, insertdate, userid) VALUES ('$name', '$currentDate', $userid)";
    $result2 = $connection->query($sql2);
    if ($result2 === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql2 . "<br>" . $connection->error;
    }

    $connection->close();
}

    
?> 