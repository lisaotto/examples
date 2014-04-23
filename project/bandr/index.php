<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>B&R</title>
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
                <div class="bannerimg"><img src="<?php echo $url; ?>/img/bandr/bandr-header.jpg" alt=""></div>
                <div class="hgroup"><h3 class="whitetitle">Website Redesign</h3><h2 class="whitetitle">B & R</h2></div>
            </div>
            <div class="navigation">
                <a class="back" href="<?php echo $url; ?>"><span class="icon-arrow-box"></span><span class="title">BACK</span></a>
                <a class="next" href="<?php echo $url; ?>/project/parentalcontrols"><span class="title">NEXT</span><span class="icon-arrow-box"></span></a>
                <div class="bar"></div>
            </div>
            <div class="intro clearfix outerpadding">
                <p class="description">B & R is an auto and truck salvage yard whose main goal with the website redesign was to keep the information accessible and easy to understand. They had an external vendor for used parts but wanted to create a gallery for bigger ticket items on their site. We worked with photographer Nate Ryan to give each visitor the feel that they are visiting the yard in person. </p>
                <div class="role">
                <h4>My Role</h4>
                <ul>
                    <li>UX</li>
                    <li>UI</li>
                </ul>
                <p>Work done with <a href="http://www.parsleyandsprouts.com" alt="Parsley and Sprouts, LLC">Parsley & Sprouts</a></p>
                 <p>Photos taken by <a href="http://nateryan.com" alt="Nate Ryan">Nate Ryan</a></p>
                </div>
            </div>
            <div class="content outerpadding clearfix">
                <img class="threecolumn first" src="<?php echo $url; ?>/img/bandr/bandr-home.jpg">
                <img class="onecolumn" src="<?php echo $url; ?>/img/bandr/bandr-home-mobile.jpg">
                <img class="onecolumn" src="<?php echo $url; ?>/img/bandr/bandr-services-mobile.jpg">
                <p class="onecolumn last">Ensuring that a site with full width images would work responsively meant repositioning the text in new content areas for mobile and considering horizontal breakpoints.</p>
                <img class="threecolumn" src="<?php echo $url; ?>/img/bandr/bandr-services.jpg">
                <img class="halfcolumn" src="<?php echo $url; ?>/img/bandr/bandr-sales.jpg">
                <img class="halfcolumn last  finalblock" src="<?php echo $url; ?>/img/bandr/bandr-sales-hover.jpg">
                <a class="visitsite" href="http://www.bandrautotrucksalvage.com/">VISIT SITE<span class="icon-arrow"></span></a>
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