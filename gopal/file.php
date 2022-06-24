<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['submit'])){
    $errors= array();
    $file_name = $_FILES['file']['name'];
    $file_size =$_FILES['file']['size'];
    $file_tmp =$_FILES['file']['tmp_name'];
    $file_type=$_FILES['file']['type'];
    move_uploaded_file($file_tmp, 'rudru/'.$file_name);
        
     }
    ?>
    <html>
        <body>
        <form action="" method="post" enctype="multipart/form-data">
<input type="file"name="file">
<br><br>
submit:<input type="submit"name="submit">
</form>
</body>
</html>
