<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <a href="todo">Back</a>
    <form action="../update/{{$todoArr->id}}" method = "post">
        @csrf
        <table id = "customer">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value = "{{$todoArr->name}}"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name = "submit"/></td>
                </tr>
        </table>
    </form>
</body>
</html>