<?php 

require_once("../common/connectDB.php");

saveData($conn);

/*

TODO :
	- FIX THIS QUERY.
	- IT SHOULD UPDATE NOT INSERT

*/

function saveData($connection) {
    $time = $_POST['time'];
    $user = $_POST['user'];
    $categories = $_POST['categories'];
    $subjects = $_POST['subjects'];

   /* $sql2 = "INSERT INTO categories (name, time, userid) VALUES ('$categories', $time, $user)";
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

    $connection->close();*/
}

    
?> 