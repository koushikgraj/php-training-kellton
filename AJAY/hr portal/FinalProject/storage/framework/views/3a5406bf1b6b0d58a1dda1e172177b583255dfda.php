
<?php $__env->startSection('content'); ?>
<center>
<div class ="vdetails">
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <h1> <strong>User:</strong>
                <?php echo e($leave->user); ?></h1>
            </div>
        </div>
</div><br>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <h1> <strong>Leave-Type:</strong>
                <?php echo e($leave->ltype); ?></h1>
            </div>
        </div>
</div><br>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h1> <strong>Starting_date:</strong>
                <?php echo e($leave->sdate); ?></h1>
            </div>
        </div>
</div><br>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h1> <strong>End_date:</strong>
                <?php echo e($leave->edate); ?></h1>
            </div>
        </div>
</div><br>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h1> <strong>Reason:</strong>
                <?php echo e($leave->reason); ?></h1>
            </div>
        </div>
        </div><br>
        <!-- <button type="button" class="btn btn-secondary" value="approved" name="action">Approved</button>
        <button type="button" class="btn btn-secondary" value="disapproved" name="action">Not Approved</button>
        <button type="button" class="btn btn-secondary" value="hold" name="action">Hold</button> -->
        <form action="<?php echo e(url('adaction')); ?>" method="post">
            <?php echo csrf_field(); ?>
     <h1>   Action:<select name="action" >
          <option value="approved">Approved</option>
          <option value="rejected">Not approved</option>
          <option value="on hold">Hold</option>
          </select>
          <input type="hidden" name="id" value="<?php echo e(request()->route('id')); ?>">
          <input type="hidden" name="user" value="<?php echo e($leave->user); ?>">
          <!-- <button type="button" class="btn btn-secondary" value="Submit"><a href="admin">Submit</a></button>  -->
          <!-- <a href="admin">Submit</a> -->
          <input type="submit" value="Submit" ></h1>
</form>
</div>
</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\practice\php-training-kellton\Aditi\FinalProject\resources\views/view-details.blade.php ENDPATH**/ ?>