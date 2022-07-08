
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
<!-- <td>Action</td> -->

</tr>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($d->name); ?></td>
    <td><?php echo e($d->email); ?></td>
    <td><?php echo e($d->dob); ?></td>
    <td><?php echo e($d->adhar); ?></td>
    <td><?php echo e($d->city); ?></td>
    <td><?php echo e($d->state); ?></td>
    <td><?php echo e($d->country); ?></td>
    <td><?php echo e($d->mobile); ?></td>
    <td><?php echo e($d->address); ?></td>
    <td><?php echo e($d->permant_address); ?></td>
    <td><?php echo e($d->marital_status); ?></td>
    <td><?php echo e($d->gender); ?></td>
    <td><?php echo e($d->education); ?></td>
    <td><?php echo e($d->year); ?></td>
<!-- <td>
     <a href="update/{id}" class="btn btn-info btn-sm">Modify</a> 
</td> -->
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\training\kellton-taining\php-training-kellton\erp_system\FinalProject\resources\views/get.blade.php ENDPATH**/ ?>