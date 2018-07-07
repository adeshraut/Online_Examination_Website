<?php
	require 'dbconfig/config.php'; 
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/forgetpassword.css">
</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Reset Password</h2></center>
			
		<form action="forgetpassword.php" method="post">
		
			<div class="inner_container">

				<label><b>ERPNO</b></label>
				<input type="text" placeholder="Enter ERPNO" name="Erp" required >
				
				<label><b>EMAIL</b></label>
				<br>
				<input type="email" placeholder="Enter EmailId" name="email" required >

				<button class="submit" name="submit" type="submit">Submit</button>
				<br />
			</div>
		</form>
		
		<?php

		if(isset($_POST['submit'])){


			$email = $_POST['email'];

			$Erp = $_POST['Erp'];
			 
			$Erp_check = mysqli_query($con,"select * from studentinfo where erpno='$Erp'");
			$Email_check = mysqli_query($con,"select * from studentinfo where Email='$email'");
			$count = mysqli_num_rows($Erp_check);

			if ($count > 0)
			{
				$random = rand(72891515, 45646986);
				$email_password = $random;

				$query = "UPDATE `studentlogin` SET `password`='$email_password' WHERE erpno='$Erp'";

				$result = mysqli_query($con,$query);

				
				echo '<script type="text/javascript">alert("Your new password is '.$email_password.'")</script>';

				header('Refresh:1;url= index.php');
				
			}

		}

	?>
		
	</div>
</body>
</html>