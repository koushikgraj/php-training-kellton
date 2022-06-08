<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["user name"] = "ajay";
$_SESSION["mail"] = "ajay@gmail";
echo "Session variables are set.";
?>

</body>
</html>