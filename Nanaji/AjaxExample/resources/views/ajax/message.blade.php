<form id='form'>
    Name:
    <input type='text' name='name'>
    <input type='submit'>
</form>    
<html>
   <head>
      <title>Ajax Example</title>

      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>

      <script>
         function getMessage() {
            $.ajax({
               type:'GET',
               url:'/getmsg',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                  $("#msg").html(data.msg);
               }
            });
         }
         function getname() {
            alert($("#first-name").val());  
            $.ajax({
                 type:"GET",
                data:'_token = <?php echo csrf_token() ?>',
                url:"/get1?name=" + $("#first-name").val(),   
                success:function(data)  { 
                    $("#name").html(data);   
                }
            });
         }
      </script>
   </head>

   <body>
      <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
      <?php
         echo Form::button('Replace Message',['onClick'=>'getMessage()']);
      ?>
      <p>Search the world's information, including webpages, images, videos and more. Google has many special features to help you find exactly what you're looking for.

        </p>

   </body>

</html> 