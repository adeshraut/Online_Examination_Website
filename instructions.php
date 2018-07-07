<html>
<head>
<title>Instructions page</title>
<link rel="stylesheet" type="text/css" href="css/instructions.css">
<script type="text/JavaScript" >
		function startexam(){
			
			var start = document.getElementById('start');
			var check = document.getElementById('myCheck');
			
			if(!check.checked){
					alert("Please check the checkbox...");
			}else{
				
				window.location.href="exam.html";
			}
		}
		
</script>
</head>
<body>

	<center><h3>INSTRUCTIONS FOR THE ONLINE EXAM</h3></center><br>
	<p>1.Arrive at the examination venue at least 15 minutes before the start of the examination / 35 minutes before a digital examination.</p>
	<p>2.Law: The examination starts at the moment the book control begins, and you must therefore be present by 8.20 a.m. for regular written examinations and 8.10 a.m. at digital examinations.</p>
	<p>3.When using a laptop at digital examinations, the laptop has to be set up as soon as possible. If you are taking a law exam, the laptop must be set up before the book control.</p>
	<p>4.Coats, backpacks, bags, etc. must be placed as directed. Mobile phones, mp3 players, smartwatches and other electronic devices must be turned off and put away, and cannot be stored in coats or pockets.</p>
	<p>5.If support material, other than that which is specifically permitted, is found at or by the desk, it may be treated as an attempt to cheat and relevant procedures for cheating will be followed.</p>
	<p>6.The head invigilator will provide information about examination support materials that you are permitted to use during the examination. All dictionaries must be approved by the faculty before the exam and will be handed out in the exam venue by the invigilators.</p>

	<font color="green">
		<input type="checkbox" id="myCheck" value="check">
			I have read all instructions for the exam
	</font>
	<br><br>
	<font id = "submit" color="red">
		<center>
			<button type="button" id="start" onclick="startexam()">START EXAM</button>
		</center>
	</font>
	

</body>
</html>


