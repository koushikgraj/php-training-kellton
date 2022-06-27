<!DOCTYPE html>
<html>
<head><b>login form</b></head>
    
<body>
<form method="POST" action="{{route('login.submit')}}">
  @csrf
  username:<input type="username" name="username" placeholder="Enter username"><br><br>
  password:<input type="password"  name="password" placeholder="Password"><br><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>