<?php
if(isset($_GET['id'])){
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

	$id = mysqli_real_escape_string($conn, $_GET['id']);

	$sql = "DELETE FROM students WHERE id = '$id'";	
	$qry = mysqli_query($conn, $sql);
							
}
?> <?php
if(isset($_GET['id'])){
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

	$id = mysqli_real_escape_string($conn, $_GET['id']);
	

	$sql = "DELETE FROM students WHERE id = '$id'";	
	$qry = mysqli_query($conn, $sql);
	?>
	<a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
			<a href="#" onclick="javascript:
							if (confirm('Do you want to delete <?php echo $row['name'];?>?'))
								{ 
									location.replace('delete.php?id=<?php echo $row['id'];?>')
							};">Delete</a>

	echo "<script>location.replace('myfun.php?action=delete&status=success');</script>";
						}