<h1>Fetching data from DataBase</h1>
<br>
<table border="1">
    <tr><th>Name</th><th>Dept</th><th>Mob</th></tr>
    
<?php
foreach ($data as $value) {
            echo "<tr><td>";
            echo $value->Name;
            echo "</td>";
            echo "<td>";
            echo $value->Dept;
            echo "</td>";
            echo "<td>";
            echo $value->MobNo;
            echo "</td><tr>";
            
        }
?>
</table>