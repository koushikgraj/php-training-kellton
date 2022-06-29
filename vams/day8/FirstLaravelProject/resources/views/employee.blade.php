<h1> employees of the companies are <h1>
<br>
<table>//="1"
    <tr><th>employees</th></tr>
<?php
foreach($data as $tb1Obj)
{
    echo "<tr><td>";
    echo $tb1Obj->name;
    echo "</tr></td>";
}
?>
</table>