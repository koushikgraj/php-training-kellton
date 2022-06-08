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
<table border="3">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Operations</th>
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
			<a href="edit_data.php?id=<?php echo $row['id'];?>">Edit</a> &nbsp; &nbsp;
			<a href="delete_data.php?id=<?php echo $row['id'];?>">Delete</a>&nbsp; &nbsp;
			<a href="add_data.php?id=<?php echo $row['id'];?>">Add</a>
		</td>
	</tr>  
<?php
  }
} else {
  echo "0 results";
}
?>
</table>
<?php

mysqli_close($conn);

function pr($data)
{
	echo "<pre>";print_r($data);echo "</pre>";
}
?>