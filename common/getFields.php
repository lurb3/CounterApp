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

    $sql2 = "SELECT * from categories WHERE userid like $userid";
    $result2 = $connection->query($sql2);

    if($result2->num_rows > 0) {
        $i=0;
        while($row2 = $result2->fetch_assoc()) {
            $fields['categories'][$i] = $row2;
            $i++;
        }
    } 

    $sql3 = "SELECT * from subjects WHERE userid like $userid";
    $result3 = $connection->query($sql3);

    if($result3->num_rows > 0) {
        $i=0;
        while($row3 = $result3->fetch_assoc()) {
            $fields['subjects'][$i] = $row3;
            $i++;
        }
    } 
    
    echo json_encode($fields);

}

//getFields($conn, 1);
    
?> 