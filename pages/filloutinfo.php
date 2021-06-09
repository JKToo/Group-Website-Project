<?php 
	session_start();
	include "templates/dbconfig.php";
?>

<?php 
	$name = $_GET['name'];
	$phone = $_GET['phone'];
	$email = $_GET['email'];
	$apt = $_SESSION['apt'];
	
	if(isset($_REQUEST['submitAll'])) //Check if all information is missing
	{
		$_SESSION['phone'] = $phone;
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
		$insert = "update tenantinformation set Name = '$name', Phone='$phone', Email = '$email' where Apartment = '$apt'"; //Update the database with new information
		$run = mysqli_query($connection, $insert);
		echo "<br><br>You will be redirected to the homepage in 5 seconds. <br> If page does not automatically load, click here: <a href='landing.php'>Go to home page</a>";				
		header("Refresh:5; url=landing.php");
	} 
	
	//Check if specific column is missing
	else if(isset($_REQUEST['submitName']))	
	{		
		$_SESSION['name'] = $name;
		$insert = "update tenantinformation set Name='$name' where Apartment = '$apt'";		//Update the database with new information
		$run = mysqli_query($connection, $insert);
		echo "<br><br>You will be redirected to the homepage in 5 seconds. <br> If page does not automatically load, click here: <a href='landing.php'>Go to home page</a>";				
		header("Refresh:5; url=landing.php");
	}
	
	else if(isset($_REQUEST['submitPhone']))
	{
		$_SESSION['phone'] = $phone;
		$insert = "update tenantinformation set Phone='$phone' where Apartment = '$apt'";		//Update the database with new information
		$run = mysqli_query($connection, $insert);		
		echo "<br><br>You will be redirected to the homepage in 5 seconds. <br> If page does not automatically load, click here: <a href='landing.php'>Go to home page</a>";				
		header("Refresh:5; url=landing.php");
	} 
	
	else if(isset($_REQUEST['submitEmail']))
	{
		$_SESSION['email'] = $email;
		$insert = "update tenantinformation set Email='$email' where Apartment = '$apt'";		//Update the database with new information
		$run = mysqli_query($connection, $insert);
		echo "<br><br>You will be redirected to the homepage in 5 seconds. <br> If page does not automatically load, click here: <a href='landing.php'>Go to home page</a>";				
		header("Refresh:5; url=landing.php");
	} 
?>
