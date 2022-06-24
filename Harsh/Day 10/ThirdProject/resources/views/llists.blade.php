<h1>Hello</h1>
<table border='1'>
    <tr>
        <td>Id</td>
        <td>Type</td>
        <td>Email</td>
        <td>Password</td>
        <td>Name</td>
        <td>operation</td>
    </tr>
    @foreach($acc as $account)
   
    <tr>
          <td>{{$account['id']}}</td>
        <td>{{$account['type']}}</td>
        <td>{{$account['email']}}</td>
        <td>{{$account['password']}}</td>
        <td>{{$account['name']}}</td>
        <td><button>Delete</button></td>
    </tr>
    @endforeach
</table>
<div>
    {{$acc->links()}}
</div>
<style>
    .w-5{
        display:none;
    }
</style>