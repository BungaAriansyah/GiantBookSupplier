
<?php $__env->startSection('title', 'Book List'); ?>
<?php $__env->startSection('content'); ?>

    <div class="px-5 py-3">
        <div class="row row-cols-4 gy-4">

            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('book.card', ['book' => $b], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\BUNGA ARIANSYAH\Semester5\Web Programming\2440062810\resources\views/book/index.blade.php ENDPATH**/ ?>