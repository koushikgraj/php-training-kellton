<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <script>
        function showHint(str){
            console.log(str);   
            if(str.length==0){
                document.getElementById('texthint').innerHTML="";
                return;
            }
            else{
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange=function(){
                    if(this.readyState==4 && this.status==200){
                        document.getElementById('texthint').innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "search?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>


</head>
<body>
    <p><b>start typing...</b></p>
    <form action="">
        First name: <input type="text" onkeyup="showHint(this.value)">
    </form>
    <p>Suggestions:<span id="texthint"></span></p>
</body>
</html>