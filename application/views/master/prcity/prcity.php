<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="keywords" content="<?php echo $keywords; ?>">
        
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="10 days">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Pranav Shinde">

        <!--|| Style sheet ||-->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/common/css/prostyle.css">
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/<?php echo $master_css; ?>">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jquery || document.write("<script src='<?php echo site_url() ?>assets/common/jquery-1.11.3.js'><\/script>");</script>

        <!--|| J S ||-->
        <script src="<?php echo site_url() ?>assets/common/js/proscript.js"></script>
        <!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>   
    <body>
        <header>
            <div class="logo">
                PRSITY
            </div>
            <nav>
                
            </nav>
        </header>
        <div class="container">
            <?php $this->load->view($container);?>
        </div>
        <footer>
            <p>&copy; prcity.in 2015-2016</p>
        </footer>
    </body>
</html>