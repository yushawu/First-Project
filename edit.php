



<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../lib/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/addStud.css">
	</head>
	<body>
		
		<div class="container">

			<div class="jumbotron">

				<h1 style="text-align: center; font-weight: bold;">Student Registration</h1>

				<form action="database.php" method="POST" class="form-group">
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="fname">First Name: </label>
								<input type="text" name="fname" class = "form-control"	 placeholder="First name" required value="<? echo $fname ?>">
							</div>
						</div>
					</div> 
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="lname">Last Name: </label>
								<input type="text" name="lname" class = "form-control" placeholder="Last name" required  value="<? echo $lname ?>">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="oname">Other Name: </label>
								<input type="text" class = "form-control"name="oname" placeholder="Other name"  value="<? echo $oname ?>">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="stid">Student ID: </label>
								<input type="text" class = "form-control"name="stid" placeholder="Enter student ID" required  value="<? echo $stid ?>">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="email">Email: </label>
								<input type="email" class = "form-control"name="email" placeholder="Email" required  value="<? echo $email ?>">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="dob"> Date of Birth:</label>
								<input type="date" class = "form-control"name="dob"  value="<? echo $dob ?>">
							</div>
						</div>
					</div>
					<div class="row justify-content-center" >
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="sex">Sex: </label>
								<select name="sex" class="form-control select-block" required  value="<? echo $sex ?>">
									<option selected hidden>Select Sex</option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="location">Location: </label>
								<input type="text" class = "form-control"name="location" placeholder="Location" required  value="<? echo $location ?>">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="address">Address: </label>
								<textarea class="form-control" name="address" required  value="<? echo $address ?>"></textarea>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="contact">Contact: </label>
								<input type="phone" class = "form-control"name="contact" placeholder="Contact" required  value="<? echo $contact ?>">
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="residence">Residence: </label>
								<select class="form-control" name="residence" required  value="<? echo $residence ?>">
									<option selected hidden>Select your residence</option>
									<option>Dr. Hilla Limann Hall</option>
									<option>Elizbeth Sey</option>
									<option>Alexender Kwapong</option>
									<option>Jean Nelson</option>
									<option>Akuafo Hall</option>
									<option>Commonwealth Hall</option>
									<option>Volta Hall</option>
									<option>Sarbah Hall</option>
									<option>Legon Hall</option>
									<option>Jublee Hall</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="college">College: </label>
								<select class="form-control" name="college" required  value="<? echo $college ?>">
									<option selected hidden>Select your college</option>
									<option>Basic & Apllied Sciences</option>
									<option>Education</option>
									<option>Heaalth Sciences</option>
									<option>Humanities</option>
									<option>School of Graduate Studies</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="department">Department: </label>
								<input type="text" class = "form-control"name="department" placeholder="Department" required  value="<? echo $department ?>">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="course">Course: </label>
								<input type="text" class = "form-control"name="course" placeholder="Course" required  value="<? echo $course ?>">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="father">Father's Name: </label>
								<input type="text" class = "form-control"name="father" placeholder="Father;s Name" required  value="<? echo $father ?>">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="mother">Mother's Name: </label>
								<input type="text" class = "form-control"name="mother" placeholder="Mother's Name" required  value="<? echo $mother ?>">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="haircolor">Hair Color: </label>
								<input type="text" class = "form-control"name="haircolor" placeholder="Hair Color" required  value="<? echo $haircolor ?>">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="eyecolor">Eye Color: </label>
								<input type="text" class = "form-control"name="eyecolor" placeholder="Eye Color" required  value="<? echo $eyecolor ?>">
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<label for="comment">Comment: </label>
								<textarea class="form-control" placeholder="Comment" name="comment"  value="<? echo $comment ?>"></textarea>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<input type="checkbox"name="checkbox" required  value="<? echo $checkbox ?>">
								<label>I'm not a robot!</label>
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-5 col-lg-4">
										<input type="reset" name="reset" class="btn-danger form-control">
									</div>
									<div class="col-sm-7 col-lg-8">
										<input type="submit" name="submit" class="btn-success form-control">
									</div>
								</div>							
							</div>
						</div>
					</div>
				</form>
				

			</div>
		</div>

	</body>
</html>