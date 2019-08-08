<?php 

	require_once("../common/connectDB.php");
	require_once("../common/infos.php");

	loginUser($conn);

	function loginUser($connection) {
		$login = $_GET['login'];
		$email = $_GET['email'];

		$sql = "SELECT name, email from users WHERE name = '$login' AND email = '$email'";
		$result = $connection->query($sql);
		/*
		TODO :
		FIX THIS QUERY:

		- This query somehow is ignoring if the user already exists
		*/

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {

			}

			$response_array['status'] = 'error';
		} else {
			$sql2 = "INSERT INTO users (name, email, insertdate) VALUES ('$login', '$email', '$currentDate')";
			$result2 = $connection->query($sql2);

			if ($result2 === TRUE) {

			} else {
				$response_array['status'] = 'error';
			} 
			
			$response_array['status'] = 'success';  
		}

		echo json_encode($response_array);

		$connection->close();
	}

?>