<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <?php echo $__env->yieldContent('adminContent'); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/developer/PhpstormProjects/AlbTask2/src/resources/views/home.blade.php ENDPATH**/ ?>