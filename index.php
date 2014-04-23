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

        <link rel="stylesheet" href="css/style.css">
        
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
        
         <?php include("includes/header.php"); ?>
         
        </header>

        <main id="projects">
            <a href="<?php echo $url; ?>/project/platform" class="project-sample full">
                <img src="<?= $url ?>/img/teaser-platform.jpg">
                <div class="overlay">
                    <div><div class="hgroup"><h2>Platform</h2><h3>Blog Integration</h3></div></div>
                    <div><p class="icon-arrow-box"></p></div>
                </div>             
            </a>
            <a href="<?php echo $url; ?>/project/booksatwork" class="project-sample full">
                <img src="<?= $url ?>/img/teaser-booksatwork.jpg">
                <div class="overlay">
                    <div><div class="hgroup"><h2>Books@Work</h2><h3>Website Redesign</h3></div></div>
                    <div><p class="icon-arrow-box"></p></div>
                </div>            
            </a>
            <a href="<?php echo $url; ?>/project/bandr" class="project-sample half">
                <img src="<?= $url ?>/img/teaser-bandr.jpg">
                <div class="overlay">
                    <div><div class="hgroup"><h2>B and R</h2><h3>Website Redesign</h3></div></div>
                    <div><p class="icon-arrow-box"></p></div>
                </div>
            </a>
            <a href="<?php echo $url; ?>/project/parentalcontrols" class="project-sample half">
                <img src="<?= $url ?>/img/teaser-pc.jpg">
                <div class="overlay">
                    <div><div class="hgroup"><h2>Parental Controls</h2><h3>Website Redesign</h3></div></div>
                    <div><p class="icon-arrow-box"></p></div>
                </div>         
            </a>
            <a href="<?php echo $url; ?>/project/lefkowitz" class="project-sample full">
                <img src="<?= $url ?>/img/teaser-lefkowitz.jpg">
                <div class="overlay">
                    <div><div class="hgroup"><h2>David Lefkowitz</h2><h3>Website Redesign</h3></div></div>
                    <div><p class="icon-arrow-box"></p></div>
                </div>
            </a>
            <a href="<?php echo $url; ?>/project/infographics" class="project-sample half">
                <img src="<?= $url ?>/img/teaser-infographics.jpg">
                <div class="overlay">
                    <div><div class="hgroup"><h2>Infographics</h2><h3>Design &amp; Illustration</h3></div></div>
                    <div><p class="icon-arrow-box"></p></div>
                </div>                 
            </a>
            <a href="<?php echo $url; ?>/project/inctrl" class="project-sample half">
                <img src="<?= $url ?>/img/teaser-inctrl.jpg">
                <div class="overlay">
                    <div><div class="hgroup"><h2>InCtrl</h2><h3>Design &amp; Illustration</h3></div></div>
                    <div><p class="icon-arrow-box"></p></div>
                </div>             
            </a>
            <div class="nolink-box"></div>
        </main>












        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

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
