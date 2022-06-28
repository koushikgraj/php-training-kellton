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
      </script>
   </head>
   
   <body>
   <!DOCTYPE html>
<html>
<head>
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "gethint.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>

</body>
</html>
      <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
      <?php
         echo Form::button('Replace Message',['onClick'=>'getMessage()']);
      ?>


<p>
      Text: The Perfect Paragraph
As Michael Harvey writes, paragraphs are “in essence—a form of punctuation, and like other forms of punctuation they are meant to make written material easy to read.”[1] Effective paragraphs are the fundamental units of academic writing; consequently, the thoughtful, multifaceted arguments that your professors expect depend on them. Without good paragraphs, you simply cannot clearly convey sequential points and their relationships to one another. 

Many novice writers tend to make a sharp distinction between content and style, thinking that a paper can be strong in one and weak in the other, but focusing on organization shows how content and style converge in deliberative academic writing. Your professors will view even the most elegant prose as rambling and tedious if there isn’t a careful, coherent argument to give the text meaning. Paragraphs are the “stuff ” of academic writing and, thus, worth our attention here.
</p>
   </body>

</html>