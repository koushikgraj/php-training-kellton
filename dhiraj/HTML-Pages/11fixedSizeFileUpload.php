<?php
   if(isset($_FILES['image'])){

   /*creating empty array  variable */
      $errors= array();
      
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      
      /* converting file extension to lowercase and storing in variable $file_ext
      explode will break the file name into parts when it founds (.) and stores these values 
      in array variable*/
      $file_ext=explode('.',strtolower($_FILES['image']['name']));
      
      /*creating arrays for the extensions */
      $extensions= array("jpeg","jpg","png");
      
      /*in_array will check whether the array value at (1) index in $file_ext[] 
      ie extensions of file, matches with elements in $e */
      if(in_array($file_ext[1],$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp, 'uploads/'.$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>