<?php $__env->startSection('content'); ?>



    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered shadow-sm">
                        <thead>
                        <tr class="thead-dark text-center">
                            <th>№</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Report subject</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = ($members->currentPage() - 1) * 10?>
                        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center">
                                <td class="align-middle"><?php echo e(++$i); ?></td>
                                <?php if($member['photo'] != null): ?>
                                    <td class="td-photo">
                                        <div class="box">
                                            
                                            <?php if(preg_match('/^(https?)+[a-z, A-Z, 0-9, \/, \?, \:, \.]+$/', $member->photo) == 1): ?>
                                                <div class="img_wrapper">
                                                    <img class="profile-img rounded-circle" src="<?php echo e($member->photo); ?>"
                                                         alt="avatar">
                                                </div>

                                            <?php else: ?>
                                                <img class="profile-img rounded-circle"
                                                     src="<?php echo e(asset('storage/images/'.$member->photo)); ?>">
                                            <?php endif; ?>

                                        </div>
                                    </td>
                                <?php else: ?>
                                    <td class="td-photo">
                                        <div class="box">
                                            <img class="img rounded-circle" src="storage/default.jpg">
                                        </div>

                                    </td>
                                <?php endif; ?>


                                <td class="align-middle mw-20"><?php echo e($member->firstname . " " . $member->lastname); ?></td>
                                <td class="align-middle mw-30"><?php echo e($member->rep_subject); ?></td>
                                <td class="align-middle mw-20"><a
                                        href="<?php echo e('mailto:' . $member->email); ?>"> <?php echo e($member->email); ?></a></td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <?php echo e($members->links()); ?>

            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/developer/PhpstormProjects/AlbTask2/src/resources/views/list.blade.php ENDPATH**/ ?>