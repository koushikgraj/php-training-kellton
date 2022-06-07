<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM studentdetail";
$result = mysqli_query($conn, $sql);
?>
<table border="1">
	<tr>
		<th>NAME</th>
		<th>EMAIL</th>
    <th>ID</th>
    <th>COLLEGE></th>
		<th>&nbsp;</th>
	</tr>
<?php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>
	<tr>
		<td><?php echo $row['NAME'];?></td>
		<td><?php echo $row['EMAIL'];?></td>
    <td><?php echo $row['ID'];?></td>
    <td><?php echo $row['COLLEGE'];?></td>
		<td>
			<a href="edit.php?id=<?php echo $row['ID'];?>">Edit</a> &nbsp; &nbsp;
			<a href="delete.php?id=<?php echo $row['ID'];?>">Delete</a>
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