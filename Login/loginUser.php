<?php 

    require_once("../common/connectDB.php");
    require_once("../common/getFields.php");

    loginUser($conn);

    function loginUser($connection) {
        $login = $_GET['login'];
        $email = $_GET['email'];
    
        $sql = "SELECT userid, name, email from users WHERE name = '$login' AND email = '$email'";
        $result = $connection->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
               $userid = $row['userid'];
               $fields = [
                'userid' => $row['userid'],
               ];
            }
        } else {
            //echo "Error: " . $sql . "<br>" . $connection->error;
        }

        getFields($connection, $fields['userid']);
    }

?>