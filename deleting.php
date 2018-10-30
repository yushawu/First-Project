<?php 

	//start_session();  

	$mysqli = 	new mysqli("localhost", "root", "", "webtech") or die(mysqli_error($mysqli));

	if(isset($_GET['delete'])){

			$id = $_GET['delete'];
			$mysqli->query("DELETE FROM student WHERE id = $id") or die($mysqli->error());

			// $_SESSION['message'] = "Record has been deleted!";
			// $_SESSION['msg_type'] = "danger";

			header("location:index.php");

	}

?>