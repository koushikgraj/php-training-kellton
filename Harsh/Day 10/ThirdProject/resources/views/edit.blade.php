<h1>Update</h1>
<form action="edit"method="post">
    @csrf
    
    <input type="hidden"name="id"value={{$item['name']}}>
    <input type="text"name="name"value="{{$item['name']}}"><br>
    <input type="text"name="categories"value="{{$item['categories']}}"><br>
    <input type="text"name="duration"value="{{$item['duration']}}"><br>
    <input type="date"name="date"value="{{$item['date']}}"><br>
    <input type="image"name="image"value="{{$item['image']}}"><br>
    <button type="submit">update</button>
</form>