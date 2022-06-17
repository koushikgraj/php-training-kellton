<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="/store"method="post">
            @csrf
            <div class="md-3">
                <label>POST TITLE</label>
                <input type="text"name="title"class="form-control">
            </div>
            <div class="md-3">
                <label>POST AUTHOR</label>
                <input type="text"name="author"class="form-control">
            </div>
            <input type="submit"name="insert"value="insert"class="btn btn-primary">
        </form>
    </div>
    
</body>
</html>