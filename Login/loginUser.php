<?php 

    require_once("../common/connectDB.php");
    require_once("../common/getFields.php");

    loginUser($conn);

    function loginUser($connection) {

        $login = $_GET['login'];
        $email = $_GET['email'];

        $sql = "SELECT userid,name, email from users WHERE name = '$login' AND email = '$email'";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                $userInfo['name'] = $row['name'];
                $userInfo['email'] = $row['email'];
                $userInfo['userid'] = $row['userid'];
            }

            getFields($connection, $userInfo['userid']);

            $userInfo['teste'] = $_SESSION['userInfo2'];
            
            $userInfo['status'] = 'Success';
        } else {
            $userInfo['status'] = 'Error';  
        }

        $myJSON = json_encode($userInfo);

        echo $myJSON;

        
       // getFields($connection, $userid);
        session_abort();
        $connection->close();
    }

?>