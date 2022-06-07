<html>
    <?php
if(isset($_post['submit_Button']))
{
    echo "<pre";
    print_r($_post);
    echo "<pre>";
}
    ?>
    
    <center>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="button" name="button">
<br/><br/>
<input type="checkbox" name="checkbox">
<br/><br/>
<input type="color" name="color">
<br/><br/>
<input type="date" name="date">
<br/><br/>
<input type="datetime-local" name="dt">
<br/><br/>
<input type="email" name="email">
<br/><br/>
<input type="file" name="file">
<br/><br/>
<input type="hidden" name="hide">
<br/><br/>
<input type="image" name="img">
<br/><br/>
<input type="month" name="month">
<br/><br/>
<input type="number" name="num">
<br/><br/>
<input type="password" name="password">
<br/><br/>
<input type="radio" name="radio">
<br/><br/>
<input type="range" name="range">
<br/><br/>
<input type="reset" name="reset">
<br/><br/>
<input type="search" name="serch">
<br/><br/>
<input type="submit" name="submit">
<br/><br/>
<input type="tel" name="tel">
<br/><br/>
<input type="text" name="text">
<br/><br/>
<input type="time" name="time">
<br/><br/>
<input type="url" name="url">
<br/><br/>
<input type="week" name="week">
<br/><br/>
<input type="submit" name="submit_Button">
</form>
    </body>
</center>
</html>


