<!DOCTYPE html>
<html>
<body>
<title> Registration form </title>
<?php
if(isset($_POST['btnsubmit'])){
	echo "<pre>";print_r($_POST);echo "</pre>";
}
?>
<center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    firstname:<input type="text"name="fname">
    last name:<input type="text"name="lname"><br><br>
  mobile number:  <input type="number"name="mobile_number"><br><br>
    e-mail:<input type="e-mail"name="e-mail_id"><br><br>
 address<br><textarea></textarea>
<br><br>
        gender<br><input type="radio"name="gender"value="male">male<br>
        <input type="radio"name="gender"value="female">female<br>
        check in date:<input type="date"><br>
        check out date:<input type="date"><br>
        number of guests in room:<input type="text" placeholder="ex:2"><br>
        room type:<select id="country" name="country">Country
                        <option value="single">single</option>
                        <option value="double">double</option>
                        <option value="other">other</option>
                    </select><br>
                    smoking room<br><input type="radio"name="smoking room"value="yes">yes<br>
        <input type="radio"name="smoking room"value="no">no<br>
        lease pocket wi-fi($5)<br><input type="radio"name="lease"value="yes">yes<br>
        <input type="radio"name="lease"value="no">no<br>
        freeshuttle service<br><input type="radio"name="freeshuttle service"value="yes">yes<br>
        <input type="radio"name="freeshuttle service"value="no">no<br>
        total amount<br><input type="text"><br>
        notes/special requirements<br><textarea></textarea><br>
        <button>submit</button>

</center>
</form>
</body>
</html>



