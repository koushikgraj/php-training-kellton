<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM Student";
$result = mysqli_query($conn, $sql);
?>





<a href="add.php">Add New Student</a>
<br><br>




<?php
if(
	isset($_GET['action']) && $_GET['action'] == 'add' && $_GET['status'] == 'success'
	){
?>


<div>Student added succesfully</div>



<?php } ?>





<?php
if(
	isset($_GET['action']) && $_GET['action'] == 'update' && $_GET['status'] == 'success'
	){
?>



<div>Student updated succesfully</div>



<?php } ?>





<?php
if(
	isset($_GET['action']) && $_GET['action'] == 'delete' && $_GET['status'] == 'success'
	){
?>



<div>Student delete succesfully</div>



<?php } ?>





<table border="5">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Country</th>
		<th>DOB</th>
		<th>Operation</th>
	</tr>




<?php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>




	<tr>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['age'];?></td>
		<td><?php echo $row['gender'];?></td>
		<td><?php echo $row['country'];?></td>
		<td><?php echo $row['date'];?></td>
		<td>
			<a href="edit.php?id=<?php echo $row['id'];?>">Edit</a> &nbsp; &nbsp;
			
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
// function pr($data)
// {
// 	echo "<pre>";print_r($data);echo "</pre>";
// }
?>