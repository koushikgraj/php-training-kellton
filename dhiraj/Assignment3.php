<!DOCTYPE html>
<?php
if(isset($_POST['btnsubmit'])){
	echo "<pre>";print_r($_POST);echo "</pre>";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Details</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>

    
    <div class="container">

  <h1><u>  Hotel Guest Registration Form</u></h1>
  
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <input type="text" name="name" placeholder="Enter F-Name">
    <input type="text" name="pass" placeholder="Enter L-Name"><br>

    <h2>Address</h2><br>
    <textarea type="text" name="address" placeholder="Enter Address1" rows=3 cols=90></textarea><br>
   <textarea type="text" name="addresss" placeholder="Enter Address2" rows=3 cols=90></textarea><br>


   <input type="text" name="city" placeholder="City">
   <input type="text" name="street" placeholder="State/Province"><br>
 
   <input type="number" name="number" placeholder="Postal/Zip/Code"><br>

<h2>E-mail</h2><br>
   <input type="email" name="email" placeholder="Enter E-mail"><br>

   <h2>Home Phone No.</h2><br>
   <input type="tel" name="tel" placeholder="Enter Number"><br>


   <h1>Booking Information</h1><br>
   <h2>Check-in-Date</h2>  <br>
   <input type="date" name="date"><br>
   
   <h2>Check-out-Date</h2><br>
   <input type="date" name="date1"><br>

   <h2>Number of Guests in Room</h2><br>
   <input type="number" name="num" placeholder="Enter Total Guests"><br>


<h2>Room Type</h2><br>
<select class="select" name="Room" id ="rooms">
          <option value="No-Rooms">Select Room Type</option>
          <option value="Single BedRoom">Single BedRoom</option>
          <option value="Double BedRoom">Double BedRoom</option>
          <option value="Family Room">Family Room</option>
          <option value="Party Room">Party Room</option>
          </select><br>


<h2>Smoking Room</h2><br>
<select class="select" name="room1" id ="room">
          <option value="Rooms">Select Room Type</option>
          <option value="Smoling Room">Smoling Room</option>
          <option value="Non Smoling Room">Non Smoling Room</option>
          </select><br>



   <h2>Lease Pocket Room ($5)</h2><br>
   <input  class="room" type="radio" name="room">
           <label >Yes</label><br>
           <input type="radio" name="room">
           <label >No</label><br>

<h2>Free Shuttle Service</h2><br>
   <input  class="Service" type="radio" name="Service">
           <label >Yes</label><br>
           <input type="radio" name="Service">
           <label >No</label><br>


<h2>Total Amount</h2><br>
   <input type="number" name="numb" placeholder="Total Amount"><br>

   <h2>Notes/Special Requirements</h2><br>
   <textarea type="desc" name="desc" placeholder="Description"></textarea><br><br>


    <!-- <button class="btn"  name="btn" value="submit">Submit</button><br> -->
    <input type="submit" name="btnsubmit" value="click here">
    </form>  
</div>


</body>
</html>