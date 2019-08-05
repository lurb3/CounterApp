<?php 

require_once("connectDB.php");

function getFields($connection, $userid) {

    $sql = "SELECT * from users WHERE userid like $userid";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            $fields = $row;
        }

    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $sql2 = "SELECT name from categories WHERE userid like $userid";
    $result2 = $connection->query($sql2);

    if($result2->num_rows > 0) {
        $i=0;
        while($row2 = $result2->fetch_assoc()) {
            $fields['categories'][$i] = $row2;
            $i++;
        }
    } else {
        echo "Error: " . $sql2 . "<br>" . $connection->error;
    }
    
    echo json_encode($fields);

}

//getFields($conn, 1);
    
?> 