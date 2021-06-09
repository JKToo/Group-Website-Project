<!--Displays all available times-->

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
	echo "<div class='row'>";
	echo "<div class='column'>";
	$available1 = "select * from Timeslots where Day='MonDay' and Occupied=false";	//Check for Monday
	$available1_run = mysqli_query($connection, $available1);
	echo "<table>
	<tr>
	<th>Day</th>
	<th>Time</th>
	</tr>";
	while($row = mysqli_fetch_array($available1_run))
	{
		echo "<tr>";
		echo "<td>" . $row['Day'] . "</td>";
		echo "<td>" . $row['Time'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	
	
	echo "<div class='column'>";
	echo "<table>
	<tr>
	<th>Day</th>
	<th>Time</th>
	</tr>";
	$available2 = "select * from Timeslots where Day='TuesDay' and occupied=false";		//Check for Tuesday
	$available2_run = mysqli_query($connection, $available2);
	while($row = mysqli_fetch_array($available2_run))
	{
		echo "<tr>";
		echo "<td>" . $row['Day'] . "</td>";
		echo "<td>" . $row['Time'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	
	
	echo "<div class='column'>";
	echo "<table>
	<tr>
	<th>Day</th>
	<th>Time</th>
	</tr>";
	$available2 = "select * from Timeslots where Day='WednesDay' and occupied=false";		//Check for Wednesday
	$available2_run = mysqli_query($connection, $available2);
	while($row = mysqli_fetch_array($available2_run))
	{
		echo "<tr>";
		echo "<td>" . $row['Day'] . "</td>";
		echo "<td>" . $row['Time'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	
		echo "<div class='column'>";
	echo "<table>
	<tr>
	<th>Day</th>
	<th>Time</th>
	</tr>";
	$available2 = "select * from Timeslots where Day='ThursDay' and occupied=false";		//Check for Thursday
	$available2_run = mysqli_query($connection, $available2);
	while($row = mysqli_fetch_array($available2_run))
	{
		echo "<tr>";
		echo "<td>" . $row['Day'] . "</td>";
		echo "<td>" . $row['Time'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	
		echo "<div class='column'>";
	echo "<table>
	<tr>
	<th>Day</th>
	<th>Time</th>
	</tr>";
	$available2 = "select * from Timeslots where Day='FriDay' and occupied=false";		//Check for Friday
	$available2_run = mysqli_query($connection, $available2);
	while($row = mysqli_fetch_array($available2_run))
	{
		echo "<tr>";
		echo "<td>" . $row['Day'] . "</td>";
		echo "<td>" . $row['Time'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	
		echo "<div class='column'>";
	echo "<table>
	<tr>
	<th>Day</th>
	<th>Time</th>
	</tr>";
	$available2 = "select * from Timeslots where Day='SaturDay' and occupied=false";		//Check for Saturday
	$available2_run = mysqli_query($connection, $available2);
	while($row = mysqli_fetch_array($available2_run))
	{
		echo "<tr>";
		echo "<td>" . $row['Day'] . "</td>";
		echo "<td>" . $row['Time'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	
		echo "<div class='column'>";
	echo "<table>
	<tr>
	<th>Day</th>
	<th>Time</th>
	</tr>";
	$available2 = "select * from Timeslots where Day='SunDay' and occupied=false";		//Check for Sunday
	$available2_run = mysqli_query($connection, $available2);
	while($row = mysqli_fetch_array($available2_run))
	{
		echo "<tr>";
		echo "<td>" . $row['Day'] . "</td>";
		echo "<td>" . $row['Time'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";
	echo "</div>";

?>
	 
</body>
</html>
