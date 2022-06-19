<h1>Update Data</h1>
<form action=""{{ route('update',$post->id) }}"" method="POST">
@csrf
@method('PUT')
<input type="hidden" name="id" value="{{$data['id']}}"><br><br>
<input type="text" name="name" value="{{$data['name']}}"><br><br>
<input type="text" name="email" value="{{$data['email']}}"><br><br>
<input type="text" name="address" value="{{$data['address']}}"><br><br>

<button type="submit">Update</button><br><br>



</form>