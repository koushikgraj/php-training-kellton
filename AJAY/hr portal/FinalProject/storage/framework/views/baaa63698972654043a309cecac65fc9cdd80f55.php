
<?php $__env->startSection('content'); ?>
<table border="1">
  
  <tr>
        <td>Id</td>
        <td>USER-ID</td>
        <td>LEAVE-TYPE</td>
        <td>START-DATE</td>
        <td>END-DATE</td>
        <td>REASON</td>
        
    </tr>
    <?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($leave->id); ?></td>
      <td><?php echo e($leave->user); ?></td>
      <td><?php echo e($leave->ltype); ?></td>
      <td><?php echo e($leave->sdate); ?></td>
      <td><?php echo e($leave->edate); ?></td>
      <td><?php echo e($leave->reason); ?></td>
      <!-- <td><?php echo e($leave[id]); ?></td> -->
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </thead>
  
  <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody> -->
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practice.php\php-training-kellton\Harsh\dffgd\FinalProject\resources\views/create.blade.php ENDPATH**/ ?>