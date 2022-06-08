<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>
<a href="edit.php">Add New Student</a>
<br><br>
<?php
if(
	isset($_GET['action']) && 
	$_GET['action'] == 'add' && 
	$_GET['status'] == 'success'
	){
?>
<div>Student added succesfully</div>
<?php } ?>
<?php
if(
	isset($_GET['action']) && 
	$_GET['action'] == 'update' && 
	$_GET['status'] == 'success'
	){
?>
<div>Student updated succesfully</div>
<?php } ?>
<?php
if(
	isset($_GET['action']) && 
	$_GET['action'] == 'delete' && 
	$_GET['status'] == 'success'
	){
?>
<div>Student delete succesfully</div>
<?php } ?>

<table border="1">
	<tr>
		<th>name</th>
		<th>email</th>
		<th>&nbsp;</th>
	</tr>
<?php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>
	<tr>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['email'];?></td>
		<td>
			<a href="edit.php?id=<?php echo $row['id'];?>">Edit</a> &nbsp; &nbsp;
			<a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
			<a href="#" onclick="javascript:
							if (confirm('Do you want to delete <?php echo $row['name'];?>?'))
								{ 
									location.replace('delete.php?id=<?php echo $row['id'];?>')
							};">Delete</a>
		</td>
	</tr>  
<?php
  }
} else {
  echo "0 results";
}
?>
</table>
<br>
<a href="add.php">Add New Student</a>
<?php

mysqli_close($conn);