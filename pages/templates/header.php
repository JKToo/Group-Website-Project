<?php
	session_start();
	if(!isset($_SESSION['username'])){ //if login in session is not set
    header("Location: login.php");
}
?>

<link rel="stylesheet" href="styles.css">
<script type="text/javascript" src="script.js"></script>
<html>
	<head>
	<script>
</script>
		<style>

			
		</style>
		
	</head>
	
	<body>
		<label class="switch">
		<input type="checkbox" checked onclick="myFunction()">
		<span class="slider round"></span>
		</label>
		<ul>
	  <li id=buttons><a style= "background-color:transparent;  text-align:center; font-size:60; font-family:Verdana;">GroupB </a></li>
	  <li id=buttons><a style="margin-top:30; margin-left:450" class="active" href="landing.php">&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	  <li><a style="margin-top:30; " href="reserve.php">Reserve&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	  <li><a style="margin-top:30; " href="contact.php">Contact us&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	  <li>	<label class="switch">
	  <li id=li2><a style="margin-top:30; " href="account.php"><img src="images/account2.png" style="height:30;"><br><strong>Account</strong></a></li>
		</ul>
		
		
		
		
	
	</body>
</html>
