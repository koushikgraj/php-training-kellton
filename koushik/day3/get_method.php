<?php
function pr($data)
{
	echo "<pre>";print_r($data);echo "</pre>";
}
pr($_GET);
echo "Name is {$_GET['name']}";
pr($_REQUEST);

pr($_POST);
?>

<textarea></textarea>

<select>
	<option value=1>India</option>
	<option value=1>US</option>
	<option value=1>UK</option>
	<option value=1>Aus</option>
</select>

<?php
if(isset($_POST['btnsubmit'])){
	echo "<pre>";print_r($_POST);echo "</pre>";
}
?>