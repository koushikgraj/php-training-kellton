<?php
$username= $_POST['username'];
$password= $_POST['password'];
$email= $_POST['email'];
$dob= $_POST['dob'];
$gender= $_POST['gender'];
if (!empty($username) || !empty($password)|| !empty($email) || !empty($dob) || !empty($gender)){
    $host='localhost';
    $dbusername='root';
    $dbpassword='';
    $dbname='kellton_test1';
    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        $select='select email from register where email=? limit 1';
        $insert='insert into register(username,password,email,dob,gender)values(?,?.?,?,?)';
        $stmt=$conn->prepare($select);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum= $stmt->num_rows;
        if($rnum==0){
            $stmt->close();
            $stmt= $conn->prepare($insert into "rgister");
            $stmt->bind_param("sssii",$username, $password, $email, $dob, $gender);
            $stmt->execute();
            echo 'new record inserted sucessfully';
        }else{
            echo 'some already register using this email';
        }
        $stmt->close();
        $conn->close();
    }
}else{
    echo 'all field are required';
    die();
}
?>