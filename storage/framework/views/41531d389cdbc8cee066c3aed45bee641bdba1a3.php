<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giant Book Supplier | <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
        }

        * {
            font-family: "Ubuntu", Verdana, Geneva, Tahoma, sans-serif !important
        }
    </style>
</head>

<body class="d-flex flex-column">
    <nav class="navbar navbar-expand-lg bg-warning px-5">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand fw-bolder" href="/">
                <h3 style="color: white" class="navbar-brand" href="/">Giant Book Supplier</h3>
            </a>
           
        </div>
        
    </nav>

    <main class="p-3">
        <div class="container-fluid">
            <div class="">
                <ul class="navbar-nav mb-2 mb-lg-0 flex-row justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    &emsp;
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a class="dropdown-item"
                                        href="<?php echo e(route('category.detail', $c->id)); ?>"><?php echo e($c->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    &emsp;
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('publisher.index')); ?>">Publisher</a>
                    </li>
                    &emsp;
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>
                    </li>
                    <br>
                </ul>
            </div>
        </div>
        <h2 style="background-color: grey" class="w-100 text-left"><?php echo $__env->yieldContent('title'); ?></h2>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="bg-primary py-2 mt-auto w-100 d-flex gap-1 align-items-center justify-content-center" style="color: white">
        <div>
            &copy; Happy Book Store 2022
        </div>
        <i>
            by Bunga Sari Ariansyah - 2440062810
        </i>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>
</html><?php /**PATH C:\BUNGA ARIANSYAH\Semester5\Web Programming\2440062810\resources\views/base.blade.php ENDPATH**/ ?>