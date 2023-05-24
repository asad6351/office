<?php
	include 'db.php';
	$message=$_POST['message']; 
	$sql = "INSERT INTO `chat`( `message`) 	VALUES ('$message')";
	if (mysqli_query($db, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($db);
?>