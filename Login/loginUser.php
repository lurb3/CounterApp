<?php 

    require_once("../common/connectDB.php");
    require_once("../common/getFields.php");

    loginUser($conn);

    function loginUser($connection) {
        $login = $_GET['login'];
        $email = $_GET['email'];
    
        $sql = "SELECT name, email from users WHERE name = '$login' AND email = '$email'";
        $result = $connection->query($sql);
    
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            }
            $sql2 = "SELECT userid from users WHERE name = '$login'";
            $results2 = $connection->query($sql2);
            if($results2->num_rows2 > 0) {
                while($row = $result2->fetch_assoc()) {
                    $userid = $row['userid'];
                }    
            } else {
                echo "error";
            }
            $response_array['status'] = 'success';
        } else {
            //echo "Error: " . $sql . "<br>" . $connection->error;
            
            $response_array['status'] = 'error';  
        }

        echo json_encode($response_array);

        
        getFields($connection, $userid);
    
        $connection->close();
    }

?>