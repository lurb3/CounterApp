<?php 

require_once("connectDB.php");

saveData($conn);

function saveData($connection) {
    $time = $_GET['time'];
    $user = $_GET['user'];
    $category = $_GET['category'];

    /*$sql = "SELECT userid from users where name = '$user'";
    $result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $userid = $row;
    }
    
} else {
    echo "0 results";
}
    $userid = $userid['userid'];*/
    $sql2 = "INSERT INTO categories (name, time, userid) VALUES ('$category', $time, $user)";
    $result2 = $connection->query($sql2);
    if ($result2 === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
}

    
?> 