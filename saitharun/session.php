<?php
session_start();
$a ="tharun";
$b ="suthapalli.tharun@kelltontech.com";
if(isset($_SESSION['count'])){
    $_SESSION['count'] +=1;
}else{
    $_SESSION['count'] =1;
}

$msg ="You visited ".$_SESSION['count'] .  ' times';
// $msg .="in this session.";
?>
<html>
<head>
<title>Setting up</title>
</head>
<body>
<?php echo ($msg);?>
</body>
</html>