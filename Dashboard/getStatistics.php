<?php 

    require_once("../common/connectDB.php");

    getAllStatistics($conn);

    function getAllStatistics($connection) {
        $userid = $_GET['userid'];
    
        $sql = "SELECT name, time from categories WHERE userid = $userid";
        $result = $connection->query($sql);
    
        if ($result->num_rows > 0) {
            // output data of each row
            $i = 0;
            while($row = $result->fetch_assoc()) {
                $response_array[$i] = $row;
                $i++;
            }
        } else {
            //echo "Error: " . $sql . "<br>" . $connection->error;
            
            $response_array = 'error';  
        }

        echo json_encode($response_array);
    
        $connection->close();
    }

?>