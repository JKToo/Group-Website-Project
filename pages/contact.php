<link rel="stylesheet" href="templates/styles.css">
<script type="text/javascript" src="templates/script.js"></script>
<?php include "templates/header.php"?>
<html>
<head>
	<!--
	div = align the text
	#email = style for email text box
	#name = style for name text box
	#apt = Style for the Apartment text box
	#submission = Style for the submission text box
	#submission:hover = Expands upon hovering
	#msg = Style for message text box
	-->
	<style>
		body{
			background-repeat: no-repeat;
				background-size: 1950px 1000px;				
			}
			
			h1{
				text-align:center;
				margin: 100 auto;
			}
			
			div 
			{ 
				border-radius: 15px;
				border:solid 1px black;
				margin: 50px auto auto auto; 
				width:500px;
				height:680px;
				text-align: center; 
				background-color:#E7EBE0FF;
				padding: 1px;
			}
		
			
			#email {				
			border-radius: 10px;
			border: 2px solid black;
			padding: 15px; 
			margin-top:10px;
			width: 350px;
			height: 1px; 
			}
			
			#name {
			border-radius: 10px;
			border: 2px solid black;
			padding: 15px; 
			width: 350px;
			height: 1px; 
			}
			
			#apt {				
			border-radius: 10px;
			border: 2px solid black;
			padding: 15px; 
			margin-top:10px;
			width: 350px;
			height: 1px; 
			}
			
			#submission {
			  width: 100%;
			  background-color:#02afe6;;
			  color: white;
			  padding: 5px 10px;
			  margin: 10px 0;
			  border: none;
			  border-radius: 4px;
			  cursor: pointer;
			}
			
			#submission:hover{
			transform: scale(1.2);
			}
			
			.center {
			  display: block;
			  margin-left: auto;
			  margin-right: auto;
			}
			
			#msg {
				border-radius: 10px;
				border: 2px solid black;
				padding: 15px; 
				margin-top:10px;
				width: 350px;

			}
			
			#label{
				margin-top:80px;
			}
			</style>
</head>
	<body>
	
		<p style="text-align:center;"> Note: Response may take up to 48 hours. </p>
	<div>
		<form style="color:black;" method="post" action="email.php">
		<br><br><br>
		  <label  id="label" for="email">&nbsp;<strong>Email:</strong></label> <br>
		  <input  type="text" id="email" name="email"><br><br>
		  <label  for="name"><strong>Name:</strong></label><br>
		  <input  type="text" id="name" name="name"><br><br>
		  <label  for="apt"><strong>Apartment Number:</strong></label>
		  <input  type="text" id="apt" name="apt"><br><br>
		  <label  for="apt"><strong>Subject:</strong></label> <br>
		  <input  type="text" id="apt" name="subject"><br><br>
		  <label for="message"> <strong>Comments:</strong></label> <br>
		  
		  <textarea id="msg" name="msg" rows="10" cols="50"> </textarea>
		  
		   <br>
		  <input type="submit" value="Send Email" id="submission" style="height:30px; width:100px;">
		</form>
		</div>
	

		<footer style="margin-left:800px;">
		  <p>Author: Thurein, Toki, Justin<br>
		  <a href="bmccgroupb@gmail.com">BMCCGroupB@gmail.com</a></p>
		</footer> 
		
	</body>
</html>
