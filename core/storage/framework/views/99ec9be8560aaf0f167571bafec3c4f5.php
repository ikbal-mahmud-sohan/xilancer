<div class="shop-contents-wrapper-right">
    <div class="row g-4">
            <div class="col-lg-12">
                <div class="categoryWrap-wrapper-item">
                    <div class="row g-4">
                        <?php $current_date = \Carbon\Carbon::now()->toDateTimeString() ?>
                        <?php $__currentLoopData = $talents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $talent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xxl-4 col-md-6">
                                <div class="single-freelancer center-text radius-20">
                                    <div class="single-freelancer-author">
                                        <?php if(moduleExists('PromoteFreelancer')): ?>
                                            <?php if($talent->pro_expire_date >= $current_date  && $talent->is_pro === 'yes'): ?>
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
                                        <div class="single-freelancer-author-thumb mb-2">
                                            <?php if($talent->image): ?>
                                                <a href="<?php echo e(route('freelancer.profile.details', $talent->username)); ?>">
                                                    <?php if(cloudStorageExist() && in_array(Storage::getDefaultDriver(), ['s3', 'cloudFlareR2', 'wasabi'])): ?>
                                                        <img src="<?php echo e(render_frontend_cloud_image_if_module_exists( 'profile/'. $talent->image, load_from: $talent->load_from)); ?>" alt="<?php echo e($talent->first_name); ?>">
                                                    <?php else: ?>
                                                    <img src="<?php echo e(asset('assets/uploads/profile/' . $talent->image)); ?>"
                                                         alt="<?php echo e($talent->first_name); ?>">
                                                    <?php endif; ?>
                                                </a>
                                                <?php if(moduleExists('FreelancerLevel')): ?>
                                                    <div class="freelancer-level-badge">
                                                        <?php echo freelancer_level($talent->id,'talent') ?? ''; ?>

                                                    </div>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <a href="<?php echo e(route('freelancer.profile.details', $talent->username)); ?>">
                                                    <img src="<?php echo e(asset('assets/static/img/author/author.jpg')); ?>"
                                                         alt="<?php echo e(__('AuthorImg')); ?>">
                                                </a>
                                                <?php if(moduleExists('FreelancerLevel')): ?>
                                                    <div class="freelancer-level-badge">
                                                        <?php echo freelancer_level($talent->id,'talent') ?? ''; ?>

                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                        <?php if (isset($component)) { $__componentOriginal904e0112ca5a0dc03a39a72400a188a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal904e0112ca5a0dc03a39a72400a188a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.user-active-inactive-check','data' => ['userID' => $talent->id]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.user-active-inactive-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['userID' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($talent->id)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal904e0112ca5a0dc03a39a72400a188a0)): ?>
<?php $attributes = $__attributesOriginal904e0112ca5a0dc03a39a72400a188a0; ?>
<?php unset($__attributesOriginal904e0112ca5a0dc03a39a72400a188a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal904e0112ca5a0dc03a39a72400a188a0)): ?>
<?php $component = $__componentOriginal904e0112ca5a0dc03a39a72400a188a0; ?>
<?php unset($__componentOriginal904e0112ca5a0dc03a39a72400a188a0); ?>
<?php endif; ?>
                                        <h4 class="single-freelancer-author-name mt-2">
                                            <a href="<?php echo e(route('freelancer.profile.details', $talent->username)); ?>">
                                                <?php echo e($talent->full_name); ?>

                                                <?php if($talent->user_verified_status == 1): ?> <i class="fas fa-circle-check"></i><?php endif; ?>
                                            </a>
                                        </h4>
                                        <span class="single-freelancer-author-para mt-2">
                                            <?php echo e($talent?->user_introduction?->title ?? ''); ?>

                                        </span>
                                        <?php echo freelancer_rating_for_profile_details_page($talent->id); ?>

                                    </div>
                                    <div class="single-freelancer-bottom">
                                        <div class="btn-wrapper">
                                            <a href="<?php echo e(route('freelancer.profile.details', $talent->username)); ?>" class="cmn-btn btn-bg-gray btn-small w-100 radius-5"> <?php echo e(__('View Profile')); ?> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php if (isset($component)) { $__componentOriginal0143df8887fb9686c5dbf1f1b0d7027f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0143df8887fb9686c5dbf1f1b0d7027f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pagination.laravel-paginate','data' => ['allData' => $talents]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pagination.laravel-paginate'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['allData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($talents)]); ?>
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
<?php /**PATH /Users/mac/Desktop/Laravel/xilancer-v2.9.0/core/resources/views/frontend/pages/talent/search-talent-result.blade.php ENDPATH**/ ?>