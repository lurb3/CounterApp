<?php 

require_once("connectDB.php");


getFields($conn);

function getFields($connection) {

    $sql = "SELECT * from users WHERE userid like 1";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
            $fields['user'][$i] = $row;
            $i++;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $sql2 = "SELECT * from categories WHERE userid like 1";
    $result = $connection->query($sql2);

    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
            $fields['category'][$i] = $row;
            $i++;
        }
    } else {
        echo "Error: " . $sql2 . "<br>" . $connection->error;
    }

    $sql3 = "SELECT * from subjects WHERE userid like 1";
    $result = $connection->query($sql3);

    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
            $fields['subjects'][$i] = $row;
            $i++;
        }
    } else {
        echo "Error: " . $sql3 . "<br>" . $connection->error;
    }
 
    echo '<script>var arrayFromPhp = ' . json_encode(array('userInfo' => $fields)) . ';</script>';
$connection->close();
}

    
?> 