<h1>Printing members in member blade</h1>
<br>
<table border="1">
    <tr><th>Members</th></tr>
<?php
foreach ($data as $tblObj) {
            echo "<tr><td>";
            echo $tblObj->name;
            echo "</tr></td>";
        }
?>
</table>