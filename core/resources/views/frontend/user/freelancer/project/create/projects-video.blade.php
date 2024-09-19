<!-- Upload Video Start -->
<div class="setup-wrapper-contents">
    <div class="create-project-wrapper-item">
        <div class="create-project-wrapper-item-top profile-border-bottom">
            <h4 class="create-project-wrapper-title">{{ __('Upload Video') }} </h4>
        </div>
        <div class="create-project-wrapper-upload">
            <div class="create-project-wrapper-upload-browse center-text radius-10">

               

                <span class="create-project-wrapper-upload-browse-icon mt-3">
                    <i class="fa-solid fa-video"></i>
                </span>
                <span class="create-project-wrapper-upload-browse-para"> {{ __('Drag and drop or Click to browse video') }} </span>
                <input class="upload-video" type="file" name="video" id="upload_project_video" accept="video/*">
            </div>
            <p class="mt-3"><strong>{{ __('info:') }}</strong> {{ __('Recommended format: MP4, max size: 50MB') }}</p>
        </div>
    </div>
</div>
<!-- Upload Video Ends -->
