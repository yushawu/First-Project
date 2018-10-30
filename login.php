<!DOCTYPE html>
<html>
	<head>
		<title></title>

		<link rel="stylesheet" type="text/css" href="../lib/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="">
	</head>



	<body>

		

		<div class="container">
			<div class="jumbotron">
				<h1 style="text-align: center; font-weight: bold; font-style:  ">Student Login</h1>
				<form class="form-group-content-center" action="" method="POST" >
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<input type="text" name="username" value="" class="form-control" placeholder="Username" id="username">
							</div
>						</div>
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
								<p id="success"></p>
							</div
>						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<a href="javascript:void(0)" onclick="shaffs();">Forgot password</a>
							</div
>						</div>
					</div>		
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<a id="link" href="javascript:void(0)" onclick="goHome(); return false;"><button type="click" name="save" id="submit" class="btn btn-block btn-success">Login</button></a>
							</div
>						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-sm-4 col-lg-4">
							<div class="form-group">
								<a href="create.php">Don't have account</a>
							</div
>						</div>
					</div>					
				</form>
			</div>
		</div>


		
		<script type="text/javascript">

			var pass = document.getElementByid("username").val();
			alert(pass);
			
		</script>

	</body>
</html>