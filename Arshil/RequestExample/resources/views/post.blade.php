<center>
    <h1>User Login</h1>
    <form action="post" method="POST">
        @csrf
        Name:<input type="text" name="Name" placeholder="enter your name"/> <br><br>
        Password:<input type="password" name="Password" placeholder="enter your password"/> <br><br>
        <button type="submit">Login</button>
</center>