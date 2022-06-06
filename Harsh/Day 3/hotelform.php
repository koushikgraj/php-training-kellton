
<?php
if(isset($_POST['btnsubmit'])){
	echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        border:2px solid black;
    }
    .container2{
        border:2px solid black;
    }
</style>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <center>
    <div class="container">
        <div class="container2">
            <h1>Hotel Guest Registration Form</h1>
            <div class="container3">
            <h3>Name</h3><br>
            <input type="text" name="fname" id="fname" placeholder="First name">
            <input type="text" name="fname" id="fname" placeholder="Last name">
            <h2>Address</h2>
            <textarea name="add" id="add" cols="" rows="-20" placeholder="Street Address"></textarea><br><br>
            <textarea name="add" id="add" cols="" rows="-20" placeholder="Street Address line 2"></textarea><br><br>
           
            <input type="text" name="city" id="city" placeholder="City">
            <input type="text" name="state" id="state" placeholder="State/Province"><br><br>
            <input type="text" name="postal" id="postal" placeholder="Postal/ Zip Code">
            <h2>Email</h2>
            <input type="text" name="email" id="email" placeholder="example@example.com"><br><br>
            <input type="tel" name="tel" id="tel"placeholder="Home Phone Number">
            </div>
            <div class="container4">
                <h3>Booking Information</h3>
                <p>Check-in-date</p>
                <input type="date"id="date1"name="date"placeholder="date">
                <p>Check-out-date</p>
                <input type="date"id="date2"name="date"placeholder="date">
                <p>Number of Guest in Room</p>
                <input type="number"id="number"name="number">
                <p>Lease Pocket Wifi ($5)</p>
                <input type="radio"id="yes"name="yes">Yes<br>
                <input type="radio"id="no"name="yes">No<br>
                <p>Free Shuttle Servic</p>
                <input type="radio"id="yes"name="yes">Yes<br>
                <input type="radio"id="no"name="yes">No<br>
                <p>Total Amount</p>
                <input type="text"id="amount"name="amount"placeholder="0$">
                <p>Notes/Special requirements</p>
                <textarea name="textarea" id="" cols="30" rows="10"></textarea>
                <p>The submission of this form makes a reservation for the type of room selected in the form. Any changes prior the scheduled occupancy should be communicated to us at least 24 hours prior, which may be subject to availability of request. Check-in time shall be at 2:00PM and checkout time shall be at 12:00NN.</p>
                <input type="submit" name="btnsubmit">

            </div>
        </div>
    </div>
    </form>
    </center>
    
</body>
</html>