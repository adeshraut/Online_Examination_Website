<?php
	require 'dbconfig/config.php'; 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="uft-8"/>
	<title>Exam Page</title>
	<link rel='stylesheet' type='text/css' href='css/question.css' />
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
</head>
<body>
	

	<div id="container">
		<h1>Embedded Systems and Internet of Things</h1>
			<p> 
				Welcome to Exam! Answer the questions below. Your score will be displayed once all the questions have been answered. Good Luck!
			</p>
	  
		<div id="main">
				<!-- <?php 
					$cid = $_SESSION['cid'];
					$query = "select question,a,b,c,d from questionbank q  where cid='$cid'";
					$result = mysqli_query($con,$query);
					$row = mysqli_fetch_assoc($result);
				?> -->	

			<h3 id="questions" class="card">
 				<!-- <?php
					echo "".$row['question']."";
				  ?> -->
			</h3>
			<div id="choices" >
				<input type="radio" name="choice" value = 0><span id="answer0">
					<!-- <?php echo "".$row['a']."";?> --></span>
				<br />
				<br />
				<input type="radio" name="choice" value = 1><span id="answer1">
					<!-- <?php echo "".$row['b']."";?> --></span>
				<br />
				<br />
				<input type="radio" name="choice" value = 2><span id="answer2">
					<!-- <?php echo "".$row['c']."";?> --></span>
				<br />
				<br />
				<input type="radio" name="choice" value = 3><span id="answer3">
					<!-- <?php echo "".$row['d']."";?> --></span>
				<br />
				<br />
				
			</div>
			<div>
			<br />
				<button id="nextBtn" onclick="nextque()">Next</button>
				<br />
			</div>
		</div
	</div>
	<script src='js/question.js'></script>
</body>
</html>
