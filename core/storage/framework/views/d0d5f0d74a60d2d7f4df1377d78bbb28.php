<div class="row g-4">
    <?php $current_date = \Carbon\Carbon::now()->toDateTimeString() ?>
    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xxl-6">
            <div class="project-category-item radius-10">
                <div class="single-project project-catalogue">
                    <div class="single-project-thumb">
                        <a href="<?php echo e(route('project.details', ['username' => $project->project_creator?->username, 'slug' => $project->slug])); ?>">
                        <div class="project-preview-thumb">
                                <?php if($project->video): ?>
                                    <!-- Display video if available -->
                                    <video controls class="w-full h-auto max-w-full" style="width:100%">
                                        <?php if(cloudStorageExist() && in_array(Storage::getDefaultDriver(), ['s3', 'cloudFlareR2', 'wasabi'])): ?>
                                            <source src="<?php echo e(Storage::url('project/'.$project->video)); ?>" type="video/mp4">
                                        <?php else: ?>
                                            <source src="<?php echo e(asset('core/public/assets/uploads/project/'.$project->video)); ?>" type="video/mp4">
                                        <?php endif; ?>
                                        <?php echo e(__('Your browser does not support the video tag.')); ?>

                                    </video>
                                <?php else: ?>
                                    <!-- Display image if no video is available -->
                                    <?php if(cloudStorageExist() && in_array(Storage::getDefaultDriver(), ['s3', 'cloudFlareR2', 'wasabi'])): ?>
                                        <img src="<?php echo e(render_frontend_cloud_image_if_module_exists('project/'.$project->image, load_from: $project->load_from)); ?>" alt="<?php echo e($project->title ?? ''); ?>">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('assets/uploads/project/'.$project->image) ?? ''); ?>" alt="<?php echo e($project->title ?? ''); ?>">
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                    <div class="single-project-content">
                        <div class="single-project-content-top align-items-center flex-between">
                            <?php if(moduleExists('PromoteFreelancer')): ?>
                                <?php if($project->pro_expire_date >= $current_date  && $project->is_pro === 'yes'): ?>
                                    <?php if($is_pro == 1): ?>
                                        
                                        <?php Session::put('is_pro',$is_pro) ?>
                                        <div class="single-project-content-review pro-profile-badge">
                                            <div class="pro-icon-background">
                                                <i class="fas fa-check"></i>
                                            </div>
                                            <small><?php echo e(__('Pro')); ?></small>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php echo project_rating($project->id); ?>

                        </div>
                        <h4 class="single-project-content-title">
                            <a href="<?php echo e(route('project.details', ['username' => $project->project_creator?->username, 'slug' => $project->slug])); ?>"> <?php echo e($project->title); ?> </a>
                        </h4>
                    </div>
                    <div class="single-project-bottom flex-between">
                        <span class="single-project-content-price">
                            <?php if($project->basic_discount_charge): ?>
                                <?php echo e(float_amount_with_currency_symbol($project->basic_discount_charge)); ?>

                                <s><?php echo e(float_amount_with_currency_symbol($project->basic_regular_charge)); ?></s>
                            <?php else: ?>
                                <?php echo e(float_amount_with_currency_symbol($project->basic_regular_charge)); ?>

                            <?php endif; ?>
                        </span>
                        <div class="single-project-delivery">
                            <span class="single-project-delivery-icon"> <i class="fa-regular fa-clock"></i><?php echo e(__('Delivery')); ?></span>
                            <span class="single-project-delivery-days"> <?php echo e($project->basic_delivery); ?> </span>
                        </div>
                    </div>
                    <div class="project-category-item-bottom profile-border-top">
                        <div class="project-category-item-bottom-flex flex-between align-items-center">
                            <div class="project-category-right-flex flex-btn">
                                <?php if (isset($component)) { $__componentOriginale21bda0e4eb7de5736eda0cf4920c139 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale21bda0e4eb7de5736eda0cf4920c139 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.bookmark','data' => ['identity' => $project->id,'type' => 'project']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.bookmark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['identity' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project->id),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('project')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale21bda0e4eb7de5736eda0cf4920c139)): ?>
<?php $attributes = $__attributesOriginale21bda0e4eb7de5736eda0cf4920c139; ?>
<?php unset($__attributesOriginale21bda0e4eb7de5736eda0cf4920c139); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale21bda0e4eb7de5736eda0cf4920c139)): ?>
<?php $component = $__componentOriginale21bda0e4eb7de5736eda0cf4920c139; ?>
<?php unset($__componentOriginale21bda0e4eb7de5736eda0cf4920c139); ?>
<?php endif; ?>
                            </div>
                            <div class="project-category-item-btn flex-btn">
                                <?php if(moduleExists('SecurityManage')): ?>
                                    <?php if(Auth::guard('web')->check() && Auth::guard('web')->user()->freeze_order_create == 'freeze'): ?>
                                        <a href="#" class="btn-profile btn-outline-1 <?php if(Auth::guard('web')->user()->freeze_order_create == 'freeze'): ?> disabled-link <?php endif; ?>"> <?php echo e(__('Order Now')); ?> </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('project.details', ['username' => $project->project_creator?->username, 'slug' => $project->slug])); ?>" class="btn-profile btn-outline-1"> <?php echo e(__('Order Now')); ?> </a>
                                    <?php endif; ?>
                                <?php else: ?>
                                <a href="<?php echo e(route('project.details', ['username' => $project->project_creator?->username, 'slug' => $project->slug])); ?>" class="btn-profile btn-outline-1"> <?php echo e(__('Order Now')); ?> </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php if (isset($component)) { $__componentOriginal0143df8887fb9686c5dbf1f1b0d7027f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0143df8887fb9686c5dbf1f1b0d7027f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pagination.laravel-paginate','data' => ['allData' => $projects]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pagination.laravel-paginate'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['allData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($projects)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0143df8887fb9686c5dbf1f1b0d7027f)): ?>
<?php $attributes = $__attributesOriginal0143df8887fb9686c5dbf1f1b0d7027f; ?>
<?php unset($__attributesOriginal0143df8887fb9686c5dbf1f1b0d7027f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0143df8887fb9686c5dbf1f1b0d7027f)): ?>
<?php $component = $__componentOriginal0143df8887fb9686c5dbf1f1b0d7027f; ?>
<?php unset($__componentOriginal0143df8887fb9686c5dbf1f1b0d7027f); ?>
<?php endif; ?>
<?php /**PATH /Users/mac/Desktop/Laravel/xilancer-v2.9.0/core/resources/views/frontend/pages/projects/search-result.blade.php ENDPATH**/ ?>