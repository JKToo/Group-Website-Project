<!-- Conect to database -->
<?php
$connection = mysqli_connect("localhost", "root", "", "mydb2");	//function call to make a connection to the DBMS
	if(!$connection)
	{
		die("Error connecting to DBMS" . mysql_connect_error());		
	}
	else
	{
        //echo "Database connection established<br>";
	}	
?>
