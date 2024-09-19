<!-- Upload Gallery Start -->
<div class="setup-wrapper-contents">
    <div class="create-project-wrapper-item">
        <div class="create-project-wrapper-item-top profile-border-bottom">
            <h4 class="create-project-wrapper-title"><?php echo e(__('Upload Gallery')); ?> </h4>
        </div>
        <div class="create-project-wrapper-upload">
            <div class="create-project-wrapper-upload-browse center-text radius-10">

                <?php if(cloudStorageExist() && in_array(Storage::getDefaultDriver(), ['s3', 'cloudFlareR2', 'wasabi'])): ?>
                    <img src="<?php echo e(render_frontend_cloud_image_if_module_exists( 'project/'.$project_details->image, load_from: $project_details->load_from)); ?>" alt="project" class="project_photo_preview">
                <?php else: ?>
                    <?php if($project_details->image): ?>
                        <img src="<?php echo e(asset('assets/uploads/project/'.$project_details->image)); ?>" alt="<?php echo e(__('Project Image')); ?>" class="project_photo_preview">
                    <?php else: ?>
                        <img src="" alt="<?php echo e(__('Project Image')); ?>" class="project_photo_preview">
                    <?php endif; ?>
                <?php endif; ?>


                <span class="create-project-wrapper-upload-browse-icon mt-3">
                    <i class="fa-solid fa-image"></i>
                </span>
                <span class="create-project-wrapper-upload-browse-para"> <?php echo e(__('Drag and drop or Click to browse files')); ?> </span>
                <input class="upload-gallery" type="file" name="image" id="upload_project_photo">
            </div>
            <p class="mt-3"><strong><?php echo e(__('info:')); ?></strong> <?php echo e(__('recommended dimensions 1770x960 pixels')); ?></p>
        </div>
    </div>
</div>
<!-- Upload Gallery Ends -->
<?php /**PATH /Users/mac/Desktop/Laravel/xilancer-v2.9.0/core/resources/views/frontend/user/freelancer/project/edit/project-image.blade.php ENDPATH**/ ?>