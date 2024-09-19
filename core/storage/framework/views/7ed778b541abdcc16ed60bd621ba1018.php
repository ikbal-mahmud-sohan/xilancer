<?php $__env->startSection('site_title',__('Projects')); ?>
<?php $__env->startSection('meta_title'); ?><?php echo e(__('Projects')); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginal7a9f1fc0e33dbb5b6865e47c39fccade = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a9f1fc0e33dbb5b6865e47c39fccade = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select2.select2-css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select2.select2-css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a9f1fc0e33dbb5b6865e47c39fccade)): ?>
<?php $attributes = $__attributesOriginal7a9f1fc0e33dbb5b6865e47c39fccade; ?>
<?php unset($__attributesOriginal7a9f1fc0e33dbb5b6865e47c39fccade); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a9f1fc0e33dbb5b6865e47c39fccade)): ?>
<?php $component = $__componentOriginal7a9f1fc0e33dbb5b6865e47c39fccade; ?>
<?php unset($__componentOriginal7a9f1fc0e33dbb5b6865e47c39fccade); ?>
<?php endif; ?>
    <style>
        .pro-profile-badge {
            position: absolute;
            right: -10px;
            top: -10px;
            border-radius:20px;
            background: #FAF5FF;
            color: #9e4cf4;
            font-weight: 600;
        }
        .pro-icon-background {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #9e4cf4;
            padding: 3px;
            border-radius: 50%;
            color: #fff;
            font-size: 12px;
        }
        .project-category-item .single-project {
            position: relative;
        }
        .disabled-link {
            background-color: #ccc !important;
            pointer-events: none;
            cursor: default;
            border:none;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>

        <?php if(moduleExists('CoinPaymentGateway')): ?><?php else: ?><?php if (isset($component)) { $__componentOriginal7ecac999957263c09523da7583aa96ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7ecac999957263c09523da7583aa96ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.category.category','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.category.category'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7ecac999957263c09523da7583aa96ad)): ?>
<?php $attributes = $__attributesOriginal7ecac999957263c09523da7583aa96ad; ?>
<?php unset($__attributesOriginal7ecac999957263c09523da7583aa96ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7ecac999957263c09523da7583aa96ad)): ?>
<?php $component = $__componentOriginal7ecac999957263c09523da7583aa96ad; ?>
<?php unset($__componentOriginal7ecac999957263c09523da7583aa96ad); ?>
<?php endif; ?><?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb.user-profile-breadcrumb','data' => ['title' =>  __('All Projects'),'innerTitle' =>  __('All Projects') ?? '' ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb.user-profile-breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute( __('All Projects')),'innerTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute( __('All Projects') ?? '' )]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4)): ?>
<?php $attributes = $__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4; ?>
<?php unset($__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4)): ?>
<?php $component = $__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4; ?>
<?php unset($__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4); ?>
<?php endif; ?>
        <!-- Project preview area Starts -->
        <div class="preview-area section-bg-2 pat-100 pab-100">
            <div class="container">
                <div class="row g-4">

                    <?php if(moduleExists('PromoteFreelancer')): ?>
                        <div class="profile-wrapper-right-flex flex-btn text-right">
                            <span class="profile-wrapper-switch-title"><?php echo e(__('Pro Projects')); ?></span>
                            <div class="profile-wrapper-switch-custom display_work_availability">
                                <label class="custom_switch">
                                    <input type="checkbox" id="get_pro_projects" value="0">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="col-lg-12">
                        <div class="categoryWrap-wrapper">
                            <div class="shop-contents-wrapper responsive-lg">
                                <div class="shop-icon">
                                    <div class="shop-icon-sidebar">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </div>

                                <?php echo $__env->make('frontend.pages.projects.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <div class="shop-contents-wrapper-right search_result">
                                    <?php echo $__env->make('frontend.pages.projects.search-result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project preview area end -->
    </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('frontend.pages.projects.project-filter-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if (isset($component)) { $__componentOriginala34b824a201f14e7e09beb6785e605e8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala34b824a201f14e7e09beb6785e605e8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select2.select2-js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select2.select2-js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala34b824a201f14e7e09beb6785e605e8)): ?>
<?php $attributes = $__attributesOriginala34b824a201f14e7e09beb6785e605e8; ?>
<?php unset($__attributesOriginala34b824a201f14e7e09beb6785e605e8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala34b824a201f14e7e09beb6785e605e8)): ?>
<?php $component = $__componentOriginala34b824a201f14e7e09beb6785e605e8; ?>
<?php unset($__componentOriginala34b824a201f14e7e09beb6785e605e8); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/Laravel/xilancer-v2.9.0/core/resources/views/frontend/pages/projects/projects.blade.php ENDPATH**/ ?>