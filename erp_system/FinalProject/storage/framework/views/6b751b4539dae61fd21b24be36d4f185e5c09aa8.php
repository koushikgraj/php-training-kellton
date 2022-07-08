
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
</head>
<body>

<h1>User Profile</h1>
<table> 

<tr><td>Name</td>
<td>E-mail</td>
<td>DOB</td>
<td>Adhar</td>
<td>City</td>
<td>state</td>
<td>country</td>
<td>mobile</td>
<td>address</td>
<td>Permant</td>
<td>marital status</td>
<td>gender</td>
<td>education</td>
<td>year</td>
<td>Action</td>

</tr>

<tr>
    <td><?php echo e($data->name); ?></td>
    <td><?php echo e($data->email); ?></td>
    <td><?php echo e($data->dob); ?></td>
    <td><?php echo e($data->adhar); ?></td>
    <td><?php echo e($data->city); ?></td>
    <td><?php echo e($data->state); ?></td>
    <td><?php echo e($data->country); ?></td>
    <td><?php echo e($data->mobile); ?></td>
    <td><?php echo e($data->address); ?></td>
    <td><?php echo e($data->permant_address); ?></td>
    <td><?php echo e($data->marital_status); ?></td>
    <td><?php echo e($data->gender); ?></td>
    <td><?php echo e($data->education); ?></td>
    <td><?php echo e($data->year); ?></td>
<td>
     <a href="#" class="btn btn-info btn-sm">Modify</a> 
</td>
</tr>

</table>
</body>
</html>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\training\kellton-taining\php-training-kellton\erp_system\FinalProject\resources\views/update.blade.php ENDPATH**/ ?>