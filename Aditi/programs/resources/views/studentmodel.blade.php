<h1> printing subjects are:</h1>
<br>
<table border ="1">
    <tr>
        <th>Subjects</th>
</tr>
<?php
foreach($data as $tblobj){
    echo "<tr><td>";
    echo $tblobj->subjects;
    echo "</td></tr>";
}   
?>
</table>