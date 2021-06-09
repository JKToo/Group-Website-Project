<link rel="stylesheet" href="templates/styles.css">
<script type="text/javascript" src="templates/script.js"></script>
<html>
	<head>
	<!--
	h1 = style for heading
	div = style for overall page
	#user = style for user login box
	#password = style for password login box
	#submission = style for login button
	#label = style for the label attribute
	-->
		<style>
			
			h1{
				text-align:center;
				margin: 100 auto;
			}
			
			div 
			{ 
				border-radius: 15px;
				border:solid 1px black;
				margin: auto; 
				width:400px;
				height:400px;
				text-align: center; 
				background-color: #E7EBE0FF;
				padding: 1px;
			}

			#user {			
			border-radius: 10px;
			border: 2px solid black;
			padding: 15px; 
			margin-top:10px;
			width: 350px;
			height: 1px; 
			}
			
			#password {
			border-radius: 10px;
			border: 2px solid black;
			padding: 15px; 
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
			
			#div2
			{ 
				width:250px;
				margin-top: 80px;
				margin-left: 820px;
				text-align: center; 
			}
			
			.center {
			  display: block;
			  margin-left: auto;
			  margin-right: auto;
			}
			
			#label{
				margin-top:80px;
			}
		</style>
	</head>
	
	<body>

		<h1> Please sign in </h1>
		 
		 <div>
		<form style="color:black"  action="authenticate.php">
		<br><br><br>
		  <label id="label" for="user">&nbsp;<strong>Username:</strong></label>

		  <input type="text" id="user" name="user"><br><br>
		  <label for="password"><strong>Password:</strong></label>
		  <input type="password" id="password" name="password"><br><br>

		  <input type="submit" value="Login" id="submission" style="height:30px; width:100px">
		</form>
		</div>

		<br><br><br><br><br><br>
		<footer style="margin-left: 800px; margin-bottom: 1px;">
		  <p>Author: Thurein, Toki, Justin<br>
		  <a href="bmccgroupb@gmail.com">BMCCGroupB@gmail.com</a></p>
		</footer> 
		
	</body>
</html>
