<!DOCTYPE HTML>
<html lang="eng-us">
    <head>
        <title><?php echo $title ?></title>
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="10 days">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="language" content="English">
        <meta name="author" content="Pranav Shinde">
        <meta name="copyright" content="Pranav Shinde">
        <meta name="reply-to" content="masterprons@gmail.com">
        <meta name="description" content="<?php echo $description ?>">
        <meta name="keywords" content="<?php echo $keywords ?>">

        <!--|| Style sheet ||-->
        <link href="<?php echo site_url(); ?>assets/templates/tempBB100/css/tempBB100.css" rel="stylesheet" type="text/css" media="all">

        <!--|| Java Script ||-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
        <script src="<?php base_url(); ?>assets/base_assets/slidebars/slidebars.js" type="text/javascript"></script>

        <!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <?php
        $thumbpath = "assets/projects/beach_babes1/images/";
        
        $URL= [
                '1' => 'beach-babes1/1',
                '2' => 'beach-babes1/2',
                '3' => 'beach-babes1/3',
                '4' => 'beach-babes1/4',
                '5' => 'beach-babes1/5',
                '6' => 'beach-babes1/6',
                '7' => 'beach-babes1/7',
                '8' => 'beach-babes1/8',
                '9' => 'beach-babes1/9',
                '10' => 'beach-babes1/10',
                '11' => 'beach-babes1/11',
                '12' => 'beach-babes1/12',
                '13' => 'beach-babes1/13',
                '14' => 'beach-babes1/14',
                '15' => 'beach-babes1/15',
                '16' => 'beach-babes1/16',
                '17' => 'beach-babes1/17',
                '18' => 'beach-babes1/18',
                '19' => 'beach-babes1/19',
                '20' => 'beach-babes1/20',
                '21' => 'beach-babes1/21',
                '22' => 'beach-babes1/22',
                '23' => 'beach-babes1/23',
                '24' => 'beach-babes1/24',
                '25' => 'beach-babes1/25',
                '26' => 'beach-babes1/26',
                '27' => 'beach-babes1/27',
                '28' => 'beach-babes1/28',
                '29' => 'beach-babes1/29',
                '30' => 'beach-babes1/30',
                '31' => 'beach-babes1/31',
                '32' => 'beach-babes1/32',
                '33' => 'beach-babes1/33',
                '34' => 'beach-babes1/34',
                '35' => 'beach-babes1/35',
                '36' => 'beach-babes1/36',
                '37' => 'beach-babes1/37',
                '38' => 'beach-babes1/38',
                '39' => 'beach-babes1/39',
                '40' => 'beach-babes1/40',
                '41' => 'beach-babes1/41',
                '42' => 'beach-babes1/42',
                '43' => 'beach-babes1/43',
                '44' => 'beach-babes1/44',
                '45' => 'beach-babes1/45',
                '46' => 'beach-babes1/46',
                '47' => 'beach-babes1/47',
                '48' => 'beach-babes1/48',
                '49' => 'beach-babes1/49',
                '50' => 'beach-babes1/50',
                '51' => 'beach-babes1/51',
                '52' => 'beach-babes1/52',
                '53' => 'beach-babes1/53',
                '54' => 'beach-babes1/54',
                '55' => 'beach-babes1/55',
                '56' => 'beach-babes1/56',
                '57' => 'beach-babes1/57',
                '58' => 'beach-babes1/58',
                '59' => 'beach-babes1/59',
                '60' => 'beach-babes1/60',
                '61' => 'beach-babes1/61',
                '62' => 'beach-babes1/62',
                '63' => 'beach-babes1/63',
                '64' => 'beach-babes1/64',
                '65' => 'beach-babes1/65',
                '66' => 'beach-babes1/66',
                '67' => 'beach-babes1/67',
                '68' => 'beach-babes1/68',
                '69' => 'beach-babes1/69',
                '70' => 'beach-babes1/70',
                '71' => 'beach-babes1/71',
                '72' => 'beach-babes1/72',
                '73' => 'beach-babes1/73',
                '74' => 'beach-babes1/74',
                '75' => 'beach-babes1/75',
                '76' => 'beach-babes1/76',
                '77' => 'beach-babes1/77',
                '78' => 'beach-babes1/78',
                '79' => 'beach-babes1/79',
                '80' => 'beach-babes1/80',
                '81' => 'beach-babes1/81',
                '82' => 'beach-babes1/82',
                '83' => 'beach-babes1/83',
                '84' => 'beach-babes1/84',
                '85' => 'beach-babes1/85',
                '86' => 'beach-babes1/86',
                '87' => 'beach-babes1/87',
                '88' => 'beach-babes1/88',
                '89' => 'beach-babes1/89',
                '90' => 'beach-babes1/90',
                '91' => 'beach-babes1/91',
                '92' => 'beach-babes1/92',
                '93' => 'beach-babes1/93',
                '94' => 'beach-babes1/94',
                '95' => 'beach-babes1/95',
                '96' => 'beach-babes1/96',
                '97' => 'beach-babes1/97',
                '98' => 'beach-babes1/98',
                '99' => 'beach-babes1/99',
                '100' => 'beach-babes1/100'
            
                ];
    ?>

    <body>
        <header> <a href="<?php echo site_url();?>beach-babes1"><?php echo $project_name; ?></a> </header>
        <div class="container">

            <section>

                <div class="ad-space"> <div class="adbox-728x90"><p>Advertise Here</p></div> </div>

                <div  class="content">
                    <div class="pg_heading"><h1><?php echo $h1; ?></h1></div>

                    <a href="<?php echo $imgUrl;?>" target="_blank">
                        <img src="<?php echo $imgUrl;?>" class="image-content"/>
                    </a>
                    <div class="keywords"><strong>Keywords:</strong> <?php echo $keywords;?></div>
                </div>

                <div class="ad-space"> <div class="adbox-728x90"><p>Advertise Here</p></div> </div>

            </section>

            <div class="ad-space-right">
                <div class="ad-space-manager">
                    <div class="adbox-300x250">
                        <p>Advertise Here</p>
                    </div>
                </div>
                <div class="ad-space-manager">
                    <div class="adbox-300x250">
                        <p>Advertise Here</p>
                    </div>
                </div>
                <div class="ad-space-manager" id="ad3">
                    <div class="adbox-300x250">
                        <p>Advertise Here</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="image-collection">
            <div class="image-set">
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(1, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>1.jpg"/> </a> </div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(2, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>2.jpg"/> </a> </div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(3, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>3.jpg"/> </a> </div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(4, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>4.jpg"/> </a> </div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(5, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>5.jpg"/> </a> </div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(6, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>6.jpg"/> </a> </div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(7, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>7.jpg"/> </a> </div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(8, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>8.jpg"/> </a> </div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(9, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>9.jpg"/> </a> </div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(10, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>10.jpg"/> </a></div>
            </div>
            <div class="image-set">
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(11, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>11.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(12, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>12.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(13, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>13.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(14, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>14.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(15, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>15.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(16, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>16.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(17, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>17.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(18, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>18.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(19, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>19.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(20, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>20.jpg"/> </a></div>
            </div>

            <div class="ad-space"> <div class="adbox-728x90"><p>Advertise Here</p></div> </div>

            <div class="image-set">
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(21, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>21.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(22, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>22.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(23, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>23.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(24, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>24.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(25, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>25.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(26, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>26.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(27, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>27.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(28, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>28.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(29, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>29.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(30, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>30.jpg"/> </a></div>
            </div>
            <div class="image-set">
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(31, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>31.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(32, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>32.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(33, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>33.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(34, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>34.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(35, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>35.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(36, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>36.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(37, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>37.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(38, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>38.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(39, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>39.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(40, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>40.jpg"/> </a></div>
            </div>

            <div class="ad-space"> <div class="adbox-728x90"><p>Advertise Here</p></div> </div>

            <div class="image-set">
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(41, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>41.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(42, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>42.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(43, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>43.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(44, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>44.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(45, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>45.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(46, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>46.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(47, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>47.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(48, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>48.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(49, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>49.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(50, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>50.jpg"/> </a></div>
            </div>
            <div class="image-set">
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(51, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>51.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(52, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>52.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(53, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>53.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(54, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>54.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(55, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>55.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(56, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>56.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(57, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>57.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(58, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>58.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(59, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>59.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(60, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>60.jpg"/> </a></div>
            </div>

            <div class="ad-space"> <div class="adbox-728x90"><p>Advertise Here</p></div> </div>

            <div class="image-set">
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(61, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>61.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(62, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>62.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(63, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>63.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(64, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>64.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(65, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>65.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(66, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>66.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(67, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>67.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(68, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>68.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(69, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>69.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(70, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>70.jpg"/> </a></div>
            </div>
            <div class="image-set">
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(71, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>71.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(72, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>72.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(73, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>73.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(74, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>74.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(75, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>75.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(76, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>76.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(77, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>77.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(78, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>78.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(79, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>79.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(80, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>80.jpg"/> </a></div>
            </div>

            <div class="ad-space"> <div class="adbox-728x90"><p>Advertise Here</p></div> </div>

            <div class="image-set">
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(81, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>81.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(82, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>82.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(83, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>83.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(84, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>84.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(85, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>85.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(86, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>86.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(87, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>87.jpeg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(88, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>88.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(89, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>89.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(90, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>90.jpg"/> </a></div>
            </div>
            <div class="image-set">
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(91, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>91.jpeg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(92, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>92.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(93, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>93.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(94, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>94.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(95, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>95.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(96, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>96.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(97, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>97.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(98, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>98.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(99, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>99.jpg"/> </a></div>
                <div class="thumb"> <a href="<?php echo site_url();?><?php echo element(100, $URL)?>"> <img src="<?php echo site_url(); echo $thumbpath; ?>100.jpg"/> </a></div>
            </div>

            <div class="ad-space"> <div class="adbox-728x90"><p>Advertise Here</p></div> </div>
        </div>
        <footer>
            This is footer
        </footer>
    </body>
</html>