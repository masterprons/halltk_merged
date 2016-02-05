<!doctype html>
<html lang="eng-us">
    <head>
        <title><?php echo $title ?></title>
        <meta name="description" content="<?php echo $description ?>">
        <meta name="keywords" content="<?php echo $keywords ?>">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="10 days">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="language" content="English">
        <meta name="author" content="Pranav Shinde">
        <meta name="copyright" content="Pranav Shinde">
        <meta name="reply-to" content="masterprons@gmail.com">

        <!--|| Style sheet ||-->
        <link href="<?php echo site_url(); ?>assets/master/tpic/css/Cs.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body>
        <?php
        $thumbpath = 'assets/master/tpic/images/cele_saree/';
        $array= [
                '1' => 'cele-saree/Priyamani-hot-sexy-saree-images',
                '2' => 'cele-saree/actress-bhavana-photo-shoot-in-saree',
                '3' => 'cele-saree/Actress-Bhama-New-Photoshoot-Stills-photoshoot',
                '4' => 'cele-saree/Zarine-Khan-latest-Glamorous-Photos-in-Saree',
                '5' => 'cele-saree/Zarine-Khan-latest-Glamorous-Photos-in-red-velvet-saree',
                '6' => 'cele-saree/Shriya-Saran-Hot-backless-Stills-photoshoot',
                '7' => 'cele-saree/Anushka-Shetty-backless-saree-photoshoot',
                '8' => 'cele-saree/Shriya-Saran-Hot-backless-Stills-in-red-ghagara-and-blouse',
                '9' => 'cele-saree/Vidya-Balan-hot-sexy-photoshoot',
                '10' => 'cele-saree/Hot-sexy-Katrina-Kaif-in-pink-saree-and-blouse',
                '11' => 'cele-saree/Anushka-Sharma-in-red-Saree-and-blouse',
                '12' => 'cele-saree/Hot-sexy-Shriya-Saran-in-pink-saree-and-bouse',
                '13' => 'cele-saree/Veena-Malik-hot-sexy-cleavage-in-yellow-blouse-and-saree',
                '14' => 'cele-saree/Vidya-balan-in-pink-saree-and-blouse',
                '15' => 'cele-saree/Priyanka-Kothari-wet-photo-in-white-saree',
                '16' => 'cele-saree/Kajal-Agarwal-backless-saree-photo',
                '17' => 'cele-saree/Anushka-Shetty-in-blue-saree',
                '18' => 'cele-saree/Anushka-Shetty-Saree-Photoshoot',
                '19' => 'cele-saree/Yami-Gautam-in-Orange-saree',
                '20' => 'cele-saree/Anushka-Shetty-in-Indian-Bride-look-photo',
                '21' => 'cele-saree/Madhurima-posing-in-light-pink-saree',
                '22' => 'cele-saree/Kareena-Kapoor-Saree-Images',
                '23' => 'cele-saree/Aishwarya-Rai-as-Indian-Bride',
                '24' => 'cele-saree/Amisha-Patel-in-red-saree',
                '25' => 'cele-saree/Rakul-Prit-Singh-in-red-saree',
                '26' => 'cele-saree/Nayanthara-Saree-Photoshoot',
                '27' => 'cele-saree/Mona-Lisa-in-red-saree',
                '28' => 'cele-saree/Charmy-Kaur-in-red-saree',
                '29' => 'cele-saree/Tamanna-Bhatia-in-saree',
                '30' => 'cele-saree/Tollywood-Actress-Trisha-in-white-saree'
                ];
        ?>
        <div id="wrapper">
            <div id="header">
                <h3><a href="<?php echo site_url();?><?php echo $header_link;?>"><?php echo $site_name;?></a></h3>
            </div>
            <div id="content-panel">
                <div id="pg-head">
                    <h1><?php echo $h1 ?></h1>
                </div>
                <div id="content-image">
                    <a href="<?php echo $imgUrl ?>" target="_blank">
                        <img src="<?php echo $imgUrl ?>"; width="630" class="image" alt="<?php echo $alt ?>" title="<?php echo $h1 ?>">
                    </a>
                </div>
                <div id="tags">
                    <h2><?php echo $tag ?></h2>
                </div>
            </div>

            <div id="right-side-bar">
                <div class="center">
                    <a href="<?php echo site_url(); ?><?php echo $array {1};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>1.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {2};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>2.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {3};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>3.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {4};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>4.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {5};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>5.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {6};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>6.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {7};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>7.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {8};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>8.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {9};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>9.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {10};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>10.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {11};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>11.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {12};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>12.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {13};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>13.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {14};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>14.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {15};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>15.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {16};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>16.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {17};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>17.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {18};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>18.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {19};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>19.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {20};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>20.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {21};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>21.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {22};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>22.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {23};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>23.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {24};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>24.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {25};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>25.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {26};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>26.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {27};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>27.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {28};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>28.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {29};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>29.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                    <a href="<?php echo site_url(); ?><?php echo $array {30};?>">
                        <img src="<?php echo site_url(); ?><?php echo $thumbpath ?>30.jpg" alt="Saree Images" width="75" class="thumb">
                    </a>
                </div>
            </div>
        </div><!-- Wrapper End-->
    </body>
</html>