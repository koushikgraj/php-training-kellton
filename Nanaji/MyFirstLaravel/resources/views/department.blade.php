<h1> DataBase</h1>
<br>
<table border="1">
    <tr><th>Id</th><th>Name</th><th>Dept</th></tr>
    
<?php
foreach ($data as $value) {
            echo "<tr><td>";
            echo $value->Id;
            echo "</td>";
            echo "<td>";
            echo $value->Name;
            echo "</td>";
			echo "<td>";
            echo $value->Dept;
            echo "</td></tr>";

          
            
        }
?>
</table>