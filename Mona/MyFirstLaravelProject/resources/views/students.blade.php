<h1>  Subjects are </h1>
<br>
<table border="1">
    <tr>
        <th>subject</th>
</tr>
<?php
foreach($data as $tblobj){
    echo "<tr><td>";
    echo $tblobj->name;
    echo "</tr></td>";
}
?>
</table>