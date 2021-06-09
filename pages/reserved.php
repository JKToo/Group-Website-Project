<!--Admin page to check reserved slots-->
<?php include "templates/dbconfig.php"?>
<html>
	<head>
		<style>
		* {
  box-sizing: border-box;
}
		.row {
  margin-left:-5px;
  margin-right:-5px;
}
.column {
  float: left;
  width: 200px;
  padding: 5px;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

		</style>
	</head>
	
	<body>


	
<?php
	if(isset($_REQUEST['check'])){
		$value = $_POST['select'];
		
		switch($value)
		{
			case 'reserve':
				$available1 = "select * from timeslots where Occupied=true";
				$available1_run = mysqli_query($connection, $available1);
				echo "<table>
				<tr>
				<th>Day</th>
				<th>Time</th>
				<th>Name</th>
				<th>Apartment</th>
				</tr>";
				while($row = mysqli_fetch_array($available1_run))
				{
					echo "<tr>";
					echo "<td>" . $row['Day'] . "</td>";
					echo "<td>" . $row['Time'] . "</td>";
					echo "<td>" . $row['Name'] . "</td>";
					echo "<td>" . $row['Apartment'] . "</td>";
					echo "</tr>";
				}
				break;
		
			case 'acc':
				$acc = "select * from accounts";
				$acc_run = mysqli_query($connection, $acc);
				echo "<table>
				<tr>
				<th>Username</th>
				<th>Apartment</th>
				<th>Admin Status <br>[1] True [0] False</th>
				</tr>";
				while($row = mysqli_fetch_array($acc_run))
				{
					echo "<tr>";
					echo "<td>" . $row['Username'] . "</td>";
					echo "<td>" . $row['Apartment'] . "</td>";
					echo "<td>" . $row['Admin'] . "</td>";
					echo "</tr>";
				}
				break;
		}
		
	}

?>
	 
	</body>

</html>
