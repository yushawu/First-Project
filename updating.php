<?php 
	
	$mysqli = new mysqli("localhost", "root", "", "webtech") or die(mysqli_error($mysqli));

			$fname = "";
			$lname = "";
			$oname = "";
			$stid = "";
			$email = "";
			$dob = "";
			$sex = "";
			$location = "";
			$address = "";
			$contact = "";
			$residence = "";
			$college = "";
			$department = "";
			$course = "";
			$father = "";
			$mother = "";
			$haircolor = "";
			$eyecolor = "";
			$comment = ""; 



	if(isset($_GET['edit'])){
		$id = $_GET['edit'];
		$result = $mysqli->query("SELECT FROM student WHERE id = $id") or die($mysqli->error());

		if(count($result) == 1){

			$row = $result->fetch_array();

			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$oname = $_POST['oname'];
			$stid = $_POST['stid'];
			$email = $_POST['email'];
			$dob = $_POST['dob'];
			$sex = $_POST['sex'];
			$location = $_POST['location'];
			$address = $_POST['address'];
			$contact = $_POST['contact'];
			$residence = $_POST['residence'];
			$college = $_POST['college'];
			$department = $_POST['department'];
			$course = $_POST['course'];
			$father = $_POST['father'];
			$mother = $_POST['mother'];
			$haircolor = $_POST['haircolor'];
			$eyecolor = $_POST['eyecolor'];
			$comment = $_POST['comment'];

		}
	}

	

?>