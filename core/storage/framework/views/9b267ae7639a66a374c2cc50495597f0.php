<!-- Upload Video Start -->
<div class="setup-wrapper-contents">
    <div class="create-project-wrapper-item">
        <div class="create-project-wrapper-item-top profile-border-bottom">
            <h4 class="create-project-wrapper-title"><?php echo e(__('Upload Video')); ?> </h4>
        </div>
        <div class="create-project-wrapper-upload">
            <div class="create-project-wrapper-upload-browse center-text radius-10">

                <?php if(cloudStorageExist() && in_array(Storage::getDefaultDriver(), ['s3', 'cloudFlareR2', 'wasabi'])): ?>
                    <video controls class="project_video_preview">
                        <source src="<?php echo e(render_frontend_cloud_video_if_module_exists( 'project/'.$project_details->video, load_from: $project_details->load_from)); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                <?php else: ?>
                    <?php if($project_details->video): ?>
                        <video controls class="project_video_preview">
                            <source src="<?php echo e(asset('core/public/assets/uploads/project/'.$project_details->video)); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    <?php else: ?>
                        <video controls class="project_video_preview">
                            <source src="" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    <?php endif; ?>
                <?php endif; ?>

                <span class="create-project-wrapper-upload-browse-icon mt-3">
                    <i class="fa-solid fa-video"></i>
                </span>
                <span class="create-project-wrapper-upload-browse-para"> <?php echo e(__('Drag and drop or Click to browse video')); ?> </span>
                <input class="upload-video" type="file" name="video" id="upload_project_video" accept="video/*">
            </div>
            <p class="mt-3"><strong><?php echo e(__('info:')); ?></strong> <?php echo e(__('Recommended format: MP4, max size: 50MB')); ?></p>
        </div>
    </div>
</div>
<!-- Upload Video Ends -->
<?php /**PATH /Users/mac/Desktop/Laravel/xilancer-v2.9.0/core/resources/views/frontend/user/freelancer/project/edit/project-video.blade.php ENDPATH**/ ?>