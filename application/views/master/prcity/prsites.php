<!doctype html>
<html>
    <head>
        <title><?php echo $title ?></title>
        <meta name="description" content="<?php echo $description ?>">
        <meta name="keywords" content="<?php echo $keywords ?>">
        
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="10 days">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!--|| Style sheet ||-->
        <link href="<?php echo site_url(); ?>assets/master/prcity/css/prsites.css" rel="stylesheet" type="text/css" media="all">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jquery || document.write("<script src='<?php echo site_url() ?>assets/common/jquery-1.11.3.js'><\/script>");</script>
        
        <!--|| Java Script ||-->
        <!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <script>
            $(document).ready(function(){
                $('h2').click(function(){
                    var heading1 = 'Visit URL: ' + $(this).html();
                    var urlDetails = '<b>Features: </b>' + $(this).attr('data-urlDetails');
                    $('h1').html(heading1);
                    $('h1 a').attr('target', '_blank');
                    $('.url_intro p').html(urlDetails);
                });
            }); 
        </script>
    </head>

    <body>
        <div id="wrapper">
            <a href="<?php echo site_url()?>prsites"><header><h3>PRSITES</h3></header></a>
            
            <section>
                <div class="url_intro">
                    <h1>URL Name</h1>
                    <p>To watch url and its details click buttons bellow.</p>
                </div>
                <div id="site-embed">
                    <iframe name="url" src="" width="825px" height="750" class="site"></iframe>
                </div>
            </section>

            <div id="indexUrl">
                <h3>SOME Web Designs</h3>
                <p class="text-center-in-gray">Click and have look over Website Design</p>
                <hr>
                    <ul>
                        <li> 
                            <h2 data-urlDetails="Responsive design, Url embedding and Use of Json objects with JQuery"> 
                                <a href="<?php echo site_url()?>prsites" target="url">PRSites</a> 
                            </h2> 
                        </li>
                        <li> 
                            <h2 data-urlDetails="Responsive Design"> 
                                <a href="<?php echo site_url()?>cele-saree" target="url">Cele Saree Images</a> 
                            </h2> 
                        </li>
                        <li> 
                            <h2 data-urlDetails="Highly Responsive Design"> 
                                <a href="<?php echo site_url()?>tpic" target="url">Tpic</a> 
                            </h2> 
                        </li>
                        <li> 
                            <h2 data-urlDetails="Awesome Web Design with responsive navbar, fixed header, footer, right and left aside using Jquery (Incomplete)"> 
                                <a href="<?php echo site_url()?>" target="url">HAllTK</a> 
                            </h2> 
                        </li>
                        <li> 
                            <h2 data-urlDetails="Responsive Web Design with image gallery in less space using jquery and hoverpluse plugin">
                                <a href="<?php echo site_url()?>scary-images" target="url">Scary Images</a> 
                            </h2> 
                        </li>
                        <li> 
                            <h2 data-urlDetails="Responsive Web Design"> 
                                <a href="<?php echo site_url()?>car-wallpapers" target="url">Car Wallpapers</a> 
                            </h2> 
                        </li>
                        <li> 
                            <h2 data-urlDetails="Responsive Web Design"> 
                                <a href="<?php echo site_url()?>bike-wallpapers" target="url">Bike Wallpapers</a> 
                            </h2> 
                        </li>
                        <li> 
                            <h2 data-urlDetails="Responsive Web Design"> 
                                <a href="<?php echo site_url()?>car-girls" target="url">Car Girls</a> 
                            </h2> 
                        </li>
                        <li> 
                            <h2 data-urlDetails="Responsive Web Design"> 
                                <a href="<?php echo site_url()?>bike-babes" target="url">Bike Babes</a> 
                            </h2> 
                        </li>
                        <li> 
                            <h2 data-urlDetails="Responsive Web Design"> 
                                <a href="<?php echo site_url()?>bold-babes" target="url">Bold Babes</a> 
                            </h2> 
                        </li>
                        <li> 
                            <h2 data-urlDetails="Responsive Web design with fixed image background and css opacity property"> 
                                <a href="<?php echo site_url()?>beach-babes1" target="url">Beach Babes</a>
                            </h2> 
                        </li>
                        <li> 
                            <h2 data-urlDetails="Designed in Bootstrap, Image add remove using json object with jquery"> 
                                <a href="<?php echo site_url()?>album-animals" target="url">Album Animals</a> 
                            </h2> 
                        </li>
                        <li> 
                            <h2 data-urlDetails="Simple responsive template"> 
                                <a href="<?php echo site_url()?>template/idealT" target="url">Template IdealT</a> 
                            </h2> 
                        </li>
                        <li>
                            <h2 data-urlDetails="Responsive web design with awesome responsive ad panel"> 
                                <a href="<?php echo site_url()?>template/t9ads" target="url">Template 9Ads</a>
                            </h2> 
                        </li>
                        <li>
                            <h2 data-urlDetails="Simple responsive web design with 3 ads on right hand"> 
                                <a href="<?php echo site_url()?>template/t3ads" target="url">Template 3Ads</a>
                            </h2> 
                        </li>
                        <li>
                            <h2 data-urlDetails="Not completeley responsive"> 
                                <a href="<?php echo site_url()?>poetrypr" target="url">Poetry PR</a>
                            </h2> 
                        </li>
                        <li>
                            <h2 data-urlDetails="Basic Web Design"> 
                                <a href="<?php echo site_url()?>prcity" target="url">PRCITY</a>
                            </h2> 
                        </li>
                        <li>
                            <h2 data-urlDetails=""> 
                                <a href="<?php echo site_url()?>car-wallpapers" target="url">Car Wallpapers</a>
                            </h2> 
                        </li>
                        <li>
                            <h2 data-urlDetails=""> 
                                <a href="<?php echo site_url()?>car-wallpapers" target="url">Car Wallpapers</a>
                            </h2> 
                        </li>
                        <li>
                            <h2 data-urlDetails=""> 
                                <a href="<?php echo site_url()?>car-wallpapers" target="url">Car Wallpapers</a>
                            </h2> 
                        </li>
                    </ul>
            </div>  
            <footer></footer>
        </div>
    </div>
</body>
</html>
