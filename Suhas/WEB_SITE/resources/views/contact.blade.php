<html>
    <head>
        <title>Contact Us</title>
        <style>
            form{
            border-width:1px;
            border-style:solid;
            border-color:red;

            }
        </style>
    </head>
    <body bgcolor="#DCC6C6">
    <legend align="center">
    <a href="{{ url('/getHome') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a> | 
    <a href="{{ url('/getContact') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Contact Us</a> |
    <a href="{{ url('/getAbout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">About Us</a> 
        <h3>@Contact_Us</h3>

        <label><h3 style="color:red;">Address</h3></label>
        
        
        <form action="" method="POST">
        <fieldset style="color:blue;">
        <Address>
                    <input type="text" name="add"><br>Street Add<br>
                    <input type="text" name="add"><br>Street Add 2<br><BR>
                    <tr>
                        <td><input type="text" name="city">city</td>
                        <td><input type="text" name="state">state</td>
                        </Address>

                    </tr><br><br>
                    <h2 style="color:red;background=color:yellow;">Welcome to Heaven</h2>
                    <iframe src="https://www.google.com/maps/d/embed?mid=1fdN90Vzp3GY6OR_xC1c7LNFDWL4&ehbc=2E312F" width="640" height="480"></iframe>                    </fieldset>

</form>
</legend>
    </body>
</html>