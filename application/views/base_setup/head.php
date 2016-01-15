<html>    
    <head>
        <title><?php echo $title ?></title>
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="10 days">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="language" content="English">
        <meta name="author" content="Pranav Shinde">
        <meta name="copyright" content="name of owner">
        <meta name="reply-to" content="email address">
        <meta name="description" content="<?php echo $description ?>">
        <meta name="keywords" content="<?php echo $keywords ?>">

        <!--|| Style sheet ||-->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/site_base/css/halltk.css">

        <!--|| J S ||-->
        <!-- jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <!-- Slidebars -->
        <script src="<?php echo site_url(); ?>assets/base_assets/slidebars/slidebars.js"></script>
        <script>
            (function ($) {
                $(document).ready(function () {
                    $.slidebars({
                        scrollLock: true
                    });
                });
            })(jQuery);
        </script>

    </head>
    <body>
