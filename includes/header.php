<?php 

// set this to false when scraping HTML for live site
$dev = false;

$url = $dev ? 'http://localhost/portfolio' : 'http://lisaotto.co';
$cf_url = $dev ? 'http://localhost/portfolio' : 'https://d1yxcutiq9bg66.cloudfront.net'; 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js oldie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js oldie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js oldie lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js oldie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?php 
            if ($title === 'Lisa Otto') {
                echo 'Lisa Otto';
            } else {
                echo 'Lisa Otto - ' . $title;
            }
            ?>
        </title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="<?= $url; ?>/favicon.ico">

        <link rel="stylesheet" href="<?= $url; ?>/css/style.css">
        
        <script src="<?= $url; ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>

    <?php 
    $body_class = $title !== 'Lisa Otto' ? 'teasers-open' : 'home'; 
    $body_class = isset($slug) ? $body_class . ' ' . str_replace('project/', '', $slug) : $body_class;
    ?>

    <body class="<?= $body_class; ?>">
        <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>

        <?php if ($title !== 'Page Not Found') { ?>
            <div hidden id="page-url"><?php echo $url . '/' . $slug; ?></div>
        <?php } ?>
    
        <div>

            <h1>
                <a href="<?php echo $url; ?>" class="name">Lisa Otto<div class="portrait"><img src="<?php echo $url; ?>/img/portrait.svg" alt="Lisa Otto as an Illustration"><div class="arrow-portrait"></div></div></a><span class="bio"> is a user experience and interface designer who, sometimes, dabbles in illustration.</span>
            </h1>

            <div class="icons">
                <div>
                    <a href="mailto:otto.elizabeth@gmail.com" class="icon-envelope"><p>otto.elizabeth@gmail.com</p></a>
                </div>
                <div>
                    <a href="http://dribbble.com/Lisaotto" class="icon-dribbble" target="_blank"><p>@lisaotto</p></a>
                </div>
                <div>
                    <a href="https://goo.gl/maps/e7AoR" class="icon-pin" alt="Washington DC" target="_blank"><p>Washington&nbsp;DC</p></a>
                </div>
            </div>
        </div>

        <p class="tab" data-toggle="body" data-toggle-class="teasers-open"><span class="work-title">WORK</span><span class="bio-title">BIO</span><span class="icon-arrow"></span></p>

        </header>