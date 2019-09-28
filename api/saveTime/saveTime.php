<?php 

require_once("../common/connectDB.php");

saveData($conn);

function saveData($connection) {
	$time = $_POST['time'];
	$user = $_POST['user'];
	if(isset($_POST['categories'])) {
		$categories = $_POST['categories'];
	}
	if(isset($_POST['subject'])) {
		$subject = $_POST['subject'];
	}

	if(isset($categories)) {
		$sql2 = "INSERT INTO categories (name, time, userid) VALUES ('$categories', $time, $user)";
		$result2 = $connection->query($sql2);
		if ($result2 === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql2 . "<br>" . $connection->error;
		}
	}

	if(isset($subject)) {
		$sql = "INSERT INTO subjects (name, time, userid) VALUES ('$subject', $time, $user)";
		$results = $connection->query($sql);
		if ($results == TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $connection->error;
		} 
	  
	}

    $connection->close();
}

    
?> 