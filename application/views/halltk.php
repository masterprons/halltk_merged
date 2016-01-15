<!DOCTYPE html>
<html lang="en-US">
      <head>
        <title>Title must upto 60 or 70 characters long</title>
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="10 days">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Pranav Shinde">
        <meta name="description" content="Desctioption must upto 150 characters long">
        <meta name="keywords" content="Keyword, must, maximum 7">

        <!--|| Style sheet ||-->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/base/css/halltk.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jquery || document.write("<script src='<?php echo site_url() ?>assets/common/jquery-1.11.3.js'><\/script>");</script>

        <!--|| J S ||-->
        <script>
            $(window).load(function(){
                var rightCollapse = $('.collapse_right');
                var footerCollapse = $('.collapse_footer');
                rightCollapse.click(function(){
                    $(this).nextAll().toggle(100);
                    $('.right i').toggleClass('fa-chevron-circle-left');
                    $('.right i').toggleClass('fa-chevron-circle-right');
                    $(footerCollapse).nextAll().hide(100);
                });
                footerCollapse.click(function(){
                    $(this).nextAll().toggle(100);
                    $('footer i').toggleClass('fa fa-chevron-circle-down');
                    $('footer i').toggleClass('fa fa-chevron-circle-up');
                    $(rightCollapse).nextAll().hide(100);
                });
            });
        </script>
        
    </head>
    <body>
        <header>
            <div class="header_content">
                <div class="logo">
                    <img src="<?php echo site_url(); ?>assets/base/images/HAllTK_logo_small.png" alt="HallTK Logo">
                </div>
                <!--
                <nav>
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                    <div class="navBox">
                        <i class="fa fa-bars fa-lg"></i>
                    </div>
                </nav>
                -->
                <div class="search_bar">
                    <input type="text">
                </div>
            </div>
            
        </header>
        
        <div class="container">
            
            <div class="container_half">
                <section class="one">
                <h1>Welcome to the HAllTK</h1>
                <img alt="Image" src="<?php echo site_url(); ?>assets/base/images/HAllTK_logo3.png">
                <p>
                    The HAllTK stands for hosting, presenting and distributing knowledge. The HAllTK extended as "Host All Things Knowledge". 
                    The website is in under construction but we will make it available for you very soon and then we can upgrade it to share and publish
                    our knowledge to the world wide.
                </p>
            </section>
            
            <section class="one">
                <div class="IndexPanel">
                    <a href="" title="">
                        <div class="IndexUnit">
                            <img src="<?php echo site_url(); ?>assets/base/images/ayurved.png" alt="Ayurved">
                            <div class="text">
                                <h3>Ayurved</h3>
                            </div>
                        </div>
                    </a>
                    <a href="" title="">
                        <div class="IndexUnit">
                            <img src="<?php echo site_url(); ?>assets/base/images/history.png" alt="History">
                            <div class="text">
                                <h3>History</h3>
                            </div>
                        </div>
                    </a>
                    <a href="" title="">
                        <div class="IndexUnit">
                            <img src="<?php echo site_url(); ?>assets/base/images/adhyatm.jpg" alt="Adhyatm">
                            <div class="text">
                                <h3>Adhyatm</h3>
                            </div>
                        </div>
                    </a>
                    <a href="" title="">
                        <div class="IndexUnit">
                            <img src="<?php echo site_url(); ?>assets/base/images/filmography.png" alt="Filmography">
                            <div class="text">
                                <h3>Filmography</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
            </div>
            <div class="container_half">
                <section class="two">
                <div class="image-thumb-panel-with-para">
                    <a href="">
                        <div class="image-thumb-panel">
                            <img src="<?php echo site_url(); ?>assets/base/images/pranav-shinde.png" alt="Pranav Shinde">
                            <h2>About Me</h2>
                        </div>
                    </a>
                    <p>
                        Hello! I am Pranav Shinde. I am a Web Developer and a student forever. Learning is my passion and my hunger. 
                        If there will nothing to learn in entire world, then I am damn sure that I will kill myself but fortunately learning never 
                        ends even a calm, lonely and dark night can teach us lots of things. My efforts are the same; firstly I will learn things 
                        and will try to present it on my website in easy and interesting manner.
                    </p>
                </div>
            </section>
                        
            <section class="two">
                <div class="image-thumb-panel-with-para">
                    <a href="">
                        <div class="image-thumb-panel image-thumb-panel-style-2">
                            <img src="<?php echo site_url(); ?>assets/base/images/web.png" alt="Web Content Panels">
                            <h2>Web Content Panels</h2>
                        </div>
                    </a>
                    <p>
                        At very first I am going to make available some things which are very essential for web developers and web designers just because
                        I am working on such things. I am providing here some online tools websites which are most useful for web development. 
                        And the another thing is the sets of content panels; yes, ready made content panels and some Javascript and Jquery plugins for 
                        web designers to raise their efficiency.
                        <br>
                        You can learn by that ready made content also but for this case I am not willing to give here anymore like tutorial for web 
                        designing because many things are already available on Internet; in fact I have learned almost all Web Development knowledge by 
                        Internet and honestly telling I don't think myself eligible to teach anything to someone.
                    </p>
                </div>
            </section>
            </div>
            
        </div>
        
        <div class="right_aside">
            <div class="collapse_right">
                <div class="right">
                    <i class="fa fa-chevron-circle-right"></i>
                </div>
            </div>
             <div class="rightBar_content">
                <p>
                    Hi everyone! I just started with jquery and now got stuck with if and else if. What I want to do is: on click check If defined 
                    class1 exists, insert a.
                    Hi everyone! I just started with jquery and now got stuck with if and else if. What I want to do is: on click check If defined 
                    class1 exists, insert a.
                    Hi everyone! I just started with jquery and now got stuck with if and else if. What I want to do is: on click check If defined 
                    class1 exists, insert a.
                    Hi everyone! I just started with jquery and now got stuck with if and else if. What I want to do is: on click check If defined 
                    class1 exists, insert a.
                    Hi everyone! I just started with jquery and now got stuck with if and else if. What I want to do is: on click check If defined 
                    class1 exists, insert a.
                    Hi everyone! I just started with jquery and now got stuck with if and else if. What I want to do is: on click check If defined 
                    class1 exists, insert a.
                    Hi everyone! I just started with jquery and now got stuck with if and else if. What I want to do is: on click check If defined 
                    class1 exists, insert a.
                    Hi everyone! I just started with jquery and now got stuck with if and else if. What I want to do is: on click check If defined 
                    class1 exists, insert a.
                    Hi everyone! I just started with jquery and now got stuck with if and else if. What I want to do is: on click check If defined 
                    class1 exists, insert a.
                    Hi everyone! I just started with jquery and now got stuck with if and else if. What I want to do is: on click check If defined 
                    class1 exists, insert a.
                    Hi everyone! I just started with jquery and now got stuck with if and else if. What I want to do is: on click check If defined 
                    class1 exists, insert a.
                    Hi everyone! I just started with jquery and now got stuck with if and else if. What I want to do is: on click check If defined 
                    class1 exists, insert a.
                </p>
            </div>
        </div>
        
        <footer>
            <div class="collapse_footer">
                <i class="fa fa-chevron-circle-up"></i>
            </div>
             <div class="footer_content">
                 <div class="sponsor_brands">
                     <p>Our Sponsors</p>
                 </div>
                 <div class="footer_index">
                     <ul>
                         <li><a href="#">Link</a></li>
                         <li><a href="#">Link</a></li>
                         <li><a href="#">Link</a></li>
                         <li><a href="#">Link</a></li>
                         <li><a href="#">Link</a></li>
                         <li><a href="#">Link</a></li>
                     </ul>
                 </div>
                 <div class="footer_main">
                     &COPY; 2015-2016 | Terms and conditions | Contact Us
                 </div>
            </div>
        </footer>
    </body>
</html>