<?php include('server.php') ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log In</title>
<link href="newstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="header">
		<h2>Sign In</h2>
	</div>
	<form method="post" action="login.php">
	
		<?php include('errors.php'); ?>
		
		<div class="input-group">
			<label>User Name</label>
			<input type="text" name="username">
		</div>	
	
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
	
		<div class="input-group">
			<button type="submit" class="btn" name="login" >Log In</button>
		</div>
		
		<p>
			Not Yet A Member? <a href="register.php">Sign Up</a>
		</p>
		
	</form>

</body>
</html>