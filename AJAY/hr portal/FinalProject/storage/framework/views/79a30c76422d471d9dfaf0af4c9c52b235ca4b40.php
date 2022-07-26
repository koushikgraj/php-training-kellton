
<?php $__env->startSection('content'); ?>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">USER-ID</th>
      <th scope="col">TYPE</th>
      <th scope="col">START-DATE</th>
      <th scope="col">END-DATE</th>
      <th scope="col">REASON</th>
      <th scope="col">ACTION</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($leave->id); ?></td>
      <td><?php echo e($leave->user); ?></td>
      <td><?php echo e($leave->ltype); ?></td>
      <td><?php echo e($leave->sdate); ?></td>
      <td><?php echo e($leave->edate); ?></td>
      <td><?php echo e($leave->reason); ?></td>
      <td><?php echo e($leave->action); ?></td>
      <td><a href="details/<?php echo e($leave->id); ?>">View Details</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practice\php-training-kellton\Aditi\FinalProject\resources\views/admin.blade.php ENDPATH**/ ?>