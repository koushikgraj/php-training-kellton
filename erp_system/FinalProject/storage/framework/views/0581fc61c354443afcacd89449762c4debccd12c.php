
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<div class="row">
  <div class="column" style="background-color:black; border: 5px solid grey;">
 <justify><a href="layout"> <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Home</h2></a></justify>
  
    <p></p>
  </div>
  <?php if(session('is_manager') =='1'): ?>
  <div class="column" style="background-color:black; border: 5px solid grey; ">
 <a href="get"> <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>All User Profile</h2></a>
    <p></p>
  </div>

  <div class="column" style="background-color:black; border: 5px solid grey; ">
 <a href="add"> <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Add User</h2></a>
    <p></p>
  </div>
  <?php endif; ?>
  <div class="column" style="background-color:black; border: 5px solid grey; ">
 <a href="update"> <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Update My Profile</h2></a>
    <p></p>
  </div>
</div>

</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp\www\training\kellton-taining\php-training-kellton\erp_system\FinalProject\resources\views/dashboard.blade.php ENDPATH**/ ?>