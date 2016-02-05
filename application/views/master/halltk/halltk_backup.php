<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title><?php echo $title; ?></title>
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="10 days">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Pranav Shinde">
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="keywords" content="<?php echo $keywords; ?>">

        <!--|| Style sheet ||-->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/common/css/prostyle.css">
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/<?php echo $master_css; ?>">
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/<?php echo $left_css; ?>">
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/<?php echo $container_css; ?>">
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/<?php echo $right_css; ?>">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jquery || document.write("<script src='<?php echo site_url() ?>assets/common/jquery-1.11.3.js'><\/script>");</script>

        <!--|| J S ||-->
        <script src="<?php echo site_url() ?>assets/common/js/proscript.js"></script>
        <!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body>
        <header class="pad-tb-0px-lr-20px box-shadow-header">
            <div class="logo pad-t-5px">
                <img src="<?php echo site_url(); echo $halltkImg; ?>halltk-logo-new.png" alt="HallTK Logo">
            </div>
            <span class="pad-5 border-default border-radius-5px float-right m-t-10px">
                <i class="fa fa-bars fa-lg"></i>
            </span>
            <nav>
                <ul>
                    <li><a href="<?php echo site_url(); ?>"><h2>Home</h2></a></li>
                    <li><a href=""><h2>Photos</h2></a></li>
                    <li><a href=""><h2>Wallpapers</h2></a></li>
                    <li><a href=""><h2>Galleries</h2></a></li>
                    <li><a href=""><h2>Celebrities</h2></a></li>
                </ul>
            </nav>
        </header>
        <div class="left box-shadow-at-right">
            <div class="left-content">
                <?php $this->load->view($left_content);?>
            </div>
            <div class="left-collapse">
                <div class="left-button">
                    <i class="fa fa-chevron-circle-right"></i>
                </div>
            </div>
        </div>
        
        <div class="container m-t-50px pad-tb-20-lr-30">
            <?php $this->load->view($container_content); ?>
        </div>

        <div class="right box-shadow-at-left">
            <div class="right-collapse">
                <div class="right-button">
                    <i class="fa fa-chevron-circle-right"></i>
                </div>
            </div>
            <div class="right-content">
                <?php $this->load->view($right_content);?>
            </div>
        </div>

        <footer class="box-shadow-footer">
            <div class="footer-collapse">
                <i class="fa fa-chevron-circle-up"></i>
            </div>
            <div class="footer-content">
                <?php $this->load->view($footer_content);?>
            </div>
        </footer>
    </body>
</html>