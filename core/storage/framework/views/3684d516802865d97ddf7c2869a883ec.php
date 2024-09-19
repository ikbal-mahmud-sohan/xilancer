<?php $__env->startSection('site_title',__('Create Project')); ?>
<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc9b7b8cd21a48778d8b7d695ecb54651 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc9b7b8cd21a48778d8b7d695ecb54651 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.summernote.summernote-css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('summernote.summernote-css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc9b7b8cd21a48778d8b7d695ecb54651)): ?>
<?php $attributes = $__attributesOriginalc9b7b8cd21a48778d8b7d695ecb54651; ?>
<?php unset($__attributesOriginalc9b7b8cd21a48778d8b7d695ecb54651); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc9b7b8cd21a48778d8b7d695ecb54651)): ?>
<?php $component = $__componentOriginalc9b7b8cd21a48778d8b7d695ecb54651; ?>
<?php unset($__componentOriginalc9b7b8cd21a48778d8b7d695ecb54651); ?>
<?php endif; ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main>
   <?php if (isset($component)) { $__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb.user-profile-breadcrumb','data' => ['title' => __('Create Project'),'innerTitle' => __('Create Project')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb.user-profile-breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Create Project')),'innerTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Create Project'))]); ?>
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
    <!-- Account Setup area Starts -->
    <div class="account-area section-bg-2 pat-100 pab-100">
        <div class="container">
            <div class="setup-wrapper create-project-wrap">
                <div class="setup-wrapper-flex">
                    <?php echo $__env->make('frontend.user.freelancer.project.create.project-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="create-project-wrapper">
                        <?php if (isset($component)) { $__componentOriginal4bb59b834d778ff0cb72af5a473e2885 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bb59b834d778ff0cb72af5a473e2885 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.validation.error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bb59b834d778ff0cb72af5a473e2885)): ?>
<?php $attributes = $__attributesOriginal4bb59b834d778ff0cb72af5a473e2885; ?>
<?php unset($__attributesOriginal4bb59b834d778ff0cb72af5a473e2885); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bb59b834d778ff0cb72af5a473e2885)): ?>
<?php $component = $__componentOriginal4bb59b834d778ff0cb72af5a473e2885; ?>
<?php unset($__componentOriginal4bb59b834d778ff0cb72af5a473e2885); ?>
<?php endif; ?>
                         <form action="<?php echo e(route('freelancer.project.create')); ?>" id="submit_create_project_form" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                             <input type="hidden" name="basic_title" id="set_basic_title">
                             <input type="hidden" name="standard_title" id="set_standard_title">
                             <input type="hidden" name="premium_title" id="set_premium_title">

                            <?php echo $__env->make('frontend.user.freelancer.project.create.project-introduction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('frontend.user.freelancer.project.create.project-image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('frontend.user.freelancer.project.create.project-package-charge', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('frontend.user.freelancer.project.create.project-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Account Setup area end -->
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
   <?php echo $__env->make('frontend.user.freelancer.project.create.project-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php if (isset($component)) { $__componentOriginal9731ad5c6354aec53812595a64aa497e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9731ad5c6354aec53812595a64aa497e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.summernote.summernote-js-function','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('summernote.summernote-js-function'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9731ad5c6354aec53812595a64aa497e)): ?>
<?php $attributes = $__attributesOriginal9731ad5c6354aec53812595a64aa497e; ?>
<?php unset($__attributesOriginal9731ad5c6354aec53812595a64aa497e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9731ad5c6354aec53812595a64aa497e)): ?>
<?php $component = $__componentOriginal9731ad5c6354aec53812595a64aa497e; ?>
<?php unset($__componentOriginal9731ad5c6354aec53812595a64aa497e); ?>
<?php endif; ?>
   <script>
       initializeSummernote($('.description'), {
           onKeyup: function(e) {
               setTimeout(function(){
                   let description_min_length = 10;
                   let project_description_length = $('#project_description').val().length;

                   if(project_description_length < description_min_length){
                       $('#project_description_char_length_check').html('<p class="text text-danger"><?php echo e(__('Length is short, minimum ')); ?>'+ description_min_length +' <?php echo e(__('required')); ?>.</p>');
                   }else{
                       $('#project_description_char_length_check').html('<p class="text text-success"><?php echo e(__('Length is valid')); ?></p>');
                   }
               },200);
           }
       })
   </script>

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

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/Laravel/xilancer-v2.9.0/core/resources/views/frontend/user/freelancer/project/create/create-project.blade.php ENDPATH**/ ?>