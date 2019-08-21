<?php 

	require_once("../common/connectDB.php");
	require_once("../common/infos.php");

	loginUser($conn);

	function loginUser($connection) {
		$login = $_POST['login'];
		$email = $_POST['email'];
		$currentDate = date("Y-m-d");

		$sql = "SELECT name, email from users WHERE name = '$login' AND email = '$email'";
		$result = $connection->query($sql);

		if ($result->num_rows == 0) {
			$sql2 = "INSERT INTO users (name, email, insertdate) VALUES ('$login', '$email', '$currentDate')";
			$connection->query($sql2);
			//$response_array['status'] = 'success';  
		} else {
			//$response_array['status'] = 'Duplicate';
		}

		//echo json_encode($response_array);

		$connection->close();
	}

?>