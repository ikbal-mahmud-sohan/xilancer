<!-- Add Portfolio Popup Starts -->
<div class="popup-fixed portfolioadd-popup">
    <div class="popup-contents">
        <span class="popup-contents-close popup-close"> <i class="fas fa-times"></i> </span>
        <h5 class="popup-contents-title"><?php echo e(__('Add Portfolio')); ?></h5>
        <div class="error_msg_container mb-3"></div>
        <form action="#" id="add_portfolio_form">
            <div class="photo-uploaded photo-uploaded-padding center-text mt-4">
                <div class="photo-up loaded-flex uploadImage">
                    <div class="photo-uploaded-icon">
                        <img src="" class="portfolio_photo_preview">
                    </div>
                    <span class="create-project-wrapper-upload-browse-icon mt-3">
                        <i class="fa-solid fa-image"></i>
                    </span>
                    <span class="create-project-wrapper-upload-browse-para change_image_text"> <?php echo e(__('Click to upload portfolio image')); ?> </span>
                </div>
                <input class="photo-uploaded-file" type="file" name="image" id="upload_portfolio_photo">
                <span><strong><?php echo e(__('info:')); ?></strong><?php echo e(__('dimensions must be: 590x440')); ?></span>
            </div>

            <div class="popup-contents-form custom-form mt-4">
                <?php if (isset($component)) { $__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text','data' => ['title' => __('Title'),'type' => 'text','name' => 'portfolio_title','id' => 'portfolio_title','divClass' => 'mb-0','class' => 'form--control','placeholder' => __('Write Project Title')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Title')),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('text'),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('portfolio_title'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('portfolio_title'),'divClass' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('mb-0'),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('form--control'),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Write Project Title'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2)): ?>
<?php $attributes = $__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2; ?>
<?php unset($__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2)): ?>
<?php $component = $__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2; ?>
<?php unset($__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2); ?>
<?php endif; ?>
                <span id="portfolio_title_char_length_check"></span>
                <?php if (isset($component)) { $__componentOriginalcd97a59301ba78d56b3ed60dd41409ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcd97a59301ba78d56b3ed60dd41409ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.textarea','data' => ['title' => __('Description'),'name' => 'portfolio_description','id' => 'portfolio_description','divClass' => 'mb-0','class' => 'form-message','placeholder' => __('Type Project Details')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Description')),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('portfolio_description'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('portfolio_description'),'divClass' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('mb-0'),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('form-message'),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Type Project Details'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcd97a59301ba78d56b3ed60dd41409ab)): ?>
<?php $attributes = $__attributesOriginalcd97a59301ba78d56b3ed60dd41409ab; ?>
<?php unset($__attributesOriginalcd97a59301ba78d56b3ed60dd41409ab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd97a59301ba78d56b3ed60dd41409ab)): ?>
<?php $component = $__componentOriginalcd97a59301ba78d56b3ed60dd41409ab; ?>
<?php unset($__componentOriginalcd97a59301ba78d56b3ed60dd41409ab); ?>
<?php endif; ?>
                <span id="portfolio_description_char_length_check"></span>
            </div>
            <div class="popup-contents-btn flex-btn justify-content-end profile-border-top">
                <?php if (isset($component)) { $__componentOriginal48996d52dcd3abb9272cf9c4e59ea156 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal48996d52dcd3abb9272cf9c4e59ea156 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn.close','data' => ['title' => __('Cancel'),'class' => 'btn-profile btn-outline-gray btn-hover-danger popup-close']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('btn.close'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Cancel')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-outline-gray btn-hover-danger popup-close')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal48996d52dcd3abb9272cf9c4e59ea156)): ?>
<?php $attributes = $__attributesOriginal48996d52dcd3abb9272cf9c4e59ea156; ?>
<?php unset($__attributesOriginal48996d52dcd3abb9272cf9c4e59ea156); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal48996d52dcd3abb9272cf9c4e59ea156)): ?>
<?php $component = $__componentOriginal48996d52dcd3abb9272cf9c4e59ea156; ?>
<?php unset($__componentOriginal48996d52dcd3abb9272cf9c4e59ea156); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginald51d03ac38950c6ca9fceee323ea1e0d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald51d03ac38950c6ca9fceee323ea1e0d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn.submit','data' => ['title' => __('Save'),'class' => 'btn-profile btn-bg-1 add_portfolio']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('btn.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Save')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-bg-1 add_portfolio')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald51d03ac38950c6ca9fceee323ea1e0d)): ?>
<?php $attributes = $__attributesOriginald51d03ac38950c6ca9fceee323ea1e0d; ?>
<?php unset($__attributesOriginald51d03ac38950c6ca9fceee323ea1e0d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald51d03ac38950c6ca9fceee323ea1e0d)): ?>
<?php $component = $__componentOriginald51d03ac38950c6ca9fceee323ea1e0d; ?>
<?php unset($__componentOriginald51d03ac38950c6ca9fceee323ea1e0d); ?>
<?php endif; ?>
            </div>
        </form>
    </div>
</div>
<!-- Add Portfolio Popup Ends -->
<?php /**PATH /Users/mac/Desktop/Laravel/xilancer-v2.9.0/core/resources/views/frontend/profile-details/add-portfolio.blade.php ENDPATH**/ ?>