<form id="frm">
        @csrf
   Name : <input type="text" name="name" required></input><br>
   Password : <input type="text" name="password" required></input><br>
    <input type="submit" name="submit" id="frmsubmit"/><br>
<div id="getname"></div>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
jQuery('#frm').submit(function(e)
{
  e.preventDefault();
  jQuery.ajax({
    url:"{{url('form_submit')}}",
    data:jQuery('#frm').serialize(),
    type:'post',
    success:function(result){
        //console.log(result);
        $("#getname").html(JSON.stringify(result));
      
    }
  })
});
</script>