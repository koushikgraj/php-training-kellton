<?php
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "phpdatabase";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die ("connection fail :". mysqli_connect_error());
}

$sql = "SELECT * FROM student";

$qry = mysqli_query($conn , $sql);

?>

<?php
if(isset($_GET['action']) &&
   ($_GET['action'])== 'add' &&
   ($_GET['status'])== 'success')
   {
?>
<div>Student added Successfully</div>
<?php } ?>

<?php
if(isset($_GET['action']) &&
   ($_GET['action'])== 'update' &&
   ($_GET['status'])== 'success')
   {
?>
<div>Student updated Successfully</div>
<?php } ?>

<?php
if(isset($_GET['action']) &&
   ($_GET['action'])== 'delete' &&
   ($_GET['status'])== 'success')
   {
?>
<div>Student deleted Successfully</div>
<?php } ?>

<table border="1">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Mob</th>
        <th>Gender</th>
        <th>&nbsp;</th>
    </tr>
<?php
if(mysqli_num_rows($qry) > 0)
{
   while($row = mysqli_fetch_assoc($qry)) 
   {
?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mob']; ?></td>
        <td><?php echo $row['gender']; ?></td>
    </tr>
   }
}
?>
</table>