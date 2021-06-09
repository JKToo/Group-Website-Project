<!--Home page-->

<link rel="stylesheet" href="templates/styles.css">
<script type="text/javascript" src="templates/script.js"></script>
<?php 
include "templates/header.php";
?>

<html>
	<head>
	<!--
	#im3 is for the image specifications
	.button is the button style 
	-->
		<style>
			.center {
			  display: block;
			  margin-left: auto;
			  margin-right: auto;
			  width: 1800;
			  height: 790;
			}
			
			#img3{
				height: 80;
				vertical-align:middle;
				margin-top:-1px;
			}
			
			.button {
				font-size:30px; 
				color:white; 
				background-color:red; 
				margin-left:390px; 
				border-radius: 30px; 
				padding: 15px;
				opacity:0.9;
			}
			.button:hover{
			transform: scale(1.2);
			}
			
		</style>
	</head>
	
	<body>
	


	<div id="img3">
		<img src="images/blue2.jpg" alt="alt-text" class="center"/>
		
	</div>
	<span>
	<p style="margin-left:400px; color:white; margin-top:170px; font-size:40; font-family:Verdana;" >
	<strong>Have your laundry <br>  done at a set <br>time </strong></p> 
	<p style="margin-left:400px; font-size:16; color:white; font-family:Verdana">Reserve now and pick your desired time</p>
	</span>

	


	<button class="button"
	type="button" onclick="location.href='reserve.php'">
	Schedule your weekly wash</button>
	

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<footer style="margin-left: 800px; margin-bottom: 1px;">
		  <p>Author: Thurein, Toki, Justin<br>
		  <a href="bmccgroupb@gmail.com">BMCCGroupB@gmail.com</a></p>
		</footer>
	</body>
</html>
