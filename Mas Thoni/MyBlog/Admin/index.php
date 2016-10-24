<?php
	session_start();

	if (!isset($_SESSION['username'])) {
	?>
		<!DOCTYPE html>
		<html>
			<head>
				<title>Admin MyBlog</title>
				<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
			</head>
			<body>
				<div class="col-md-offset-4 col-md-4 well" style="text-align:center; margin-top:120px;">
					<h1 class="login-title">Login</h1>
					<form action="process/login.php" method="POST">
						<div class="input-group form-group">
						  <span class="input-group-addon" id="sizing-addon2">
						  	<i class="glyphicon glyphicon-user"></i>
						  </span>
						  <input type="text" class="form-control" placeholder="Username" name="username" aria-describedby="sizing-addon2">
						</div>
						<div class="input-group form-group">
						  <span class="input-group-addon" id="sizing-addon2">
						  	<i class="glyphicon glyphicon-lock"></i>
						  </span>
						  <input type="password" class="form-control" placeholder="Password" name="password" aria-describedby="sizing-addon2">
						</div>
						<div class="form-group">
							<button type="submit" class="form-control btn btn-primary"><i class="glyphicon glyphicon-log-in"></i> Login</button>
						</div>
					</form>
				</div>

				<script src="../assets/js/jquery-3.1.1.min.js"></script>
				<script src="../assets/js/bootstrap.min.js"></script>
			</body>
		</html>
<?php 
	} else {
		header('location: Home.php');
	}
?>