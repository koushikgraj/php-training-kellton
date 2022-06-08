

<?php
if(isset($_GET['id'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "php_training";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}

	$id = mysqli_real_escape_string($conn, $_GET['id']);

	$sql = "DELETE FROM student WHERE id = '$id'";	
	$qry = mysqli_query($conn, $sql);

	echo "<script>location.replace('list.php?action=delete&status=success');</script>";
}
?> 
