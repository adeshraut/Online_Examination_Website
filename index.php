<?php
	require 'dbconfig/config.php'; 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Online Exam</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
	
	<!-- NAVBAR -->
	
	<nav class="navb">
		<div class="nav-left">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
		</div>
		<div class="nav-right">
			<ul>
				<li class="green"><a href="#" id="loginBtn" onclick="loginFun()">Log In</a></li>   
				<li><a href="#" id="signupBtn" onclick="signupFun()">Create an Account</a></li>
			</ul>
		</div>
	</nav>
	
	<!-- MODAL -->
	
	<div id="loginModal" class="modal">
		<div class="modalContent">
			<div class="modalHeader">
				<span class="close" onclick="closeFun()">&#9874;</span>
			</div>
			<div class="modalBody">
				<div class="loginBox">
					<h1>Login Form</h1><br>
					<form name="loginform" method="POST" action="index.php" onsubmit="return loginvalidFun()">
						<p>Username</p>
						<input type="text" id="logusername" name="logusername" placeholder="Enter Username" required>
						<p>Password</p>
						<input type="password" id="logpassword" name="logpassword" placeholder="Enter Password" required><br>
						<p><input type="checkbox" name="teachercheck" id="teacheck"> I'm a teacher </p>
						<input type="submit" id="submitloginBtn" name="submitloginBtn" value="Log In" >
						<a href="forgetpassword.php">Forget Password</a>
					</form>

					<?php
					 	if (isset($_POST['submitloginBtn'])) {
					 		$username = $_POST['logusername'];
					 		$_SESSION["username"] = $username;
					 		$password = $_POST['logpassword'];
					 		$_SESSION["password"] = $password;

					 		if(isset($_POST['teachercheck'])){
					 			$query = "select * from teacherlogin where username='$username' and password='$password';";
					 			$result = mysqli_query($con,$query);
					 			$check = mysqli_num_rows($result);
					 			if($check > 0){
					 				echo "<script type='text/javascript'>alert('Logging In...');</script>";
					 				header('Refresh:1;url=teacherinfo.php');
					 			}
					 			else{
					 				echo "<script type='text/javascript'>alert('Incorrect Credentials...(T)')</script>";
					 			}
					 		}
					 		else {
					 			$query = "select * from studentlogin where username='$username' and password='$password';";
					 			$result = mysqli_query($con,$query);
					 			$check = mysqli_num_rows($result);
					 			if($check > 0){
					 				echo "<script type='text/javascript'>alert('Logging In...');</script>";
					 				header('Refresh:1;url= studentinfo.php');
					 			}
					 			else{
					 				echo "<script type='text/javascript'>alert('Incorrect Credentials...(S)')</script>";
					 			}
					 		}
					 	}
					 ?> 
				</div>
			</div>
		</div>
	</div>

	<div id="signupModal" class="modal">
		<div class="modalContent">
			<div class="modalHeader">
				<span class="close" onclick="closeFun()">&#9874;</span>
			</div>
			<div class="modalBody">
				<div class="signupBox">
					<h1>Create An Account</h1><br>
					<form name="signupform" method="POST" action="index.php" onsubmit="return signupvalidFun()">
						<p>Please fill in this form to create an account.</p><br>
						<p><b>Name</b></p>
						<input type="text" id="name" name="fullname" placeholder="Enter Full Name" required>
						<p><b>Sex</b></p><br>
						<input type="radio" name="gender" value="male" > Male
						<input type="radio" name="gender" value="female"> Female
						<input type="radio" name="gender" value="other"> Other
						<p><b>ERP No.</b></p>
						<input type="text" id="erpno" name="erpno" placeholder="Enter ERP No." required>
						<p><b>Year</b></p><br>
						<input type="radio" name="year" value="F.E.">F.E.
						<input type="radio" name="year" value="S.E.">S.E.
						<input type="radio" name="year" value="T.E.">T.E.
						<input type="radio" name="year" value="B.E.">B.E.
						<p><b>Email</b></p>
						<input type="text" id="email" name="email" placeholder="xyz@gmail.com" required>						  
						<p><b>Username</b></p>
						<input type="text" id="signusername" name="signusername" placeholder="Enter Username" required>
						<p><b>Password</b></p>
						<input type="password" id="signpassword" name="signpassword" placeholder="Enter Password" required>
						<p><b>Re-enter Password</b></p>
						<input type="password" id="re-password" placeholder="Re-enter Password" required>
						<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms &amp; Conditions</a> .</p><br>
						<input type="submit" id="submitsignupBtn" name="submitsignupBtn" value="Sign Up" >
					</form>

					<?php
						if (isset($_POST['submitsignupBtn'])) {
							
							$name = $_POST['fullname'];
							$gender = $_POST['gender'];
							$erpno = $_POST['erpno'];
							$year = $_POST['year'];
							$email = $_POST['email'];

							$query1 = "insert into studentinfo values ('$name','$gender','$erpno','$year','$email')";
							$result1 = mysqli_query($con,$query1);
							echo "<script type='text/javascript'>alert('query1')</script>";


							$username = $_POST['signusername'];
							$password = $_POST['signpassword'];
							
							$query2 = "insert into studentlogin values ('$username','$password','$erpno')";
							$result2 = mysqli_query($con,$query2);
							echo "<script type='text/javascript'>alert('query2')</script>";

							if($result1){
								if($result2){
									echo "<script type='text/javascript'>alert('USERID has been created ...')</script>";
									header('location: index.php');
								}
							}
							else{
								echo "<script type='text/javascript'>alert('Incorrect Credentials...(SIGNUP)')</script>";
							}


						}
					 ?>

				</div>
			</div>
		</div>
	</div>

	

	<!-- BODY -->
	<div id="examsfieldset">
		<fieldset class="center">
			<legend><B>Upcoming Exams</B></legend>
			<table id="exam-names" align="center">
				<tr>
					<td><a href="#">Exam 1</a></td>
				</tr>
				<tr>
					<td><a href="#">Exam 2</a></td>
				</tr>
				<tr>
					<td><a href="#">Exam 3</a></td>
				</tr>

			</table>
		</fieldset>
	</div>
	<script type="text/javascript" src="js/index.js"></script>	

</body>
</html>