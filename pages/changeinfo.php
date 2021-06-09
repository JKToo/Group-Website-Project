
<?php 
	session_start();
	if(!isset($_SESSION['username'])){ //if login in session is not set
    header("Location: login.php");
}
include "templates/dbconfig.php";
?>
<html>
	<head>
		<style>
			div{
				text-align:center;
			}
		</style>
	</head>
	<body>
	<div>

	<?php 
		//If request is made by admin account
		if(isset($_REQUEST['admindelete'])){
			$apt = $_REQUEST['apt'];
			$account = "select *from accounts where Apartment = '$apt'";
			$account_run = mysqli_query($connection, $account);
			$row = mysqli_fetch_array($account_run, MYSQLI_ASSOC);
			$count = mysqli_num_rows($account_run);
			$accountDelete = "delete from accounts where Apartment = '$apt'";
			$tenantDelete = "delete from tenantinformation where Apartment = '$apt'";
			
			if($count == 1) 		//Delete the account if found
			{
				$tenantDelete_run = mysqli_query($connection, $tenantDelete);
				$accountDelete_run =  mysqli_query($connection, $accountDelete);
				
				header("Refresh:3; url=admin.php");
				die("Successfully removed from database <br> Redirecting you to previous page");
			}
			else if($count != 1){
				header("Refresh:3; url=admin.php");
				die("Apartment's account not found <br> Redirecting you to previous page");				
			}
			else {
				header("Refresh:3; url=admin.php");
				die("Unable to delete account <br> Redirecting you to previous page");		
			}
		}
		
		//If request is made by admin account
		if(isset($_REQUEST['adminreset'])){
			$user = $_REQUEST['user'];
			$apt = $_REQUEST['apt'];
			$password = $_REQUEST['password'];
			$account = "select *from accounts where Username = '$user' and Apartment = '$apt'";
			$account_run = mysqli_query($connection, $account);
			$row = mysqli_fetch_array($account_run, MYSQLI_ASSOC);
			$count = mysqli_num_rows($account_run);
			if($count == 1)								//Reset password of the account
			{
				$passReset = "update accounts set Password = '$password' where Username = '$user' AND Apartment='$apt'";
				$passReset_run =  mysqli_query($connection, $passReset);
				header("Refresh:3; url=admin.php");
				die("Successfully reset password to <strong>".$password."</strong> <br> Redirecting you to previous page");
			}
			else if($count != 1){
				header("Refresh:3; url=admin.php");
				die("Unable to find account");				
			}
			else {
				header("Refresh:3; url=admin.php");
				die("Unable to delete account <br> Redirecting you to previous page");		
			}
		}
		
		//If request is made by admin account
		if(isset($_REQUEST['reservationdelete'])){
			$apt = $_REQUEST['apt'];
			$name = $_REQUEST['name'];
			$reserve = "select *from timeslots where Apartment = '$apt' and Name='$name'";
			$reserve_run = mysqli_query($connection, $reserve);
			$row = mysqli_fetch_array($reserve_run, MYSQLI_ASSOC);
			$count = mysqli_num_rows($reserve_run);
			if($count == 1)			//Remove the reservation
			{
				$reserveDelete = "update timeslots set Name='', Apartment = NULL, Phone = NULL, Occupied = false, Comments ='' where Apartment = '$apt' AND Name='$name'";
				$reserveDelete_run =  mysqli_query($connection, $reserveDelete);
				header("Refresh:3; url=admin.php");
				die("Successfully removed reservation for ".$name." in apartment ".$apt." <br> Redirecting you to previous page");
			}
			else if($count != 1){
				header("Refresh:3; url=admin.php");
				die("Reservation for ".$name." in apartment ".$apt." not found <br> Redirecting you to previous page");				
			}
			else {
				header("Refresh:3; url=admin.php");
				die("Unable to delete reservation <br> Redirecting you to previous page");		
			}
		}
		
		$password1 = $_GET['passwordnew1'];
		$password2 = $_GET['passwordnew2'];
		$user = $_SESSION['username'];
		
		//If request is made by regular user account
		if(isset($_REQUEST['change'])){	
			if(empty($password1) || empty($password2))		//Password box is blank			
			{
				echo "Please type a password";
			}
			else if($password1 == $password2)		//Check for matching passwords & change
			{
				$querychange= "UPDATE accounts set Password='$password1' where Username='$user'";
				$querychange_run = mysqli_query($connection, $querychange);
				$_SESSION['password']=$password1;
				header("Refresh:3; url=account.php");
				die("Successfully changed <br>Redirecting you to previous page");
				
			}
			else echo "Passwords did not match";
		}
		
		//If request is made by Admin account
		if(isset($_REQUEST['adminChange'])){	
			if(empty($password1) || empty($password2))		//Password box is blank			
			{
				echo "Please type a password";
			}
			else if($password1 == $password2)		//Check for matching passwords & change
			{
				$querychange= "UPDATE accounts set Password='$password1' where Username='$user'";
				$querychange_run = mysqli_query($connection, $querychange);
				$_SESSION['password']=$password1;
				header("Refresh:3; url=admin.php");
				die("Successfully changed <br> Redirecting you to previous page");
				
			}
			else echo "Passwords did not match";
		}
		
		//If request is made by admin account
		if(isset($_REQUEST['admincreate'])){	
		$user = $_GET['user'];
		$apt = $_GET['apt'];
			if(empty($password1) || empty($password2) || empty($user) || empty($apt))			//If boxes are empty		
			{
				header("Refresh:3; url=admin.php");
				die("Please fill everything in <br> Redirecting you to previous page");
			}
			else if($password1 == $password2)	
			{
				$userCheck = "select *from accounts where Username = '$user'";
				$aptCheck = "select *from accounts where Apartment = '$apt'";
				$user_run= mysqli_query($connection, $userCheck);
				$apt_run = mysqli_query($connection, $aptCheck);
				$row1 = mysqli_fetch_array($user_run, MYSQLI_ASSOC);
				$row2 = mysqli_fetch_array($apt_run, MYSQLI_ASSOC);
				$count1 = mysqli_num_rows($user_run);  
				$count2 = mysqli_num_rows($apt_run);
				
				if($count1 == 1)		//Check for re-used information
				{
					header("Refresh:3; url=admin.php");
					die("<br>Email is already in use <br> Redirecting you to previous page");
				}
				else if($count2 == 1)	//Check if registered already
				{
					header("Refresh:3; url=admin.php");
					die("<br>This apartment has a registered account already <br> Redirecting you to previous page");
				}
				
				else	//Register the new account
				{
				$query = "insert into accounts (Apartment, Username, Password, Admin) values ('$apt', '$user', '$password1', false)";
				$query_run = mysqli_query($connection, $query);
				$query2 = "insert into tenantinformation (Name, Apartment, Phone, Email) values ('', '$apt', '', '')";
				$query2_run = mysqli_query($connection, $query2);
				header("Refresh:3; url=admin.php");
				die("Successfully registered <br> Redirecting you to previous page");
				}
				
			}
			else echo "Passwords did not match <br> Redirecting you to previous page";
		}

	?>
	</div>
			<footer style="margin-left: 800px; margin-top: 650px;">
		  <p>Author: Thurein, Toki, Justin<br>
		  <a href="bmccgroupb@gmail.com">BMCCGroupB@gmail.com</a></p>
		</footer>
	</body>
</html>
