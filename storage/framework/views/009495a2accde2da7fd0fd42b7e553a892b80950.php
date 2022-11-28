
<?php $__env->startSection('title', 'Publisher'); ?>
<?php $__env->startSection('content'); ?>

    <div class="px-5 py-3 container">
        <div class="row row-cols-2 gx-3 gy-3">

            <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('publisher.card', ['publisher' => $p], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BUNGA ARIANSYAH\Semester5\Web Programming\2440062810\resources\views/publisher/index.blade.php ENDPATH**/ ?>