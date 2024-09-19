<?php if(Cache::has('user_is_online_'.$userID)): ?>
    <span class="single-freelancer-author-status"> <?php echo e(__('Active')); ?> </span>
<?php else: ?>
    <span class="single-freelancer-author-status-ofline"> <?php echo e(__('Inactive')); ?> </span>
<?php endif; ?><?php /**PATH /Users/mac/Desktop/Laravel/xilancer-v2.9.0/core/resources/views/components/status/user-active-inactive-check.blade.php ENDPATH**/ ?>