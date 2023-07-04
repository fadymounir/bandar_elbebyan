<?php

    $jsList = [
        "Admin/assets/js/config.js",
        "Admin/assets/plugins/global/plugins.bundle.js",
        "Admin/assets/plugins/custom/prismjs/prismjs.bundle.js",
        "Admin/assets/js/scripts.bundle.js",
    ];

?>


<?php foreach($jsList as $key=>$item): ?>
    <script src="<?php echo e(url('/')); ?>/<?php echo e($item); ?>"></script>
<?php endforeach; ?>

<?php /**PATH /home/null/Desktop/bandar_elbebyan/resources/views/admin/components/footer/footer_scripts_files.blade.php ENDPATH**/ ?>