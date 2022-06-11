<!-- page2 -->
<?php
session_start();
?>
<?php
echo"<pre>";
print_r($_SESSION['name']);
print_r($_SESSION['email']);
echo"</pre>";
?>