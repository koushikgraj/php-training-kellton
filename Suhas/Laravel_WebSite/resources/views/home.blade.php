
<html>
    <head>
        <title>SUPOO SERVER</title>
        <style>
            form {
            border-width:5px;
            border-style:solid;
            border-color:red;
            bgcolor-"pink";

}
        </style>
    </head>
    <body bgcolor="">
        
        <legend align="center" bgcolor="red">
    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> | 
    <a href="{{ url('/contact') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Contact Us</a> |
    <a href="{{ url('/about') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">About Us</a> 
        <h1 style="color:red;">WINGS OF FIRE</h1>
        <h3>Home</h3>
        <legend align="center" >
        <form action="" method="POST">
            @csrf
            <fieldset style="color:blue;">
                <Address>
                  NAME :  <input type="text" name="Name" placeholder="enter name"></input><br><br>
                  E-MAIL :  <input type="email" name="emial" placeholder="enter E-mail"></input><br><br>
                  DOB :  <input type="date" name="DOB" ></input><br><br>
                  STATE : <input type="radio" name="state" id="MH"><label for="MH">Maharashtra</label></input>
                  <input type="radio" name="state" id="KA"><label for="KA">Karnataka</label></input><br><br>
                  CITY : <select>
                    <option>Akkalkot</option>
                    <option>Solpaur</option>
                    <option>Indi</option>
                    <option>Gulbarga</option>
                    <option>Mohol</option>
                  </select><br><br>

                Message :  <textarea rows="5" cols="50"></textarea><br><br>
                <input type="submit" name="submit" ></input><input type="reset" name="reset" ></input><br><br><br><br>
                  </address>
                  
                  
            </fieldset>
        </form>
</legend>
</legend>

    </body>
</html>