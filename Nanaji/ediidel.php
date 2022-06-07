<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentsdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>
<table border="1">
	<tr>
	    <th>ID:</th>
		<th>Name:</th>
		<th>Email:</th>
		<th>options</th>
	</tr>
<?php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>
	<tr>
	    <td><?php echo $row['ID:'];?></td>
		<td><?php echo $row['Name:'];?></td>
		<td><?php echo $row['Email:'];?></td>
		
		<td>
			<a href="edit.php?id=<?php echo $row['ID:'];?>">Edit</a> &nbsp; &nbsp;
			<a href="delete.php?id=<?php echo $row['ID:'];?>">Delete</a>
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

 