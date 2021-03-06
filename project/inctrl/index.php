<?php
$title = 'InCtrl';
$slug = 'project/inctrl';
include('../../includes/header.php'); ?>

    <div class="banner">
        <div class="bannerimg"><img alt="" src="<?php echo $url; ?>/img/inctrl/header_cloth.jpg" alt=""></div>
        <div class="hgroup"><h3 class="whitetitle">Website Redesign</h3><h2 class="whitetitle">TEACH INCTRL</h2></div>
    </div>

    <?php the_navigation($url, $slug); ?>

    <div class="intro clearfix outerpadding">
        <h2><?php echo get_next_slug($slug, $projects); ?></h2>
        <p class="description">InCtrl is a series of lessons for teachers to integrate into their classrooms on safe and responsible Internet usage. InCtrl provides seven lessons with videos and instructions on topics ranging from cyberbullying to media literacy. The redesign project included illustrating badges that conveyed the theme of each lesson. </p>
        <div class="role">
        <h4>My Role</h4>
        <ul>
            <li>UX</li>
            <li>UI</li>
            <li>Illustration</li>
            <li>HTML/CSS support</li>
        </ul>
        <p>Work done with <a href="http://www.ncta.com" title="National Cable and Telecommunications Association" target="_blank">NCTA</a></p>
        </div>
    </div>
    <div class="content outerpadding clearfix">
        <img alt="Illustrated Digital Citizenship Icon" class="onecolumn first" src="<?php echo $url; ?>/img/inctrl/digitalcitizen.png">
        <img alt="Illustrated Privacy Icon" class="onecolumn first" src="<?php echo $url; ?>/img/inctrl/privacy.png">
        <img alt="Illustrated Information Literacy Icon" class="onecolumn first last" src="<?php echo $url; ?>/img/inctrl/infoliteracy.png">
        <img alt="Illustrated Collaboration Icon" class="onecolumn" src="<?php echo $url; ?>/img/inctrl/collaboration.png">
        <img alt="Illustrated Ethics Icon" class="onecolumn" src="<?php echo $url; ?>/img/inctrl/ethics.png">
        <img alt="Illustrated Media Literacy Icon" class="onecolumn last" src="<?php echo $url; ?>/img/inctrl/medialiteracy.png">
        <img alt="Digital Citizenship Home Screen Design" class="threecolumn last" src="<?php echo $url; ?>/img/inctrl/inctrl_home.png">
       <div class="clearfix finalblock">
            <div class="onecolumn">
                <p></p>
                 <img alt="Digital Citizenship Home Screen Design on Mobile" class="threecolumn" src="<?php echo $url; ?>/img/inctrl/inctrl_mobile.png">
            </div>
            <img alt="Digital Citizenship Home Screen Design on Tablet" class="twocolumn last" src="<?php echo $url; ?>/img/inctrl/inctrl_tablet.png">
        </div>
        <a class="visitsite" target="_blank" href="http://www.teachinctrl.org">VISIT SITE<span class="icon-arrow"></span></a>
    </div>

    <div class="bottom-navigation">
        <a class="backup"><span class="title">back up</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>

<?php include('../../includes/footer.php'); ?>
