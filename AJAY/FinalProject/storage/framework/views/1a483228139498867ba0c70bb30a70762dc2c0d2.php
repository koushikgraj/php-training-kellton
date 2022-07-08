
<?php $__env->startSection('content'); ?>
<center>
  <div class="create">
<table border="5">
  
  <tr>
        <td>Id</td>
        <td>USER-ID</td>
        <td>LEAVE-TYPE</td>
        <td>START-DATE</td>
        <td>END-DATE</td>
        <td>REASON</td>
        <td>ACTION</td>
    </tr>
    <?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($leave->id); ?></td>
      <td><?php echo e($leave->user); ?></td>
      <td><?php echo e($leave->ltype); ?></td>
      <td><?php echo e($leave->sdate); ?></td>
      <td><?php echo e($leave->edate); ?></td>
      <td><?php echo e($leave->reason); ?></td>
      <td><?php echo e($leave->action); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </thead>
</table>
</div>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\demo\php-training-kellton\AJAY\FinalProject\resources\views/create.blade.php ENDPATH**/ ?>