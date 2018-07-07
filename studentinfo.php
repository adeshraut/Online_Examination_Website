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
					<li><a href="#">Home</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</div>
			<div class="nav-right">
				<ul>
					<li class="green"><a href="#">Logout</a></li>
					<li><a href="studentinfo.php"><?php echo "<b>".$_SESSION['username']."</b>"; ?></a></li>
				</ul>
			</div>
		</nav>
		
		<?php 
			$username = $_SESSION['username'];
			$erpno=mysqli_query($con,"select erpno from studentlogin where username = '$username'"); 
			$row = mysqli_fetch_assoc($erpno);
			$name=mysqli_query($con,"select name from studentinfo i,studentlogin l where i.erpno = l.erpno and l.username = '$username'"); 
			$b = mysqli_fetch_assoc($name);
			$year=mysqli_query($con,"select year from studentinfo i,studentlogin l where i.erpno = l.erpno and l.username = '$username'"); 
			$c = mysqli_fetch_assoc($year);
			
		?>
		
		<!-- Profile -->
		
		<fieldset>
			<legend><B>Profile</B></legend>
			ERP No: <?php echo "".$row['erpno'].""; ?>
			<br><br>
			Name: <?php echo "".$b['name'].""; ?>
			<br><br> 
			Year: <?php echo "".$c['year'].""; ?> 
		</fieldset>

		<!-- Recent Exams -->

		<fieldset>
			<legend><B>Recent Exams</B></legend>
			<table id="exam-names" align="center">
				<tr>
					<td><a href="instructions.php">
							<?php 
								$query = mysqli_query($con,"select name from course");
								$row = mysqli_fetch_assoc($query);
								echo "".$row['name']."";
								$a = $row['name'];
								$q = mysqli_query($con,"select cid from course where name='$a'");
								$cid = mysqli_fetch_assoc($q);
								$_SESSION["cid"] = $cid['cid'];

							 ?>
						</a>
					</td>
				</tr>
				<tr>
					<td><a href="#"></a></td>
				</tr>
				<tr>
					<td><a href="#"></a></td>
				</tr>

			</table>
		</fieldset>

		<!-- Reommended Exams -->

		<fieldset>
			<legend><B>Recommended Exams</B></legend>
			<table id="exam-names" align="center">
				<tr>
					<td><a href="#"></a></td>
				</tr>
				<tr>
					<td><a href="#"></a></td>
				</tr>
				<tr>
					<td><a href="#"></a></td>
				</tr>

			</table>
		</fieldset>

		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>