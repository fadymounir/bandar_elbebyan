
    <?php echo $__env->make('admin.components.body.body_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <?php echo $__env->make('admin.components.body.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <?php echo $__env->make('admin.components.body.top_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

   <?php echo $__env->yieldContent('content'); ?>

</div>

<?php /**PATH /home/null/Desktop/bandar_elbebyan/resources/views/admin/components/body.blade.php ENDPATH**/ ?>