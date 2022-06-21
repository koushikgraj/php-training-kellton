<h1>Add Member</h1>
<form action=""method="post">
    @csrf
    <input type="text"name="type"placeholder="entertype"><br>
    <input type="email"name="email"placeholder="enteremail"><br>
    <input type="password"name="password"placeholder="enterpassword"><br>
    <input type="name"name="name"placeholder="entername"><br>
    <button type="submit">Add Member</button>
</form>