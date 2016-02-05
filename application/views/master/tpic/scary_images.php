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
        <link href="<?php echo site_url(); ?>assets/master/tpic/css/centuryDark.css" rel="stylesheet" type="text/css" media="all">

        <!--|| Java Script ||-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/common/js/jquery.hoverpulse.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function (e) {
                $("#footer-index img").hoverpulse();
            });
        </script>
        <!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <?php
    $imagethumb = "assets/master/tpic/images/scary_images/";

    $URL = [
        '1' => 'scary-images/1',
        '2' => 'scary-images/2',
        '3' => 'scary-images/3',
        '4' => 'scary-images/4',
        '5' => 'scary-images/5',
        '6' => 'scary-images/6',
        '7' => 'scary-images/7',
        '8' => 'scary-images/8',
        '9' => 'scary-images/9',
        '10' => 'scary-images/10',
        '11' => 'scary-images/11',
        '12' => 'scary-images/12',
        '13' => 'scary-images/13',
        '14' => 'scary-images/14',
        '15' => 'scary-images/15',
        '16' => 'scary-images/16',
        '17' => 'scary-images/17',
        '18' => 'scary-images/18',
        '19' => 'scary-images/19',
        '20' => 'scary-images/20',
        '21' => 'scary-images/21',
        '22' => 'scary-images/22',
        '23' => 'scary-images/23',
        '24' => 'scary-images/24',
        '25' => 'scary-images/25',
        '26' => 'scary-images/26',
        '27' => 'scary-images/27',
        '28' => 'scary-images/28',
        '29' => 'scary-images/29',
        '30' => 'scary-images/30',
        '31' => 'scary-images/31',
        '32' => 'scary-images/32',
        '33' => 'scary-images/33',
        '34' => 'scary-images/34',
        '35' => 'scary-images/35',
        '36' => 'scary-images/36',
        '37' => 'scary-images/37',
        '38' => 'scary-images/38',
        '39' => 'scary-images/39',
        '40' => 'scary-images/40',
        '41' => 'scary-images/41',
        '42' => 'scary-images/42',
        '43' => 'scary-images/43',
        '44' => 'scary-images/44',
        '45' => 'scary-images/45',
        '46' => 'scary-images/46',
        '47' => 'scary-images/47',
        '48' => 'scary-images/48',
        '49' => 'scary-images/49',
        '50' => 'scary-images/50',
        '51' => 'scary-images/51',
        '52' => 'scary-images/52',
        '53' => 'scary-images/53',
        '54' => 'scary-images/54',
        '55' => 'scary-images/55',
        '56' => 'scary-images/56',
        '57' => 'scary-images/57',
        '58' => 'scary-images/58',
        '59' => 'scary-images/59',
        '60' => 'scary-images/60',
        '61' => 'scary-images/61',
        '62' => 'scary-images/62',
        '63' => 'scary-images/63',
        '64' => 'scary-images/64',
        '65' => 'scary-images/65',
        '66' => 'scary-images/66',
        '67' => 'scary-images/67',
        '68' => 'scary-images/68',
        '69' => 'scary-images/69',
        '70' => 'scary-images/70',
        '71' => 'scary-images/71',
        '72' => 'scary-images/72',
        '73' => 'scary-images/73',
        '74' => 'scary-images/74',
        '75' => 'scary-images/75',
        '76' => 'scary-images/76',
        '77' => 'scary-images/77',
        '78' => 'scary-images/78',
        '79' => 'scary-images/79',
        '80' => 'scary-images/80',
        '81' => 'scary-images/81',
        '82' => 'scary-images/82',
        '83' => 'scary-images/83',
        '84' => 'scary-images/84',
        '85' => 'scary-images/85',
        '86' => 'scary-images/86',
        '87' => 'scary-images/87',
        '88' => 'scary-images/88',
        '89' => 'scary-images/89',
        '90' => 'scary-images/90',
        '91' => 'scary-images/91',
        '92' => 'scary-images/92',
        '93' => 'scary-images/93',
        '94' => 'scary-images/94',
        '95' => 'scary-images/95',
        '96' => 'scary-images/96',
        '97' => 'scary-images/97',
        '98' => 'scary-images/98',
        '99' => 'scary-images/99',
        '100' => 'scary-images/100'
    ];
    ?>

    <body>
        <div class="gradient1" id="wrapper">
            <div id="header">Scary Images
                <!--<a href="<?php echo site_url();?>scary_images">
                    <img src="<?php echo base_url(); ?>assets/projects/scary_images/images/scary-wallpaper-header.jpg" alt="Scary Wallpaper Header" width="1280" height="150" class="header-img">
                </a>-->
            </div>

            <div id="container">
                <div id="heading">
                    <h1><?php echo $h1;?></h1>
                </div>
                <div class="banner-ad">
                    <div class="center-block">
                        <div class="adbox-728x90">
                            <p>Advertise Here</p>
                        </div>
                    </div>
                </div>
                <div id="content">
                    <a href="<?php echo $imageUrl; ?>" target="_blank">
                        <img src="<?php echo $imageUrl; ?>" alt="Scary Images" width="768" class="content-img">
                    </a>
                </div>
                <div class="adspace-right">
                    <div class="ads-holder">
                        <div class="adblock">
                            <div class="ad-box"><p>Advertisement</p></div>
                        </div>
                        <div class="adblock" id="ad2">
                            <div class="ad-box"><p>Advertisement</p></div>
                        </div>

                    </div>
                </div>
                <div id="tags">
                    <h2><?php echo $keywords; ?></h2>
                </div>
                <div class="picpr">
                <div id="footer-index">
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/1"><img src="<?php echo site_url(); echo $imagethumb; ?>1.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/2"><img src="<?php echo site_url(); echo $imagethumb; ?>2.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/3"><img src="<?php echo site_url(); echo $imagethumb; ?>3.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/4"><img src="<?php echo site_url(); echo $imagethumb; ?>4.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/5"><img src="<?php echo site_url(); echo $imagethumb; ?>5.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/6"><img src="<?php echo site_url(); echo $imagethumb; ?>6.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/7"><img src="<?php echo site_url(); echo $imagethumb; ?>7.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/8"><img src="<?php echo site_url(); echo $imagethumb; ?>8.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/9"><img src="<?php echo site_url(); echo $imagethumb; ?>9.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/10"><img src="<?php echo site_url(); echo $imagethumb; ?>10.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/11"><img src="<?php echo site_url(); echo $imagethumb; ?>11.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/12"><img src="<?php echo site_url(); echo $imagethumb; ?>12.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/13"><img src="<?php echo site_url(); echo $imagethumb; ?>13.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/14"><img src="<?php echo site_url(); echo $imagethumb; ?>14.JPG" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/15"><img src="<?php echo site_url(); echo $imagethumb; ?>15.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/16"><img src="<?php echo site_url(); echo $imagethumb; ?>16.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/17"><img src="<?php echo site_url(); echo $imagethumb; ?>17.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/18"><img src="<?php echo site_url(); echo $imagethumb; ?>18.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/19"><img src="<?php echo site_url(); echo $imagethumb; ?>19.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/20"><img src="<?php echo site_url(); echo $imagethumb; ?>20.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/21"><img src="<?php echo site_url(); echo $imagethumb; ?>21.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/22"><img src="<?php echo site_url(); echo $imagethumb; ?>22.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/23"><img src="<?php echo site_url(); echo $imagethumb; ?>23.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/24"><img src="<?php echo site_url(); echo $imagethumb; ?>24.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/25"><img src="<?php echo site_url(); echo $imagethumb; ?>25.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/26"><img src="<?php echo site_url(); echo $imagethumb; ?>26.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/27"><img src="<?php echo site_url(); echo $imagethumb; ?>27.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/28"><img src="<?php echo site_url(); echo $imagethumb; ?>28.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/29"><img src="<?php echo site_url(); echo $imagethumb; ?>29.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/30"><img src="<?php echo site_url(); echo $imagethumb; ?>30.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/31"><img src="<?php echo site_url(); echo $imagethumb; ?>31.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/32"><img src="<?php echo site_url(); echo $imagethumb; ?>32.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/33"><img src="<?php echo site_url(); echo $imagethumb; ?>33.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/34"><img src="<?php echo site_url(); echo $imagethumb; ?>34.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/35"><img src="<?php echo site_url(); echo $imagethumb; ?>35.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/36"><img src="<?php echo site_url(); echo $imagethumb; ?>36.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/37"><img src="<?php echo site_url(); echo $imagethumb; ?>37.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/38"><img src="<?php echo site_url(); echo $imagethumb; ?>38.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/39"><img src="<?php echo site_url(); echo $imagethumb; ?>39.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/40"><img src="<?php echo site_url(); echo $imagethumb; ?>40.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/41"><img src="<?php echo site_url(); echo $imagethumb; ?>41.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/42"><img src="<?php echo site_url(); echo $imagethumb; ?>42.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/43"><img src="<?php echo site_url(); echo $imagethumb; ?>43.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/44"><img src="<?php echo site_url(); echo $imagethumb; ?>44.jpeg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/45"><img src="<?php echo site_url(); echo $imagethumb; ?>45.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/46"><img src="<?php echo site_url(); echo $imagethumb; ?>46.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/47"><img src="<?php echo site_url(); echo $imagethumb; ?>47.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/48"><img src="<?php echo site_url(); echo $imagethumb; ?>48.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/49"><img src="<?php echo site_url(); echo $imagethumb; ?>49.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/50"><img src="<?php echo site_url(); echo $imagethumb; ?>50.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/51"><img src="<?php echo site_url(); echo $imagethumb; ?>51.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/52"><img src="<?php echo site_url(); echo $imagethumb; ?>52.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/53"><img src="<?php echo site_url(); echo $imagethumb; ?>53.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/54"><img src="<?php echo site_url(); echo $imagethumb; ?>54.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/55"><img src="<?php echo site_url(); echo $imagethumb; ?>55.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/56"><img src="<?php echo site_url(); echo $imagethumb; ?>56.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/57"><img src="<?php echo site_url(); echo $imagethumb; ?>57.jpeg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/58"><img src="<?php echo site_url(); echo $imagethumb; ?>58.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/59"><img src="<?php echo site_url(); echo $imagethumb; ?>59.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/60"><img src="<?php echo site_url(); echo $imagethumb; ?>60.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/61"><img src="<?php echo site_url(); echo $imagethumb; ?>61.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/62"><img src="<?php echo site_url(); echo $imagethumb; ?>62.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/63"><img src="<?php echo site_url(); echo $imagethumb; ?>63.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/64"><img src="<?php echo site_url(); echo $imagethumb; ?>64.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/65"><img src="<?php echo site_url(); echo $imagethumb; ?>65.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/66"><img src="<?php echo site_url(); echo $imagethumb; ?>66.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/67"><img src="<?php echo site_url(); echo $imagethumb; ?>67.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/68"><img src="<?php echo site_url(); echo $imagethumb; ?>68.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/69"><img src="<?php echo site_url(); echo $imagethumb; ?>69.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/70"><img src="<?php echo site_url(); echo $imagethumb; ?>70.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/71"><img src="<?php echo site_url(); echo $imagethumb; ?>71.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/72"><img src="<?php echo site_url(); echo $imagethumb; ?>72.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/73"><img src="<?php echo site_url(); echo $imagethumb; ?>73.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/74"><img src="<?php echo site_url(); echo $imagethumb; ?>74.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/75"><img src="<?php echo site_url(); echo $imagethumb; ?>75.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/76"><img src="<?php echo site_url(); echo $imagethumb; ?>76.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/77"><img src="<?php echo site_url(); echo $imagethumb; ?>77.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/78"><img src="<?php echo site_url(); echo $imagethumb; ?>78.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/79"><img src="<?php echo site_url(); echo $imagethumb; ?>79.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/80"><img src="<?php echo site_url(); echo $imagethumb; ?>80.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/81"><img src="<?php echo site_url(); echo $imagethumb; ?>81.gif" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/82"><img src="<?php echo site_url(); echo $imagethumb; ?>82.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/83"><img src="<?php echo site_url(); echo $imagethumb; ?>83.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/84"><img src="<?php echo site_url(); echo $imagethumb; ?>84.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/85"><img src="<?php echo site_url(); echo $imagethumb; ?>85.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/86"><img src="<?php echo site_url(); echo $imagethumb; ?>86.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/87"><img src="<?php echo site_url(); echo $imagethumb; ?>87.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/88"><img src="<?php echo site_url(); echo $imagethumb; ?>88.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/89"><img src="<?php echo site_url(); echo $imagethumb; ?>89.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/90"><img src="<?php echo site_url(); echo $imagethumb; ?>90.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/91"><img src="<?php echo site_url(); echo $imagethumb; ?>91.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/92"><img src="<?php echo site_url(); echo $imagethumb; ?>92.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/93"><img src="<?php echo site_url(); echo $imagethumb; ?>93.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/94"><img src="<?php echo site_url(); echo $imagethumb; ?>94.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/95"><img src="<?php echo site_url(); echo $imagethumb; ?>95.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/96"><img src="<?php echo site_url(); echo $imagethumb; ?>96.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/97"><img src="<?php echo site_url(); echo $imagethumb; ?>97.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/98"><img src="<?php echo site_url(); echo $imagethumb; ?>98.JPG" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/99"><img src="<?php echo site_url(); echo $imagethumb; ?>99.jpg" alt="Scary Images"></a></div>
                    <div class="thumbs"><a href="<?php echo site_url(); ?>scary-images/100"><img src="<?php echo site_url(); echo $imagethumb; ?>100.jpg" alt="Scary Images"></a></div>
                </div>
                </div>
                
                <div class="adspace-right" id="adspace-right2">
                    <div class="ads-holder" id="ads-holder2">
                        <div class="adblock" id="ad3">
                            <div class="ad-box"><p>Advertisement</p></div>
                        </div>
                        <div class="adblock" id="ad4">
                            <div class="ad-box"><p>Advertisement</p></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>