<!DOCTYPE html>
<?php
if(isset($_POST['btnsummit'])){
	echo "<pre>";print_r($_POST);echo "</pre>";
}
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/static/css/style.css">
</head>
<body bgcolor="pink">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

  <center><font color="Cyan"><h1>Hotel Guest Registration </h1></font>
  <hr>

 <table>
 <tr><td>Enter First Name</td><td><input type="text" name="txtfname" /></td><td>Enter Last Name</td><td><input type="text" name="txtlname"></td></tr><br><br>
 <tr><td>Address</td><td><input type="text" name="Addess" /><br>
<tr><td>City</td><td><input type="text" name="city" /> <tr><td>State/Province</td><td><input type="text" name="state/Province" />
<tr><td>Email ID</td><td><input type="email" name="emailid" /><br>


<tr><td>Home Phone Number</td><td><input type="number" name="Homenumber"></td></tr><br>
<h1>Booking Information</h1>
<tr><td>Check in Date</td><td><input type="date" id="check in date" name="check in date" /></td>
<td>Check out Date</td><td><input type="date" id="check out date" name="check out date" /><td></tr>

<tr><td>Number of Guests in Room</td><td><input type="number" name="nmbrofguest" /></td>
</table>

	<label for="Room Type">Room:</label>

<select name="please select" >
  <option value="Single($100)">Single($100)</option>
  <option value="Double($100)">Double($100)</option>
  <option value="Queen($200)">Queen($200)</option>
  <option value="King">King($210)</option>
  <option value="2-Bedroom">2-Bedroom($350)</option>
  <option value="suit">suit($500)</option>
</select>

<label for="Smoking Room">Smoking Room:</label>
<select name="please select">
  <option value="yes">Yes</option>
  <option value="no">NO</option>

</select>
<table>
<td><tr>
<h3>Lease Pocket Wife($5)</h3>
<input type="checkbox" id="yes"  value="yes">
<label for="yes">Yes</label><br>
<input type="checkbox" id="no"  value="NO">
<label for="no">No</label>
</td></tr>
<h3>Free Shuttle Service</h3>
<input type="checkbox" id="yes"  value="yes">
<label for="yes">Yes</label><br>
<input type="checkbox" id="no"  value="NO">
<label for="no">No</label><br>
</table>

<h3>Total Amount</h3>
<input type="number" name="number" />

<h3>Notes/Special requirements</h3>
<textarea id="textarea" name="review" rows="4" cols="50"> </textarea>
	
  <center><input type="submit" name="btnsummit"  value="Submit"></center>

</center>	
</body>
</html>