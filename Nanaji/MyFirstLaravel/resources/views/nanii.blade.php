<h1> DataBase</h1>
<br>
<table border="1">
    <tr><th>subject1</th><th>subject2</th><th>subject3</th></tr>
    
<?php
foreach ($data as $value) {
            echo "<tr><td>";
            echo $value->subject1;
            echo "</td>";
            echo "<td>";
            echo $value->subject2;
            echo "</td>";
			echo "<td>";
            echo $value->subject3;
            echo "</td></tr>";

          
            
        }
?>
</table>