<link rel="stylesheet" href="templates/styles.css">
<script type="text/javascript" src="templates/script.js"></script>
<?php include "templates/header.php"; include "templates/dbconfig.php";?>
<html>
 <head>
  <title>PHP Test</title>
  <!--
	div = background box--
	#div2 = correct alignment of button
	.button = button style
  -->
  <style>
	div{
		border-radius: 15px;
		border:solid 1px black;
		margin: 100px auto auto auto; 
		width:500px;
		height:600px;
		text-align: center; 
		background-color:#E7EBE0FF;
		padding: 1px;
		color:black;
	}
	
	#div2{
		border-radius: 15px;
		border:none;
		width:280px;
		height:100px;
		text-align: center; 
		background-color:transparent;
		padding: 1px;		
	}
	
	
	#div2:hover{
		transform: scale(1.2);
	}
	
	.button{
		background-color:red; 
		color:white; 
		font-size:16;
		border-radius: 30px; 
		padding: 14px; 
		height:70px; 
		width:200px;
	}
  </style>
 </head>
 <body>
 
	<div>
	
	<h1>Confirmed!</h1>

	 <?php 
	 if(isset($_REQUEST['submit'])) {	//Check for submission
		if(isset($_REQUEST['yes']))
		{ 
			$apt = $_SESSION['apt'];
			$check = "select *from timeslots where Apartment = '$apt'";
			$check_run = mysqli_query($connection, $check);
			if(mysqli_num_rows($check_run) != 0)
			{
				$remove = "update timeslots set Occupied = false, Name = '', Apartment = NULL, Phone = NULL, Comments = '' where Apartment = '$apt'"; //Updates database
				$remove_run = mysqli_query($connection, $remove);	//execute the code
				echo "Successfully Removed!";
			}
			else echo "Unable to delete your reservation";
		}
		
		else header("Refresh:0; url=account.php");
	 }
	 else echo "Failed";

	 ?> 
	 	<div id="div2">
		<button type="button" class="button" onclick="location.href='Reserve.php'">
		Return</button>
		</div>
	</div>

			<footer style="margin-left: 800px; margin-bottom: 1px;">
		  <p>Author: Thurein, Toki, Justin<br>
		  <a href="bmccgroupb@gmail.com">BMCCGroupB@gmail.com</a></p>
		</footer>
 </body>
</html>
