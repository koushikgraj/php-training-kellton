<?php
session_start();
?>

<html>
<body>

<?php

// Set session variables
$_SESSION["Name"] = "Nani";
$_SESSION["Email"] = "nani@gmail.com";
echo "Session variables are set.";
?>

</body>
</html>