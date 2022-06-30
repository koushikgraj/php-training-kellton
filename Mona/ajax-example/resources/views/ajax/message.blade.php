<html>
   <head>
      <title>Ajax Example</title>
      
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
      <script>
         /*function getMessage() {
            $.ajax({
               type:'GET',
               url:'/getmsg',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                  $("#msg").html(data.msg);
               }
            });
         }*/
         function getMessage() {
  var x = document.getElementById("name").value;
  document.getElementById("msg").innerHTML = "You message: " + x;
}
      </script>
   </head>
   
   <body>
      <div id = 'msg'>
        <input type="text" id="name" name="name" onchange="getMessage()"><br>
        <button  onClick="getMessage()">Submit</button> <br />
    <span id="msg">

    </span>
        
      </div>
      <?php
       //  echo Form::button('Replace Message',['onClick'=>'getMessage()']);
        // echo Form::button('Replace Message');
        
      ?>
      
   </body>

</html>