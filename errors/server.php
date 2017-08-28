<?php     
    session_start();
    
	$username = "";
	$firstname = "";
	$lastname = "";
	$emailid = "";
	$phoneno = "";
	$password = "";
	$errors = array();
	
	$_SESSION['success'] = "";

	$db = mysqli_connect('fdb16.atspace.me','2414881','marwa007','2414881_registration');
	
	if(isset($_POST['register'])) {
		$username = mysql_real_escape_string($db, $_POST['username']);
		$firstname = mysql_real_escape_string($db, $_POST['firstname']);
		$lastname = mysql_real_escape_string($db, $_POST['lastname']);
		$emailid = mysql_real_escape_string($db, $_POST['emailid']);
		$phoneno = mysql_real_escape_string($db, $_POST['phoneno']);
		$password_1 = mysql_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysql_real_escape_string($db, $_POST['password_2']);
		
				if (empty($username)) { array_push($errors,"User name is Required"); }
				if (empty($firstname)) { array_push($errors,"First Name is Required"); }
				if (empty($lastname)) { array_push($errors,"Last Nameis Requirexd"); }
				if (empty($emailid)) { array_push($errors,"E-mail ID is Required"); }
				if (empty($phoneno)) { array_push($errors,"Phone No is Required"); }
				if (empty($password_1)) { array_push($errors,"Password is Required"); }
				
				if ($pasword_1 != $password_2) { array_push($errors,"Password Unmatch!!"); }
				
				if (count($errors) == 0) {
					$password = md5($password_1);
					$query = "INSERT INTO users (username, firstname, lastname, emailid, phoneno, password )
					VALUES ('$username', '$firstname', '$lastname', '$emailid', '$phoneno', '$password')";  
					
					mysqli_query($db, $query); 
					
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "You Are Now Logged In";
					header('location: index.php');
			}	
			
			
		}

		//get user in from login page
		if (isset($_POST['login'])) {
			$username = mysql_real_escape_string($db, $_POST['username']);
			$password = mysql_real_escape_string($db, $_POST['password']);
		
		//ensuring fields are filled properly
		if (empty($username)){
				array_push($errors, "User name is Required");
			}
		if (empty($password)){
				array_push($errors, "Password is Required");
			}
		
			if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username= '$username' AND password= '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				//log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You Are Now Logged In";
				header('location: index.php');
				
			}
			else {
				array_push($errors, "wrong combination of user name/password!!");
				header('location: login.php');
			}
			
			
	 	}
	}
		//logout
			if (isset($_GET['logout'])) {
				session_destroy($_SESSION['username']);
				header('location: login.php');
			}

			if (!isset($_SESSION['username'])) {
			$_SESSION['msg'] = "You must log in first";
			header('location: login.php');
			}
	
			if (isset($_GET['logout'])) {
			session_destroy();
			unset($_SESSION['username']);
			header("location: login.php");
			}

?>	