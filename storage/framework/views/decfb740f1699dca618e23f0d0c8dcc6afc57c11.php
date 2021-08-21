<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Contact Page Section Manage')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                <?php echo $__env->make('backend/partials/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-12 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Contact Page Section Manage')); ?></h4>
                        <form action="<?php echo e(route('admin.contact.page.section.manage')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php
                                $section_names = ['contact','map'];
                            ?>
                            <div class="row">
                                <?php $__currentLoopData = $section_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="contact_page_<?php echo e($section_name); ?>_section_status"><strong><?php echo e(__(Str::ucfirst(str_replace('_',' ',$section_name)).' Section Show/Hide')); ?></strong></label>
                                        <label class="switch">
                                            <input type="checkbox" name="contact_page_<?php echo e($section_name); ?>_section_status"  <?php if(!empty(get_static_option('contact_page_'.$section_name.'_section_status'))): ?> checked <?php endif; ?> id="contact_page_<?php echo e($section_name); ?>_section_status">
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <button type="submit" id="update" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        (function($){
        "use strict";
        $(document).ready(function () {
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.btn.update','data' => []]); ?>
<?php $component->withName('btn.update'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        });
        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\cleaning\@core\resources\views/backend/pages/contact-page/section-manage.blade.php ENDPATH**/ ?>