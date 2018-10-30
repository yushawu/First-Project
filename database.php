<?php 

	

	$mysqli = 	new mysqli("localhost", "root", "", "webtech") or die(mysqli_error($mysqli));
	
	if(isset($_POST['submit'])){

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

		$mysqli->query("INSERT INTO student(fname, lname, oname, stid, email, dob, sex, location, address, contact, residence, college, department, course, father, mother, haircolor, eyecolor, comment) VALUES ('$fname', '$lname', '$oname', '$stid', '$email', '$dob', '$sex', '$location', '$address', '$contact', '$residence', '$college','$department', '$course', '$father', '$mother', '$haircolor', '$eyecolor', '$comment')") or die(mysqli_error($mysqli));
		
	


	}

	



 
?>