<?php 

	$mysqli = new mysqli("localhost", "root", "", "webtech") or die(mysqli_error($mysqli));

	$result = $mysqli->query("SELECT * FROM student") or die($mysqli->error);
	
	

	?>
		<!DOCTYPE html>
		<html>
			<head>
				<title>	</title>
				<link rel="stylesheet" type="text/css" href="../lib/bootstrap.min.css">

				<style type="text/css">
					#table{
						font-size: 15px;
						background-color: 
					}
				</style>


			</head>
			<body>



				<div class="row justify-content-center">
					<table class="table" id="table">
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Other Name</th>
								<th>Student ID</th>
								<th>Email</th>
								<th>Date of Birth</th>
								<th>Sex</th>
								<th>location</th>
								<th>Address</th>
								<th>Contact</th>
								<th>Residence</th>
								<th>College</th>
								<th>Department</th>
								<th>Course</th>
								<th>Father's Name</th>
								<th>Mother's Name</th>
								<th>Hair Color</th>
								<th>Eye Color</th>
								<th>Comment</th>
								<th></th>
							</tr>
						</thead>

						<?php 	while($row = $result->fetch_assoc()): ?>

						<tbody>
							<tr>
								<td><?php echo $row['fname']; ?></td>
								<td><?php echo $row['lname']; ?></td>
								<td><?php echo $row['oname']; ?></td>
								<td><?php echo $row['stid']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['dob']; ?></td>
								<td><?php echo $row['sex']; ?></td>
								<td><?php echo $row['location']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['contact']; ?></td>
								<td><?php echo $row['residence']; ?></td>
								<td><?php echo $row['college']; ?></td>
								<td><?php echo $row['department']; ?></td>
								<td><?php echo $row['course']; ?></td>
								<td><?php echo $row['father']; ?></td>
								<td><?php echo $row['mother']; ?></td>
								<td><?php echo $row['haircolor']; ?></td>
								<td><?php echo $row['eyecolor']; ?></td>
								<td><?php echo $row['comment']; ?></td>
								<td>
									<a href="deleting.php?delete=<?php echo $row['id'] ?>" class = "btn btn-danger">Delete</a>
								</td>
							</tr>
						</tbody>

					<?php 	endwhile; ?>

					</table>
				</div>	
			</body>
		</html>
	<?php

	function pre_r($array){
		echo '<pre>';
		print_r($array);
		echo '</pre>';
	}
	
?>


