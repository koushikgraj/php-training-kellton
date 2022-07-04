<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {background-image:"sandy.jpg.jpeg";}
    </style>

<body>
    <form action="store" method="post">
    @csrf
    <img src="{{ url('sandy/sandy.jpg') }}" alt="dk" width=200 class="img-responsive img-curve">
        NAME:<input type="text" name="name" ><br>
        ADDRESS:<input type="text" name="address" ><br>

        
      <input type="submit" value="submit">
    </form>  

    
</body>
</html>