<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../lib/bootstrap.min.css">
	</head>


	<body>

		<div class="jumbotron">
			<h1 style="text-align: center; font-weight: bold;">Create Account</h1>
			<form class="form-group justify-content-center">
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<input type="text" name="username" value="" class="form-control" placeholder="username" id="username">
							</div>
							<div class="form-group">
								<p id="empty">User name can't be empty**</p>
								<p id="less">User name can't be less than 5**</p>
								<p id="great">User name can't be greater than 20</p>
								<p id="good">User name accepted</p>
							</div>
							
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<input type="password" name="password" value="" class="form-control" placeholder="Password" id="password">
							</div
>						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<input type="password" name="cpassword" value="" class="form-control" placeholder="Confirm password" id="cpassword">
							</div>
							<div class="form-group">
								<p id="sms">Password match</p>
								<p id="smsn">Password don't match</p>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<input type="checkbox"name="checkbox" id="checkbox">Accept terms and conditiona
							</div>
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<button id="button" type="submit" name="button" class="btn btn-block btn-success ">Create</button>
							</div
>						</div>
					</div>
			</form>
		</div>




		<script type="text/javascript" src="../lib/jquery-1.8.0.min.js"></script>
		<script type="text/javascript" src="../lib/jquery.validate.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){

				$("#sms").hide();
				$("#smsn").hide();

				$("#empty").hide();
				$("#less").hide();
				$("#great").hide();
				$("#good").hide();

				var isMatch = false;

				$("#username").keyup(function(){
					var user = $("#username").val();

					if( user == ""){
						$("#good").hide();
						$("#great").hide();
						$("#less").hide();
						$("#empty").show();
						$("#empty").css("color", "red");
						$("#username").css("border", "3px solid red");
					}

					else if (user.length < 5){
						$("#good").hide();
						$("#great").hide();
						$("#empty").hide();
						$("#less").show();
						$("#less").css("color", "red");
						$("#username").css("border", "3px solid red");
					}

					else if (user.length > 20){
						$("#good").hide();
						$("#less").hide();
						$("#empty").hide();
						$("#great").show();
						$("#great").css("color", "red");
						$("#username").css("border", "3px solid red");
					}

					else{
						$("#empty").hide();
						$("#less").hide();
						$("#great").hide();
						$("#good").show();
						$("#good").css("color", "green");
						$("#username").css("border", "3px solid green");
					}
				});
				

				$("#cpassword").keyup(function(){
					if ($("#password").val() == $(this).val()) {
						isMatch = true;
						$(this, "#password").css("border", "3px solid green");
						$("#smsn").hide();
						$("#sms").show();
					 	$("#sms").css("color", "green");

					 	if(isMatch){
					 		$("#password").css("border", "3px solid green");
					 	}
					}
					else {
						$(this, "#password").css("border", "3px solid red");
						$("#sms").hide();
						$("#smsn").show();
						$("#smsn").css("color", "red")	
					}
				});

				$("#password").keyup(function(){

					if ($("#cpassword").val() == $(this).val()) {

						isMatch = true;

						$(this, "#cpassword").css("border", "3px solid green");
						$("#smsn").hide();
						$("#sms").show();
					 	$("#sms").css("color", "green");

					 	if(isMatch){
					 		$("#cpassword").css("border", "3px solid green");
					 	}	
					}
					else {
						$(this, "#cpassword").css("border", "3px solid red");
						$("#sms").hide();
						$("#smsn").show();
						$("#smsn").css("color", "red")
					}
				});

			});
		</script>
	</body>
</html>