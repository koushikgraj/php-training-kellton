<center>
    <h1>User Login</h1>
    <form action="users" method="GET">
        @csrf
        Name:<input type="text" name="Name" placeholder="enter your name"/> <br><br>
        Password:<input type="password" name="Password" placeholder="enter your password"/> <br><br>
        <button type="submit">submit</button>
</center>