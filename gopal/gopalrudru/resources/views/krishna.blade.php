<h1>fetching data from database </h1>
<br>
<table border='1'>
    <tr><th>id</th><th>subject</th><th>marks</th><th>age</th></tr>
<?php
foreach ($data as $value){
    echo "<tr><td>";
    echo $value->id;
    echo "</td>";
    echo "<td>";
    echo $value->subject;
    echo "</td>";
    echo "<td>";
    echo $value->marks;
    echo "</td>";
    echo "<td>";
    echo $value->age;
    echo "</td></tr>";
   
}