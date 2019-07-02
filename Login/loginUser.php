<?php 

    require_once("../common/connectDB.php");

    loginUser($conn);

    function loginUser($connection) {
        $login = $_GET['login'];
        $email = $_GET['email'];
    
        $sql3 = "SELECT name, email from users WHERE name = '$login' AND email = '$email'";
        $result = $connection->query($sql3);
    
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                print_r($row);
            }
        } else {
            echo "Error: " . $sql3 . "<br>" . $connection->error;
        }
    
    
        $connection->close();
    }

?>