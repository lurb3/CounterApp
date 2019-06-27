<?php 

require_once("connectDB.php");


saveData($conn);

function saveData($connection) {
    $time = $_GET['time'];
    $user = $_GET['user'];
    $category = $_GET['category'];
    $subject = $_GET['subject'];
    
    /*$result = $mysqli->query("SELECT user from userdata WHERE user like '$user'");
    if($result->num_rows == 0) {
        echo "yeap";
    } else {
        echo "nope";
    }*/

    $sql = "SELECT user from userdata WHERE user like '$user'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "User Already exists";
        }
    } else {
        $sql2 = "INSERT INTO userdata(time, user, category, subject) VALUES ($time, '$user', '$category', '$subject')";
        if ($connection->query($sql2) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
    }

    
    
$connection->close();
}

    
?> 