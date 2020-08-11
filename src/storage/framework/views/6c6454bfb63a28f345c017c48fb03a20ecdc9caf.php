<?php $__env->startSection('adminContent'); ?>
    <div class="card mt-4">
        <div class="card-header"><?php echo e(__('Admin panel')); ?></div>
        <div class="card-body">
            <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-12 col-lg mb-2">
                    <a class="btn btn-primary btn-lg btn-block" href="/">Register form</a>
                </div>

                <div class="col-12 col-lg mb-2">
                    <a class="btn btn-primary btn-lg btn-block" href="<?php echo e(route('members-list')); ?>">Members list</a>
                </div>

                <div class="col-12 col-lg mb-2">
                    <a class="btn btn-primary btn-lg btn-block" href="<?php echo e(route('members-list-admin')); ?>">Admin members
                        list</a>
                </div>
            </div>


        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/developer/PhpstormProjects/AlbTask2/src/resources/views/admin/admin.blade.php ENDPATH**/ ?>