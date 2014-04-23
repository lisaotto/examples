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
                <div class="bannerimg"><img src="<?php echo $url; ?>/img/platform/platform-header.png" alt=""></div>
                <div class="hgroup"><h3>Blog Integration</h3><h2>PLATFORM</h2></div>
            </div>
            <div class="navigation">
                <a class="back" href="<?php echo $url; ?>"><span class="icon-arrow-box"></span><span class="title">BACK</span></a>
                <a class="next" href="<?php echo $url; ?>/project/booksatwork"><span class="title">NEXT</span><span class="icon-arrow-box"></span></a>
                <div class="bar"></div>
            </div>
            <div class="intro clearfix outerpadding">
                <p class="description">NCTA was looking to integrate their external blog into their recently redesigned and rebranded website. Part of the challenge was sticking with the structure and theme of the current site while giving the blog a distinct feel. The NCTA blog covers a wide range of topics from the latest Internet technology to television programming, so the blog had to remain a place that all of the topics could come together cohesively.</p>
                <div class="role">
                <h4>My Role</h4>
                <ul>
                    <li>UX</li>
                    <li>IU</li>
                </ul>
                <p>Work done with <a href="http://www.ncta.com" alt="National Cable and Telecommunications Association">NCTA</a></p>
                </div>
            </div>
            <div class="content outerpadding clearfix">
                <div class="clearfix">
                    <img class="twocolumn first" src="<?php echo $url; ?>//img/platform/platform-wireframe1.png">
                    <p class="onecolumn last">Early wireframes laid out three content types - posts, 'news from elsewhere' (curated links from around the web), and industry data stats. The original design gave prominence to featured content.</p>
                </div>
                <div class="clearfix">   
                    <p class="onecolumn">After reviewing visitor analytics and determining that most users visited the site from promoted article links (rather than casually browsing the homepage), encouraging users to browse content became the priority in wireframing. Sequential full articles allow the user to more naturally flow from reading one article to the next.</p>
                    <img class="twocolumn last lesspadding" src="<?php echo $url; ?>//img/platform/platform-wireframe2.png">
                </div>
                <div class="clearfix">
                    <img class="threecolumn" src="<?php echo $url; ?>//img/platform/platform-home.jpg">
                    <img class="threecolumn gridoverlay" src="<?php echo $url; ?>/img/platform/home-grid.png">
                </div>
                <div class="clearfix">
                    <p class="twocolumn">Because the blog was being integrated into an existing site, all of the features had to fit onto the existing grid system. </p>
                    <div class="onecolumn last"> <p  class="gridbutton">VIEW GRID</p></div>
                </div>
                <div class="clearfix extrapadding">
                    <img class="twocolumn" src="<?php echo $url; ?>//img/platform/menu.gif">
                    <p class="onecolumn last">In order to avoid competition between the main navigation and the blog navigation, the blog’s navigation is hidden behind a hamburger navigation. The main goal is to have users read through the latest posts, however if a user is looking for particular content, posts are sorted into categories. Top stories within those categories are promoted within the navigation. </p>
                </div>
                <div class="clearfix extrapadding">
                    <p class="onecolumn">The ‘news from elsewhere’ bar remains fixed as the user scrolls through the posts but can be hidden for better readability.</p>
                    <img class="twocolumn last" src="<?php echo $url; ?>//img/platform/newsfromelsewhere.gif">
                </div>
                <div class="clearfix extrapadding">
                    <img class="twocolumn" src="<?php echo $url; ?>//img/platform/individual.png">
                    <p class="onecolumn last">Examining the analytics, we found that readers rarely clicked on the standard ‘related articles’ link on the old blog. Instead, on individual posts, the homepage is mimicked with an abbreviated curated post styled the same as the individual post to encourage readers to continue reading after they have finished the first article</p>
                </div>
                <div>
                    <img class="onecolumn" src="<?php echo $url; ?>//img/platform/platform-mobile.jpg">
                    <img class="twocolumn last finalblock" src="<?php echo $url; ?>//img/platform/platform-tablet.jpg">
                </div>
                <a class="visitsite" href="https://www.ncta.com/platform/" alt="Platform: Technology, TV & the Future">VISIT SITE<span class="icon-arrow"></span></a>
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