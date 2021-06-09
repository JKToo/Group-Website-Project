<link rel="stylesheet" href="templates/styles.css">
<script type="text/javascript" src="templates/script.js"></script>
<?php include "templates/header.php"?>
<html>
	<head>
	<script>
	
	</script>
		<style>
			<!--Button style-->
			.button {		
				font-size:25px; 
				color:white; 
				background-color:#02afe6; 
				border-radius: 20px; 
				padding: 15px;
				opacity:0.9;
			}
			
			.button:hover{
			transform: scale(1.2);
			}
			
			<!--Align the text-->
			#div2
			{ 
				width:250px;
				margin-top: 80px;
				margin-left: 820px;
				text-align: center; 
			}
		</style>
	</head>
	
	<body>
		<h1 style="text-align:center;"> Are you sure you want to cancel? </h1>
		
	<div class="div2" style="text-align:center;">
		<form style='text-align:center;' action='confirmation.php' method='post'>
		<input type="radio" name="yes"> Yes
		<input type="radio" name="no"> No
		<br><br>
		<input type="submit" name="submit" value="Confirm">
		</form>

	</div>
	</body>
</html>
