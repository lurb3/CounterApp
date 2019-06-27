<?php 

require_once("connectDB.php");


getFields($conn);

function getFields($connection) {

    $sql = "SELECT * from userdata WHERE user like 'zipityarr'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $fields = $row;
        }
        echo '<script>var arrayFromPhp = ' . json_encode($fields) . ';</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
 
$connection->close();
}

    
?> 