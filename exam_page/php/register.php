<?php
	if (isset($_POST['submitted'])) {
		include('connect_mysql.php');

		$uname = $_POST['uname'];
		$pword = $_POST['pword'];
		$sqlinsert = "INSERT INTO users SET password='$pword', username='$uname'";

		if (!mysqli_query($dbcon, $sqlinsert)) {
			die('error cannot insert new user');
		}

		$newuser = "Registration successful.";	
	}
?>


<html>
	<head>
		<title>
			Quiz App - Register Now
		</title>
		<link rel='stylesheet' type='text/css' href='css/reset.css' />
		<link rel='stylesheet' type='text/css' href='css/stylesheet.css' />
		<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</head>
	<body>
		<div id="navbar">
			<ul class="navbar-left" >
				<li class="home"><a href="index.html">Home</a></li>
			</ul>
			<ul class="navbar-right">
				<li class="register"><a href="register.php">Register</a></li>
				<li class="log-in"><a href="log-in.php">Log In</a></li>
			</ul>
		</div>

		<div id="container">
		<h1>Quiz App</h1>
			<p> 
				Please complete the form below create an account. Then log in to access your account and save your quiz data.
			</p>	
			<div id="main">
				<h3 id="questions" class="card"></h3>
				<form method="post" action="register.php">
				<input type="hidden" name="submitted" value="true" />
				<fieldset>
					<legend>Register</legend>
					<br />
					<label>Username </label><br />
					<input type="text" name="uname" />
					<br />
					<label>Password </label><br />
					<input type="password" name="pword" />
				</fieldset>
				<br />
				<input type="submit" value="Submit" id="submit"/>
				</form>
					<?php
						echo $newuser
					?>
			</div>
		</div>
	</body>
</html>