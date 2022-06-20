<h1>This is a view of table data.</h1>
<table border="2">
<tr><th>Name</th/tr>

<?php
foreach($data as $x)
{
    echo "<tr><td>";
    echo $x->name;
    echo "</tr></td>";
}

?>
</table>