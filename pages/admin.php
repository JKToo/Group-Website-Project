<?php
	session_start();
	if(!isset($_SESSION['username'])){ //if login in session is not set
    header("Location: login.php");
}
 include "templates/dbconfig.php";?>
<html>
	<head>
	<script>
	//Depending on which button is clicked, it will display the content for that
		function showPass() {
		  var x = document.getElementById("myInput");
		  if (x.type === "password") {
			x.type = "text";
		  } else {
			x.type = "password";
		  }
		}
		
		function changeMessage(c)
		{
			if (c == 'register') //Register a new account form
			{
			document.getElementById("message").innerHTML = 	"<form "+
			"action='changeinfo.php'>"+	
			"<label for='apt'><br><br>Apartment: </label>"+ 
			"<input type='text' name='apt' style='width:50px; height: 20px;'><br><br>"+
			"<label for='user' style='margin-left:20px;'>Username: </label>"+ 
			"<input type='text' name='user' style='width:200px; height: 20px;'>"+	
			"<label for='password' ><br><br>Password: </label>"+ 
			"<input type='password'  id='myInput' name='passwordnew1' style='width:200px; height: 20px;'><br>"+
			"<input type='checkbox' onclick='showPass()'>Show Password<br><br>"+
			"<label for='password' style='margin-left:-60px;'>Confirm Password: </label>"+
			"<input type='password' name='passwordnew2' style='; width:200px; height: 20px;'><br><br>"+
			"<input type='submit' value='Register account' name='admincreate' style='height:30px; width:150px;'></form>"		
			}
			
			else if (c == 'delete')	//Delete an account form
			{			
				document.getElementById("message").innerHTML = 	"<form "+
			"action='changeinfo.php'>"+	
			"<label for='apt'><br><br>What apartment number's account would you like to delete? </label>"+ 
			"<input type='text' name='apt' style='width:50px; height: 20px;'><br><br>"+
			"<input type='submit' value='Delete account' name='admindelete' style='height:30px; width:150px;'></form>";
			}	
			
			else if (c == 'reset')	//Reset a password for an account form
			{			
				document.getElementById("message").innerHTML = 	"<form "+
			"action='changeinfo.php'>"+	
			"<label for='apt'><br><br>Enter the Apartment Number of whom password you wish to reset: </label>"+ 
			"<input type='text' name='apt' style='width:50px; height: 20px;'><br><br>"+
			"<label for='user'>Enter the Username of which the account is registered under: </label>"+ 
			"<input type='text' name='user' style='width:200px; height: 20px;'><br><br>"+
			"<label for='password'>Enter the password you'd like to reset it to: </label>"+ 
			"<input type='text' name='password' style='width:200px; height: 20px;'><br><br>"+
			"<input type='submit' value='Reset Password' name='adminreset' style='height:30px; width:150px;'></form>";
			}	
			
			
			else if (c == 'removereservation')	//Remove a reservation form
			{			
			document.getElementById("message").innerHTML = 	"<form "+
			"action='changeinfo.php'>"+	
			"<label for='apt'><br><br>Which apartment's reservation would you like to remove? </label>"+ 
			"<input type='text' name='apt' style='width:50px; height: 20px;'><br>"+
			"<label for='apt'><br><br>Please enter the name the reservation is under: </label>"+ 
			"<input type='text' name='name' style='width:150px; height: 20px;'><br><br>"+
			"<input type='submit' value='Remove reservation' name='reservationdelete' style='height:30px; width:150px;'></form>";
			}	
			
			else if (c == 'view')	//View reservations or accounts form
			{			
			//document.getElementById("message").innerHTML = "<strong><a href='' onclick='popUp()' name='reserved'>Reserved</a></strong> &nbsp&nbsp&nbsp<strong> <a href='' onclick='popUp() name='accounts'>Accounts</a></strong>"
			document.getElementById("message").innerHTML = 	"<form action='reserved.php' method='post'>"+	
			"<input type='radio' name='select' value='acc'><strong>Accounts</strong> &nbsp&nbsp&nbsp"+
			"<input type='radio' name='select' value='reserve'><strong>Reservations</strong><br><br>"+
			"<input type='submit' value='Check' name='check' style='height:30px; width:150px;'></form>";
			}	
			
			else if (c == 'pass') {	//Change admin password form

			document.getElementById("message").innerHTML = 	"<form style='text-align:center;'"+
			"action='changeinfo.php'>"+	
			"<label for='password'><br><br>New Password:</label>"+ 
			"<input type='password'  id='myInput' name='passwordnew1' style='width:200px; height: 20px;'>"+
			"<input type='checkbox' onclick='showPass()'>Show Password<br><br>"+
			"<label for='password' style='margin-left:-180px;'>Confirm New Password:</label>"+
			"<input type='password' name='passwordnew2' style='; width:200px; height: 20px;'><br><br>"+
			"<input type='submit' value='Change password' name='adminChange' style='height:30px; width:150px;'></form>";
			}
			
			else if (c == 'signout') {

			document.getElementById("message").innerHTML = 	"<a href='templates/destroy.php'>Sign out</a>";
			}
		}
	
	</script>
		<style>
			body{
				background-repeat: no-repeat;
				background-size: 1950px 1000px;				
			}
			
			div 
			{ 
				text-align: center;
			}

			
			.button {	<!--Button style displayed on admin page-->
				font-size:25px; 
				color:white; 
				background-color:#02afe6; 
				border-radius: 20px; 
				padding: 15px;
				opacity:0.9;
			}
			
			<!--Hover over button so button expands-->
			.button:hover{
			transform: scale(1.1);
			}
		</style>
	</head>
	
	<body>
	<div>
		<h1> Settings </h1>
	</div>
	<?php
		
	?>
	<div class="div2">
		<button class="button" type="button" onclick=changeMessage("register")> Register New Account </button>
		<button class="button" type="button" onclick=changeMessage("delete")> Delete Account </button>
		<button class="button" type="button" onclick=changeMessage("reset")> Apartment Password Reset </button>
		<button class="button" type="button" onclick=changeMessage("view")> View Accounts and Reservations </button>
		<button class="button" type="button" onclick=changeMessage("removereservation")> Remove reservation </button>
		<button class="button" type="button" onclick=changeMessage("pass")> Admin password </button><br><br>
		<button class="button" type="button" onclick=changeMessage("signout")> Sign out </button>
	</div>

		<br>
	<div>
	<p id="message"> </p>
	</div>
	<script>
		function display()
		{
			var x = document.getElementById("form");
		  if (x.style.display === "none") {
			x.style.display = "block";
		  } else {
			x.style.display = "block";
		  }
		}
		
		function popUp() {
  var myWindow = window.open("reserved.php", "MsgWindow", "width=900,height=970");
}
	</script>
	
	</body>
</html>
