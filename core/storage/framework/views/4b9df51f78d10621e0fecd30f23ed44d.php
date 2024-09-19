<div class="shop-sidebar-content">
    <div class="shop-close-content">
        <div class="shop-close-content-icon"> <i class="fas fa-times"></i> </div>
        <div class="single-shop-left bg-white radius-10">
            <div class="single-shop-left-filter">
                <div class="single-shop-left-filter-flex flex-between">
                    <div class="single-shop-left-filter-title">
                        <h5 class="title">
                            <?php echo e(__('Project Filter')); ?> </h5>
                    </div>
                    <a href="javascript:void(0)" class="single-shop-left-filter-reset" id="project_filter_reset"><?php echo e(__('Reset Filter')); ?></a>
                </div>
            </div>
        </div>
        <div class="single-shop-left bg-white radius-10 mt-3">
            <div class="single-shop-left-title open">
                <h5 class="title"> <?php echo e(__('Search by Country')); ?> </h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <?php if (isset($component)) { $__componentOriginal12fe48fc0aa2632da8ebcb778f3ef00f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12fe48fc0aa2632da8ebcb778f3ef00f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.filter-project-job-country','data' => ['innerTitle' => __('Select'),'name' => 'country','id' => 'country']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.filter-project-job-country'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['innerTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Select')),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('country'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('country')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12fe48fc0aa2632da8ebcb778f3ef00f)): ?>
<?php $attributes = $__attributesOriginal12fe48fc0aa2632da8ebcb778f3ef00f; ?>
<?php unset($__attributesOriginal12fe48fc0aa2632da8ebcb778f3ef00f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12fe48fc0aa2632da8ebcb778f3ef00f)): ?>
<?php $component = $__componentOriginal12fe48fc0aa2632da8ebcb778f3ef00f; ?>
<?php unset($__componentOriginal12fe48fc0aa2632da8ebcb778f3ef00f); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-shop-left bg-white radius-10 mt-3">
            <div class="single-shop-left-title open">
                <h5 class="title"><?php echo e(__('Experience Level')); ?></h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <?php if (isset($component)) { $__componentOriginalb58b98ca8f8917e4010335f53c8e524c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb58b98ca8f8917e4010335f53c8e524c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.experience-level-dropdown','data' => ['class' => 'form-control','name' => 'level','id' => 'level']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.experience-level-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('form-control'),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('level'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('level')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb58b98ca8f8917e4010335f53c8e524c)): ?>
<?php $attributes = $__attributesOriginalb58b98ca8f8917e4010335f53c8e524c; ?>
<?php unset($__attributesOriginalb58b98ca8f8917e4010335f53c8e524c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb58b98ca8f8917e4010335f53c8e524c)): ?>
<?php $component = $__componentOriginalb58b98ca8f8917e4010335f53c8e524c; ?>
<?php unset($__componentOriginalb58b98ca8f8917e4010335f53c8e524c); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-shop-left bg-white radius-10 mt-3">
            <div class="single-shop-left-title open">
                <h5 class="title"><?php echo e(__('Budget')); ?></h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="price-range-input">
                        <div class="price-range-input-flex">
                            <div class="price-range-input-min">
                                <input type="number" placeholder="<?php echo e(__('Min')); ?>" name="min_price" id="min_price">
                            </div>
                            <span class="price-range-separator">-</span>
                            <div class="price-range-input-min">
                                <input type="number" placeholder="<?php echo e(__('Max')); ?>" name="max_price" id="max_price">
                            </div>
                        </div>
                        <div class="price-range-input-btn">
                            <button class="btn-profile btn-outline-1" id="set_price_range"><i class="fas fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-shop-left bg-white radius-10 mt-3">
            <div class="single-shop-left-title open">
                <h5 class="title"><?php echo e(__('Project Lengths')); ?></h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <select class="form-control" name="delivery_day" id="delivery_day">
                            <option value=""><?php echo e(__('Select')); ?></option>
                            <option value="1 Days"> <?php echo e(__('1 days')); ?></option>
                            <option value="2 Days"> <?php echo e(__('2 days')); ?></option>
                            <option value="3 Days"> <?php echo e(__('3 days')); ?></option>
                            <option value="Less than a Week"> <?php echo e(__('Less than a week')); ?></option>
                            <option value="Less than a month"> <?php echo e(__('Less than a month')); ?></option>
                            <option value="Less than 2 month"> <?php echo e(__('Less than 2 month')); ?></option>
                            <option value="Less than 3 month"> <?php echo e(__('Less than 3 month')); ?></option>
                            <option value="More than 3 month"> <?php echo e(__('More than 3 month')); ?></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-shop-left bg-white radius-10 mt-3">
            <div class="single-shop-left-title open">
                <h5 class="title"><?php echo e(__('Choose Rating')); ?></h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <ul class="filter-lists active-list">
                            <li class="list" data-rating="5">
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                            </li>
                            <li class="list" data-rating="4">
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                            </li>
                            <li class="list" data-rating="3">
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                            </li>
                            <li class="list" data-rating="2">
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                            </li>
                            <li class="list" data-rating="1">
                                <a href="javascript:void(0)"> <i class="fas fa-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                                <a href="javascript:void(0)"> <i class="lar la-star"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php /**PATH /Users/mac/Desktop/Laravel/xilancer-v2.9.0/core/resources/views/frontend/pages/projects/sidebar.blade.php ENDPATH**/ ?>