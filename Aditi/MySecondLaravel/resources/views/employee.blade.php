<h1 style="green">Employee details here:</h1>
<br>
<table border="2">
    <tr><th>Employees</th></tr>
<?php
foreach ($data as $tblObj) {
            echo "<tr><td>";
            echo $tblObj->id;
            echo "</td>";
            echo "<td>";
            echo $tblObj->name;
            echo "</td>";
            echo "<td>";
            echo $tblObj->email;
            echo "</tr></td>";
        }
?>
</table>