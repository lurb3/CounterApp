<?php 

    require_once("../common/connectDB.php");

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
            $response_array['status'] = 'success';
        } else {
            //echo "Error: " . $sql . "<br>" . $connection->error;
            
            $response_array['status'] = 'error';  
        }

        echo json_encode($response_array);
    
        $connection->close();
    }

?>