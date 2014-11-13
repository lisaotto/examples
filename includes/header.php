<?php

$dev = isset($_GET['deploy']) && $_GET['deploy'] === 'true' ? false : true;
$url = 'http://localhost/portfolio';

if ( isset($_GET['deploy-url']) ) {
    $url = $_GET['deploy-url'];
}

include('projects.php');

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
        <script>
              Modernizr.addTest('backgroundclip',function() {

                var div = document.createElement('div');

                if ('backgroundClip' in div.style)
                  return true;

                'Webkit Moz O ms Khtml'.replace(/([A-Za-z]*)/g,function(val) {
                  if (val+'BackgroundClip' in div.style) return true;
                });

              });
        </script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-9215814-16', 'auto');
          ga('send', 'pageview');

        </script>
    </head>

    <?php
    $body_class = $title !== 'Lisa Otto' ? '' : 'home';
    $body_class = isset($slug) ? $body_class . ' ' . str_replace('project/', '', $slug) : $body_class;
    ?>

    <body class="<?= $body_class; ?>" data-scroll="<?= isset($scroll) ? $scroll : ''; ?>">
        <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>

        <?php if ($title !== 'Page Not Found') { ?>
            <div hidden id="page-url"><?php echo $url . '/' . $slug; ?></div>
        <?php } ?>

        <div>

            <nav>
                <ul class="clearfix">
                    <li>
                        <a href="<?php echo $url; ?>/about" id="about-link">
                            <p class="<?= $title === 'About' ? 'blue' : ''; ?>">about</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $url; ?>/" id="work-link">
                            <p class="<?= $title !== 'About' ? 'blue' : ''; ?>">work</p>
                            <?php if ($title !== 'About') { ?><span class="icon-arrow blue"></span><?php } ?>
                        </a>
                    </li>
                </ul>

            </nav>

            <h1>
               Lisa<br/>otto
            </h1>
            <p class="social"><a href="mailto:otto.elizabeth@gmail.com" class="icon-envelope"></a><a href="http://dribbble.com/lisaotto" target="_blank" class="icon-dribbble"></a><a href="http://www.twitter.com/lisa_otto" target"_blank" class="icon-twitter"></a><a href="http://instagram.com/lisa_otto" target="_blank" class="icon-instagram"></a></p>
            </div>
        </div>

        </header>

        <main id="content">
