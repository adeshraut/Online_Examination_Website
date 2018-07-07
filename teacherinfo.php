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
				<li><a href="teacherinfo.php"><?php echo "<b>".$_SESSION['username']."</b>"; ?></a></li>
			</ul>
		</div>
	</nav>

	<!-- BODY -->

	<fieldset class="Center">
		<legend><B>Exam Shelf</B></legend>
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

			<!-- Button -->

	<button type="button" class="button btn-success">Add New Exam</button>

	<button type="button" class="button btn-danger">Delete Exam</button>

	</fieldset>	

	<script type="text/javascript" src="js/index.js"></script>	

</body>
</html>