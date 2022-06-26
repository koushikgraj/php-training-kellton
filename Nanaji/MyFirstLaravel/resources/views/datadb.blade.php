<table border="1">
    <tr><th>datadb</th><tr>
<?php
foreach ($data as $tblObj){
    echo "<tr><td>";
    echo $tblObj->datadb;
    echo "</tr></td>";

}
?>
</table>