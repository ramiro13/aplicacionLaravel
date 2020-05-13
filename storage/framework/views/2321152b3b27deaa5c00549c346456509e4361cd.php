;

<?php $__env->startSection('content'); ?>
<div class="content">

<div class="row">

<?php $__currentLoopData = $notas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="col-3">
    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header p-3"> <b><?php echo e($nota->titulo); ?></b>  <div class="float-right"><?php echo e($nota->created_at); ?></div> </div>
        <div class="card-body">
            <p class="card-text"><?php echo e($nota->texto); ?></p>
        </div>
    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\admin\resources\views/notas/todas.blade.php ENDPATH**/ ?>