<link rel="stylesheet" href="templates/styles.css">
<script type="text/javascript" src="templates/script.js"></script>
<?php
include "templates/header.php"; include "templates/dbconfig.php";
?>
<html>
 <head>
  <title>PHP Test</title>
  <!-- 
  div = overall style of page
  #div2 = alignment and style for button
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
	<?php
	
	 if(isset($_REQUEST['submit'])) //Checks for submission
	 {
		
		  $name = $_SESSION['name'];
		  $phone = $_SESSION['phone'];
		  $time = $_POST['time'];
		  $day = $_POST['day'];
		  $apt = $_SESSION['apt'];
		  $msg = $_POST['msg'];

		  
		switch($day)	//Renames the day variable to selected day
		{
			case 'mon':
				$day = "Monday";
				break;
			case 'tue':
				$day = "Tuesday";
				break;
			case 'wed':
				$day = "Wednesday";
				break;
			case 'thur':
				$day = "Thursday";
				break;
			case 'fri':
				$day = "Friday";
				break;
			case 'sat':
				$day = "Saturday";
				break;
			case 'sun':
				$day = "Sunday";
				break;
		}

		switch($time)	//Renames time variable to selected time
		{
			case '12AM':
				break;
			case '3AM':
				break;
			case '6AM':
				break;
			case '9AM':
				break;
			case '12PM':
				break;
			case '3PM':
				break;
			case '6PM':
				break;
			case '9PM':
				break;
		}
		
		$check = "select *from timeslots where Day = '$day' and Time = '$time'";	//Checks database for information
		$check_run = mysqli_query($connection, $check);
		$double = "select *from timeslots where Apartment = '$apt'";
		$double_run = mysqli_query($connection, $double);
		if(mysqli_num_rows($double_run) != 0)	//Checks if account is already reserved
			{
				echo "<h1>You already reserved a spot! Please see Account information for your reservation time.</h1>";	
			}
			
		else{
			while($row = mysqli_fetch_array($check_run))	//Checks if slot is occupied
			{
				if($row['Occupied'] == 1)
				{
					echo "<h1 style='margin-top:150px;'>This time slot has been occupied</h1>";
				}

				else 
				{
					echo "<h1> Confirmed </h1>";
					echo "Your spot has been reserved for ".$day.", ".$time."<br><br>Name :".$name."<br><br>Phone Number: ".$phone."<br><br>Apartment: ".$apt."<br><br>Comment: ".$msg;				

					$_SESSION['day'] = $day;
					$_SESSION['time'] = $time;
					$_SESSION['msg'] = $msg;
					$confirm = "update timeslots set Occupied = true, Name = '$name', Apartment = '$apt', Phone = '$phone', Comments = '$msg' where Day = '$day' and Time = '$time'";
					$result = mysqli_query($connection, $confirm);
				}
			}
		}
	 }
	 
	?>
	<div id="div2">
		<button type="button" class="button" onclick="location.href='Reserve.php'">
		Return</button>
		</div>
	</div>
	<footer style="margin-left: 800px; margin-bottom: 100px;">
		  <p>Author: Thurein, Toki, Justin<br>
		  <a href="bmccgroupb@gmail.com">BMCCGroupB@gmail.com</a></p>
		</footer>
 </body>
</html>
