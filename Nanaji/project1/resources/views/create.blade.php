<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <div>
        <form action='ins ' method ='post'>
            @csrf
            <h>Fill the form<h>
            <div class="container">
                <label for='name' class="control-label">Name</label>
                <input type="text" class="form-control" name="name"><br>
                <label for='email' class="control-label">email</label>
                <input type="email" class="form-control" name="email"><br>
                <label for='state'class="control-label">State</label>
                <input type="text" class="form-control" name="state"><br>
                <input type="submit" class="submit">

            </div>
</form>    
</div>   
    
</body>
</html>