<div class="container">
    <div class="row">
        <div class="col-8 offset-2 text-center">
            <div id="icons">
                <div class="row mb-5">
                    <div class="col-12">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e($share_config['link']); ?>"
                           onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resisable=yes,' +
                                    'scrollbars=yes,height=500,width=800');return false;"
                           class="fa fa-facebook mr-3"></a>
                        <a href="https://twitter.com/share?url=<?php echo e($share_config['link']); ?>&text=<?php echo e($share_config['text']); ?>"
                           onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resisable=yes,' +
                                    'scrollbars=yes,height=500,width=800');return false;"
                           class="fa fa-twitter ml-3"></a>

                    </div>
                </div>

                <div class="row">
                    <div class="col-4 offset-4">
                        <form action="<?php echo e(route('members-list')); ?>" target="_blank" method="LINK">
                            <button class="btn btn-primary btn-lg btn-block shadow-sm" id="btnList">
                            </button>
                        </form>

                        <form action="<?php echo e(route('new-form')); ?>" method="LINK">
                            <button class="btn btn-primary btn-lg btn-block shadow-sm mt-3">Fill form
                                again
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/developer/PhpstormProjects/AlbTask2/src/resources/views/socialNetworks.blade.php ENDPATH**/ ?>