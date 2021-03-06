<?php
$title = 'B and R';
$slug = 'project/bandr';
include('../../includes/header.php'); ?>

    <div class="banner">
        <div class="bannerimg"><img alt="" src="<?php echo $url; ?>/img/bandr/bandr-header.jpg" alt="B and R"></div>
        <div class="hgroup"><h3 class="whitetitle">Website Redesign</h3><h2 class="whitetitle">B &amp; R</h2></div>
    </div>

    <?php the_navigation($url, $slug); ?>

    <div class="intro clearfix outerpadding">
        <h2><?= $next; ?></h2>
        <p class="description">B &amp; R is an auto and truck salvage yard whose main goal with the website redesign was to keep the information accessible and easy to understand. They had an external vendor for used parts but wanted to create a gallery for bigger ticket items on their site. We worked with photographer Nate Ryan to give each visitor the feel that they are visiting the yard in person. </p>
        <div class="role">
        <h4>My Role</h4>
        <ul>
            <li>UX</li>
            <li>UI</li>
        </ul>
        <p>Photos taken by <a href="http://nateryan.com" title="Nate Ryan" target="_blank">Nate Ryan</a></p>
        </div>
    </div>
    <div class="content outerpadding clearfix">
        <img alt="B &lt; R homepage design" class="threecolumn first" src="<?php echo $url; ?>/img/bandr/bandr-home.jpg">
        <img alt="B &lt; R homepage design on mobile" class="onecolumn" src="<?php echo $url; ?>/img/bandr/bandr-home-mobile.jpg">
        <img alt="B &lt; R services page design on mobile" class="onecolumn" src="<?php echo $url; ?>/img/bandr/bandr-services-mobile.jpg">
        <p class="onecolumn last">Ensuring that a site with full width images would work responsively meant repositioning the text in new content areas for mobile and considering horizontal breakpoints.</p>
        <img alt="B &lt; R services page design" class="threecolumn" src="<?php echo $url; ?>/img/bandr/bandr-services.jpg">
        <img alt="B &lt; R sales page design" class="halfcolumn" src="<?php echo $url; ?>/img/bandr/bandr-sales.jpg">
        <img alt="B &lt; R sales page design with hover" class="halfcolumn last  finalblock" src="<?php echo $url; ?>/img/bandr/bandr-sales-hover.jpg">
        <a class="visitsite" href="http://www.bandrautotrucksalvage.com/" target="_blank">VISIT SITE<span class="icon-arrow"></span></a>
    </div>

    <div class="bottom-navigation">
        <a class="backup"><span class="title">back up</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>

<?php include('../../includes/footer.php'); ?>
