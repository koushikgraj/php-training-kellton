<!DOCTYPE html>
<?php
if(isset($_POST['btnsubmit'])){
	echo "<pre>";print_r($_POST);echo "</pre>";
}
?>
<html>
    <head>
        <title>Hotel Booking Page</title>
    </head>
    <body>
        <form action="?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <center>
            <fieldset>
                <legend align="center"><h1>Hotel Booking</h1></legend>
                <tr><label><h3>Name</h3></label>
                    <td><input type="text" name="fname" placeholder="first name"></td>
                    <td><input type="text" name="lname" placeholder="last name"></td><br><br>
                    
                </tr>    
                    <label><h3>Address</h3></label>
                    <input type="text" name="add"><br>Street Add<br>
                    <input type="text" name="add"><br>Street Add 2<br><BR>
                    <tr>
                        <td><input type="text" name="city">city</td>
                        <td><input type="text" name="state">state</td>
                    </tr><br><br>
                    
                    <input type="text" name="zipcode"><br>zip code<br<><br>

                    <label><h3>E-mail</h3></label>
                    <input type="email" name="mail"><br><br>
                    
                    <label><h3>Home phone number</h3></label>
                    <input type="tel" name="mobile"><br><br>

                    <label><h3>Booking Ijnformation</h3></label>
                    <tr>
                        <label>check-in date</label><td><input type="date" name="idate"></td>
                        <label>check-out date</label><td><input type="date" name="odate"></td>
                    </tr><br><br>

                    <label><h3>Number of Guests in Room</h3></label>
                    <input type="number" name="num"><br><br>

                    <tr>
                        <label>Room type</label><td><select>
                                                    <option>Single($100)</option>
                                                    <option>Double($200)</option>
                                                    <option>King($300)</option>
                                                    <option>Queen($400)</option>
                                                    </select></td>
                        <label>Smoking Room</label><td><select>
                                                       <option>yes</option>
                                                       <option>no</option>
                                                        </select>
                    </tr><br><br>

                    <label><h3>For Shuttle Service</h3></label>
                    <input type="radio" name="service" id="yes"><label for="yes">yes</label> <input type="radio" name="service" id="no"><label for="no">no</label><br><br>

                    <label><h3>Total Amount</h3></label>
                    <input type="number" name="amount" placeholder="0$"><br><br>

                    <label><h3>Notes/Special Requirment</h3></label></label>
                    <textarea rows="10" cols="60"></textarea><br><br>

                    <input type="submit" name="btnsubmit" value="click here">
                
            </fieldset>
            </center>
        </form>
    </body>
</html>