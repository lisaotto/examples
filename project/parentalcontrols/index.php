<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <?php $url = 'http://localhost/portfolio';?>

        <link rel="stylesheet" href="<?php echo $url; ?>/css/style.css">
        
        <script src="<?php echo $url; ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="teasers-open">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>

        <?php include("../../includes/header.php"); ?>
        
        </header>

        <main id="projects">
            <div class="banner"> 
                <div class="bannerimg"><img src="<?php echo $url; ?>/img/parentalcontrols/pc-header.jpg" alt=""></div>
                <div class="hgroup"><h3 class="whitetitle">Website Redesign</h3><h2 class="whitetitle">PARENTAL CONTROLS</h2></div>
            </div>
            <div class="navigation">
                <a class="back" href="<?php echo $url; ?>"><span class="icon-arrow-box"></span><span class="title">BACK</span></a>
                <a class="next" href="<?php echo $url; ?>/project/lefkowitz"><span class="title">NEXT</span><span class="icon-arrow-box"></span></a>
                <div class="bar"></div>
            </div>
            <div class="intro clearfix outerpadding">
                <p class="description">Cable Puts You In Control is a merger of NCTA’s two sites on parental controls — one on web resources and one on television resources. Meant as an aggregate and overview of the tools cable provides, NCTA wanted the site to be consumer accessible but also dynamic in order to keep parents engaged.</p>
                <div class="role">
                <h4>My Role</h4>
                <ul>
                    <li>UX</li>
                    <li>UI</li>
                </ul>
                <p>Work done with <a href="http://www.ncta.com" target="_blank" alt="National Cable and Telecommunications Association">NCTA</a></p>
                </div>
            </div>
            <div class="content outerpadding clearfix">
                <img class="threecolumn first" src="<?php echo $url; ?>/img/parentalcontrols/pc-home.jpg">
                <img class="threecolumn" src="<?php echo $url; ?>/img/parentalcontrols/pc-home-slide.jpg">
                <img class="onecolumn" src="<?php echo $url; ?>/img/parentalcontrols/pc-home-mobile.jpg">
                <img class="onecolumn" src="<?php echo $url; ?>/img/parentalcontrols/pc-home-mobile-slide.jpg">
                <p class="onecolumn last">In order to make the navigation manageable for the user on mobile devices, the two-tiered desktop navigation collapses into a single column. Through off-canvas navigation, the the long column of content takes up as little of the screen as possible while allowing the user to easily switch between navigation and content.</p>
                <img class="onecolumn" src="<?php echo $url; ?>/img/parentalcontrols/pc-choose.png">
                <img class="onecolumn" src="<?php echo $url; ?>/img/parentalcontrols/pc-educate.png">
                <img class="onecolumn last" src="<?php echo $url; ?>/img/parentalcontrols/pc-educate.png">
                <img class="threecolumn last finalblock" src="<?php echo $url; ?>/img/parentalcontrols/pc-landing.jpg">

                <p class="visitsite">SITE IS UNDER DEVELOPMENT</p>
            </div>

            <div class="bottom-navigation">
                <a class="back" href="<?php echo $url; ?>"><span class="icon-arrow-box"></span><span class="title">BACK</span></a>
                <a class="backup" href="#projects"><span class="title">BACK UP</span><span class="icon-arrow-box"></span></a>
                <div class="bar"></div>
            </div>
 
        </main>




        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?php echo $url; ?>/js/plugins.js"></script>
        <script src="<?php echo $url; ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>