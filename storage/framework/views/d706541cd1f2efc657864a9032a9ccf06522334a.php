

<link rel="canonical" href="https://keenthemes.com/metronic"/>

<!--begin::Fonts-->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>

<!--end::Fonts-->

<!--begin::Global Theme Styles(used by all pages)-->

<?php if($Is_Rtl): ?>

    <?php echo $__env->make('admin.components.header.load_combine_css_ar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php else: ?>

    <?php echo $__env->make('admin.components.header.load_combine_css_en', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>
<!--end::Layout Themes-->
<?php /**PATH /home/null/Desktop/bandar_elbebyan/resources/views/admin/components/header/header_components.blade.php ENDPATH**/ ?>