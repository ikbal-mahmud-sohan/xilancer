<div class="single-shop-left bg-white radius-10 mt-4">
    <div class="single-shop-left-title open">
        <h5 class="title"><?php echo e(__('Job Type')); ?></h5>
        <div class="single-shop-left-inner margin-top-15">
            <div class="single-shop-left-select">
                <select class="form-control" name="type" id="type">
                    <option value=""><?php echo e(__('Select')); ?></option>
                    <option value="fixed"><?php echo e(__('Fixed')); ?></option>
                    <?php if(moduleExists('HourlyJob')): ?>
                        <option value="hourly"><?php echo e(__('Hourly')); ?></option>
                    <?php endif; ?>
                </select>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/mac/Desktop/Laravel/xilancer-v2.9.0/core/resources/views/components/form/filter-job-type.blade.php ENDPATH**/ ?>