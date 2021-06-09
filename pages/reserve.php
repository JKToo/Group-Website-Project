	<link rel="stylesheet" href="templates/calendar.css">
	<link rel="stylesheet" href="templates/styles.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<?php include "templates/header.php"; include "templates/dbconfig.php";

?>
<html>
	<head>
	<!--Checks if the box is checked or not-->
<script>
			function checkForm(form)
		  {
		 
			if(!form.terms.checked) {
			  alert("You must accept to proceed");
			  form.terms.focus();
			  return false;
			}
			return true;
		  }
		  
</script>
	<style>			
		
	</style>
		
	</head>
	
	<body><br>

<div style="margin-left:30%;  margin-top:-5%; color:white">
      <div class="calendar">
        <div class="month">
          <i class="fas fa-angle-left prev"></i>
          <div class="date">
            <h1></h1>
            <p></p>
          </div>
          <i class="fas fa-angle-right next"></i>
        </div>
        <div class="weekdays">
          <div>Sun</div>
          <div>Mon</div>
          <div>Tue</div>
          <div>Wed</div>
          <div>Thu</div>
          <div>Fri</div>
          <div>Sat</div>
        </div>
        <div class="days"></div>
      </div>
  </div>

<br><br><h1 style="text-align:center">Reserve Now </h1>
<div style="margin-right:35%; margin-top:1%">	
<?php
	//Displays the reservation form
	$apt = $_SESSION['apt'];
	$phone = $_SESSION['phone'];
	$name = $_SESSION['name'];

	echo"
	<form style='float:right;' action='reserveconfirmed.php' method='post'onsubmit='return checkForm(this);'>
	<label  for='day';><strong>Confirm Day:</strong></label>	<a href='' onclick='popUp()'>Check available time slots</a><br>	
	<select name='day' id='day'>
    <option value='mon'>Monday</option>
    <option value='tue'>Tuesday</option>
    <option value='wed'>Wednesday</option>
    <option value='thur'>Thursday</option>
	<option value='fri'>Friday</option>
	<option value='sat'>Saturday</option>
    <option value='sun'>Sunday</option>
  </select>
	<br><br>
	<label  for='name'><strong>Name:</strong></label><br>
	<input  type='text' id='name' name='name' value=$name disabled><br><br>
	<label  for='apt'><strong>Apartment Number:</strong></label><br>
	<input  type='text' id='apt' name='apt' value=$apt disabled><br><br>
	<label  for='phone'><strong>Contact Number:</strong></label><br>
	<input  type='text' id='phone' name='phone' value=$phone disabled><br><br>
	
   <label for='time'><strong>Choose an available time:</strong></label> <br><br>
  <select name='time' id='time'>
    <option value='12AM'>12:00 AM - 3:00 AM</option>
    <option value='3AM'>3:00 AM - 6:00 AM</option>
    <option value='6AM' id='2a'>6:00 AM - 9:00 AM</option>
    <option value='9AM' id='time3'>9:00 AM - 12:00 PM</option>
	<option value='12PM' id='time4'>12:00 PM - 3:00 PM</option>
	<option value='3PM' id='time5'>3:00 PM - 6:00 PM</option>
    <option value='6PM' id='time6'>6:00 PM - 9:00 PM</option>
    <option value='9PM' id='time7'>9:00 PM - 12:00 PM</option>
  </select>
  <br><br>
  	<label for='message'> <strong>Personal Comments:</strong></label> <br>  
	<textarea id='msg' name='msg' rows='10' cols='50' maxlength='100'> </textarea> <br><br>
 <p><input type='checkbox' name='terms'> By checking this I understand that I must wear a mask<br>and maintain six feet apart from others at all times.</p>
  <input type='submit' id='submit' name='submit' value='Submit'>
	</form>"
		?>
		
	
</div>
<script type="text/javascript" src="templates/calendar.js"></script>
<!--Opens free slots in a pop up window-->
<script>
function popUp() {
  var myWindow = window.open("available.php", "MsgWindow", "width=900,height=970");
}
</script>
<footer style="margin-left: 800px; margin-top: 900px;">
		  <p>Author: Thurein, Toki, Justin<br>
		  <a href="bmccgroupb@gmail.com">BMCCGroupB@gmail.com</a></p>
</footer>
		
	</body>
</html>
