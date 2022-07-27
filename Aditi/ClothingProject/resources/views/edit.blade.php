@extends('layout')
@section('content')

<form method="post" action="../update/{{$category->id}}">
  @csrf
              <table width="100%" border="0">
                <tr>
                  <td height="32"><span class="style8">Category Id:</span></td>
                  <td><span id="sprytextfield1">
                    <label>
                    <input name="id" type="text" id="id" />
                    </label>
                    </span></td>
                </tr>
                <tr>
                  <td height="36"><span class="style8">Category Name:</span></td>
                  <td><span id="sprytextfield2">
                    <label>
                    <input name="CategoryName" type="text" id="CategoryName" />
                    </label>
                </span></td>
                </tr>
                <tr>
                  <td height="36"><span class="style8">Description:</span></td>
                  <td><span id="sprytextfield3">
                    <label>
                    <textarea name="Description" id="Description" cols="45" rows="3" ></textarea>
                  
                    </label>
                    </span></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="submit" value="Update Record" /></td>
                </tr>
</table>
            </form>

@endsection