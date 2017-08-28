<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="newstyle.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		
		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="firstname" >
		</div>
		
		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lastname" >
		</div>
		
		<div class="input-group">
			<label>E-Mail Id</label>
			<input type="text" name="emailid">
		</div>
		
		<div class="input-group">
			<label>Phone No</label>
			<input type="text" name="phoneno">
		</div>
		
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"  name="register">Register</button>
		</div>
		<p>Already a Member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>