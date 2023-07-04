<!DOCTYPE html>
<html lang="en"
      <?php $Is_Rtl=env('admin_is_rtl',true);?>
      <?php if($Is_Rtl): ?> direction="rtl" style="direction: rtl;"   <?php endif; ?>>
<!--begin::Head-->
	<head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="<?php echo e(url('/')); ?>/Admin/assets/media/logos/favicon.ico"/>

        <title><?php echo e($meta_title ?? ''); ?></title>

        <?php echo $__env->make('admin.components.header.header_components', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	</head>

<!--end::Head-->
<?php /**PATH /home/null/Desktop/bandar_elbebyan/resources/views/admin/components/header.blade.php ENDPATH**/ ?>