<?php 

require_once("connectDB.php");


getFields($conn);

function getFields($connection) {

    $sql = "SELECT * from users WHERE userid like 1";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $fields['user'][$row['name']] = $row;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $sql2 = "SELECT * from categories WHERE userid like 1";
    $result = $connection->query($sql2);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $fields['category'][$row['name']] = $row;
        }
    } else {
        echo "Error: " . $sql2 . "<br>" . $connection->error;
    }
 
    echo '<script>var arrayFromPhp = ' . json_encode($fields) . ';</script>';
$connection->close();
}

    
?> 