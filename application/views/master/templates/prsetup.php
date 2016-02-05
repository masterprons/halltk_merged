<!doctype html>
<html lang="eng-us">
    <head>
        <title></title>
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="10 days">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="language" content="English">
        <meta name="author" content="Pranav Shinde">
        <meta name="copyright" content="Pranav Shinde">
        <meta name="reply-to" content="masterprons@gmail.com">
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!--|| Style sheet ||-->
        <link href="<?php echo site_url(); ?>assets/site_base/css/prsetup.css" rel="stylesheet" type="text/css" media="all">

        <!--|| Java Script ||-->
        <script src="<?php echo base_url(); ?>assets/base_assets/navbar_collapsable/navmenu.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
        
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <header>
            <?php $this->load->view('components/navbar_collapsable'); ?>
        </header>



        <aside class="left_aside">
            <p>This is Left Aside</p>
        </aside>
        <div class="container">
            <section>
                <p>This is Section</p>
            </section>

            <section>
                <p>This is Section</p>
            </section>
        </div>

        <aside class="right_aside">
            <p>This is Right Aside</p>
        </aside>

        <footer>
            <section>
                <p>This is Footer Section</p>
            </section>

            <section>
                <p>This is Footer Section</p>
            </section>
        </footer>
    </body>
</html>