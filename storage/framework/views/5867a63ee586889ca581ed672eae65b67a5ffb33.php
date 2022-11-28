<div class="col">

    <div class="card h-100">

        <img src="<?php echo e(asset($book->image)); ?>" class="card-img-top" alt="<?php echo e($book->title . ' Image'); ?>">

        <div class="card-body h-100 d-flex flex-column">

            <h5 class="card-title"><?php echo e($book->title); ?></h5>
            <p class="card-text"><i>by</i> <?php echo e($book->author); ?></p>
            <a href="<?php echo e(route('book.detail', $book->id)); ?>" class="btn btn-primary mt-auto">Detail</a>
            
        </div>

    </div>

</div><?php /**PATH C:\BUNGA ARIANSYAH\Semester5\Web Programming\2440062810\resources\views/book/card.blade.php ENDPATH**/ ?>