<div class="col">
    <div class="card h-100">
        <div class="row g-0 h-100">
            <div class="col-md-4 d-flex align-items-center">
                <img src="<?php echo e(asset($publisher->image)); ?>" class="img-fluid rounded"
                    alt="<?php echo e($publisher->name . ' image'); ?>">
            </div>

            <div class="col-md-8">
                <div class="card-body h-100 d-flex flex-column">
                    <h5 class="card-title"><?php echo e($publisher->name); ?></h5>
                    <p class="card-text "><?php echo e($publisher->address); ?></p>
                    <div class="mt-auto d-flex w-100 justify-content-end">
                        <a href="<?php echo e(route('publisher.detail', $publisher->id)); ?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\BUNGA ARIANSYAH\Semester5\Web Programming\2440062810\resources\views/publisher/card.blade.php ENDPATH**/ ?>