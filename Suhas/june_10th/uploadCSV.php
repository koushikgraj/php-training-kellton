<?php
if (isset($_FILES['image']))
{
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

$file_name= $_FILES['image']['name'];
$file_size= $_FILES['image']['size'];
$file_type= $_FILES['image']['type'];
$file_tmp= $_FILES['image']['tmp_name'];

if(move_uploaded_file($file_tmp,"Uploaded_Files/".$file_name))
{
echo "done";
}
else{
   echo "try again";
}

}


?>
<html>
    <head>
        <title>upload your image</title>
    </head>
    <body>
        <form action ="" method="post" enctype="multipart/form-data">
            <input type="file" name="image" size="5mb">
            <input type = "submit" name="submit">
        </form>

    </body>
</html>

