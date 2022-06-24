<?php
if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $file_name=$file_FILES['image']['name'];
    $file_size=$file_FILES['image']['size'];
    $file_tmp=$file_FILES['image']['tmp_name'];
    $file_type=$file_FILES['image']['type'];

move_uploaded_file($file_tmp,"uploads/".$file_name);
?>
<html>
<body>


<form action="" method="post" enctype="multipart/form-data">

Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>