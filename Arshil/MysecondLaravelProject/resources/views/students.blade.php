<h1>Printing subjects in students blade</h1>
<br>
<table border="1">
    <tr><th>Subjects</th></tr>
<?php
foreach ($data as $tblObj) {
            echo "<tr><td>";
            echo $tblObj->name;
            echo "</tr></td>";
        }
?>
</table>
