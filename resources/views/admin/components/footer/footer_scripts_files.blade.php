<?php

    $jsList = [
        "Admin/assets/js/config.js",
        "Admin/assets/plugins/global/plugins.bundle.js",
        "Admin/assets/plugins/custom/prismjs/prismjs.bundle.js",
        "Admin/assets/js/scripts.bundle.js",
    ];

?>


<?php foreach($jsList as $key=>$item): ?>
    <script src="{{url('/')}}/{{$item}}"></script>
<?php endforeach; ?>

