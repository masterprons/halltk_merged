<!DOCTYPE HTML>
<html lang="eng-us">
    <head>
        <title><?php echo $title ?></title>
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="10 days">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Pranav Shinde">
        <meta name="description" content="<?php echo $description ?>">
        <meta name="keywords" content="<?php echo $keywords ?>">

        <!--|| Style sheet ||-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jquery || document.write("<script src='<?php echo site_url() ?>assets/common/jquery-1.11.3.js'><\/script>");</script>

        <!--|| Java Script ||-->
        <!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <script>
            $(document).ready(function () {
                $('.animals-thumbs li').click(function () {
                    var dataUrl = $(this).children('img').attr('data-animal-url');
                    $('.display img').attr('src', dataUrl);
                });
            });
        </script>
        <style>
            body {background-color: lightgray}
            .display img{width: 100%; height: auto; padding:15px 5px;}
            .animals-thumbs ul {height: 520px; overflow: auto;}
            .animals-thumbs ul li {list-style-type: none; margin: 5px 1px 2px; background-color: #000; color: chartreuse; height: auto; 
                                   width: 135px; padding: 10px; display: inline-block; cursor: pointer; float: left; text-align: center;
                                   border-radius: 7px; -webkit-border-radius: 7px; -moz-border-radius: 7px;}
            .animals-thumbs ul li:hover {background-color: green; color: #fff; text-decoration: none;}
            .animals-thumbs ul li img {width: 100%; height: auto;}
            p {padding: 5px 0px 0px; margin: 0px;}
        </style>
    </head>
    <?php
    $Animals = array
        (
        array('1', 'Snake', 'http://1.bp.blogspot.com/-LmuLH6bYWZw/TsfXkJ2D7II/AAAAAAAADFw/kRQ6cq6AlSE/s1600/Venomous_Indian_Cobra_photos%2B%25281%2529.jpg'),
        array('2', 'Tiger', 'http://1.bp.blogspot.com/-aCSyb9mn1N0/UEu1QTjd0BI/AAAAAAAAAtg/d_jGvfX1YmA/s1600/3d-widescreen-wallpaper+%288%29.jpg'),
        array('3', 'Elephant', 'https://upload.wikimedia.org/wikipedia/commons/a/ac/IndianElephant.jpg'),
        array('4', 'Lion', 'http://upload.wikimedia.org/wikipedia/commons/a/ae/African_Lion_Panthera_leo_Male_Pittsburgh_2800px.jpg'),
        array('5', 'Zebra', 'http://1.bp.blogspot.com/-AaDylY0r_BI/TorSON90NRI/AAAAAAAAAsA/fTLTmogxGys/s1600/Grevy%2527s_Zebra_1.jpg'),
        array('6', 'Horse', 'http://1.bp.blogspot.com/-pep_Kjb5J9Y/Te4-nfdpEiI/AAAAAAAAAiE/RQBM27HgSYk/s1600/black-horse-black_horse.jpg'),
        array('7', 'Kangaroo', 'http://1.bp.blogspot.com/-Qx-LNzgI8M0/T-mjFZdWOmI/AAAAAAAADDI/GFfLsW3ZbXs/s1600/Kangaroo+images.jpg'),
        array('8', 'Rhyno', 'http://3.bp.blogspot.com/-hBFg707bwiI/TvT1mW2siBI/AAAAAAAACgk/JBcM1bCN4KU/s1600/Indian_Rhino_%2528Rhinoceros_unicornis%2529+beautiful+endagered+dangerous+animals+of+india+china+thailand+maymar++java+cambodia+animal+attacks+news.jpg'),
        array('9', 'Deer', 'http://3.bp.blogspot.com/-avMqUIi9mrs/Tp5pelLhSlI/AAAAAAAAQDI/c7i4GH9TQfk/s1600/deer-800.jpg'),
        array('10', 'Bear', 'http://upload.wikimedia.org/wikipedia/commons/6/6e/Canadian_Rockies_-_the_bear_at_Lake_Louise.jpg'),
        array('11', 'Camel', 'http://1.bp.blogspot.com/-ScA7dNq7xuY/TqefXm4xEiI/AAAAAAAADrA/RNY6mdOzSHM/s1600/Camel%2B%25281%2529.jpg'),
        array('12', 'Porcupine', 'http://3.bp.blogspot.com/-7cmD8XTp4qk/USLU1FQM27I/AAAAAAAAAGY/zmnmm6Tk9KY/s1600/Porcupine4.jpg'),
        array('13', 'Dolphin', 'http://2.bp.blogspot.com/-lOFv7cqejx8/UL1hIGWUMZI/AAAAAAAACW8/jOS4FF6pRd0/s1600/dolphin-wallpaper-3.jpg'),
        array('14', 'Giraffe', 'http://3.bp.blogspot.com/-C1EVDbYnfLU/Uc6e6pFTw2I/AAAAAAAAAa8/ruPo0oDsnEw/s1400/giraffe_tgr-ns016bb.jpg'),
        array('15', 'Black Panther', 'http://4.bp.blogspot.com/-Yp2DQIWPE5o/UGAbI0luOMI/AAAAAAAABAY/CrboTqBAcDE/s1600/Black-Panthers-black-panthers-31170192-1280-800.jpg'),
        array('16', 'Crocodile', 'http://upload.wikimedia.org/wikipedia/commons/c/cd/Two_american_alligators.jpg'),
        array('17', 'Cape Buffelo', 'http://2.bp.blogspot.com/-yF04xOnx4Mo/UeQ_2AkcxgI/AAAAAAAAAtU/MwoO100YkKA/s1600/Cape-Buffalo.JPG'),
        array('18', 'Musk Ox', 'http://2.bp.blogspot.com/-I-hEC4lc_EE/Tl-V5CNy2yI/AAAAAAAAAUw/_TFkxpM8_Og/s1600/Adult-Musk-Ox-1-Palmer-AK-2011-07-23_1936x1296.jpg'),
        array('19', 'Rabbit', 'http://4.bp.blogspot.com/-1solYA4mVAU/UeYWSGGCmqI/AAAAAAAAAKQ/2gm8h0BJmCY/s1600/Rabbit+Farming+in+Kenya.JPG'),
        array('20', 'Jagaur', 'http://3.bp.blogspot.com/-qXfCUOBNLN4/Tnb5CrwJdxI/AAAAAAAABJs/_vAxtuO98VA/s1600/afr-animals-bkt+%25285%2529.jpg'),
        array('21', 'Octopus', 'http://3.bp.blogspot.com/-1evNSBAm0vc/Trn5fMDDj6I/AAAAAAAAIQo/xJ8I5SLwaeI/s1600/1.jpg'),
        array('22', 'Tortoise', 'http://upload.wikimedia.org/wikipedia/commons/4/42/Galapagos_giant_tortoise_Geochelone_elephantopus.jpg'),
        array('23', 'Fox', 'http://2.bp.blogspot.com/-YgSM3ZL9ay8/T7tiLWyOU9I/AAAAAAAAGBQ/pm_C3tqo5zg/s1600/red_fox.jpg'),
        array('24', 'Wolf', 'http://4.bp.blogspot.com/-35rIX1B8mjU/T1qm47ic7VI/AAAAAAAAABY/-qM5x_tCndE/s1600/redwolves.jpg')
    );
    ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="display">
                        <img src="http://1.bp.blogspot.com/-LmuLH6bYWZw/TsfXkJ2D7II/AAAAAAAADFw/kRQ6cq6AlSE/s1600/Venomous_Indian_Cobra_photos%2B%25281%2529.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4 animals-thumbs">
                    <ul><?php foreach ($Animals as $row) { ?>
                        <li>
                            <img src="<?php echo site_url(); echo $tpicImg; echo $row[0] . '.jpg'; ?>" alt="animal" data-animal-url="<?php echo $row[2]; ?>">
                            <p><?php echo $row[1]; ?></p>
                        </li><?php } ?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        This page demonstrates the an easy way to load images on click without refreshing page. Designing is not purpose of this page. 
                        Consider only jquery coding. 
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>