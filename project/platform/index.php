<?php
$title = 'Platform';
$slug = 'project/platform';
include('../../includes/header.php'); ?>

    <div class="banner">
        <div class="bannerimg"><img alt="" src="<?php echo $url; ?>/img/platform/platform-header.png"></div>
        <div class="hgroup"><h3>Blog Integration</h3><h2>PLATFORM</h2></div>
    </div>

    <?php the_navigation($url, $slug); ?>

    <div class="intro clearfix outerpadding">
        <p class="description">NCTA was looking to integrate the external blog into the recently redesigned website. The NCTA blog covers a wide range of topics from the latest Internet technology to television programming, so the blog had to remain a place where all of the topics could come together cohesively. Part of the challenge was maintaining the structure and theme of the current site while giving the blog a distinct feel.</p>
        <div class="role">
        <h4>My Role</h4>
            <p>As the sole designer on the in-house team, I worked with the content and tech members to define requirements and then created wireframes, UI mocks, and development specifications. I also provided direction and feedback to the external development team to ensure the designs were completed to spec and provided front-end HTML/CSS coding support where needed.</p>
        <p>Work done with <a href="http://www.ncta.com" target="_blank" title="National Cable and Telecommunications Association">NCTA</a></p>
        </div>
    </div>
    <div class="content outerpadding clearfix">
        <div class="clearfix">
            <img alt="Early platform blog wireframe with notes" class="twocolumn first" src="<?php echo $url; ?>/img/platform/platform-wireframe1.png">
            <p class="onecolumn last raisedblurb">Early wireframes laid out three content types — posts, 'news from elsewhere' (curated links from around the web), and industry data stats. The original design gave prominence to featured content.</p>
        </div>
        <div class="clearfix">
             <img alt="Later platform blog wireframe with notes" class="twocolumn last floatright" src="<?php echo $url; ?>/img/platform/platform-wireframe2.png">
            <p class="onecolumn floatright alignright">After reviewing visitor analytics and determining that most users visited the site from promoted article links, encouraging users to browse content became the priority in wireframing. In the final wireframe, sequential full articles allow the user to more naturally flow from reading one article to the&nbsp;next.</p>

        </div>
        <div class="clearfix">
            <img alt="Platform Blog Interface" class="threecolumn" src="<?php echo $url; ?>/img/platform/platform-home.jpg">
            <img alt="grid" class="threecolumn gridoverlay" src="<?php echo $url; ?>/img/platform/home-grid.png">
        </div>
        <div class="clearfix">
            <p class="twocolumn">Because the blog was being integrated into an existing site, all of the features had to fit into the existing grid system. </p>
            <div class="onecolumn last"> <p class="gridbutton">VIEW GRID</p></div>
        </div>
        <div class="clearfix extrapadding">
            <img alt="Animation demonstrating blog navigation interactivity" class="twocolumn" src="<?php echo $url; ?>/img/platform/menu.gif">
            <p class="onecolumn last">In order to avoid competition between the main navigation and the blog navigation, the blog’s category menu is hidden behind a hamburger icon. Top stories within these categories are promoted within the navigation. </p>
        </div>
        <div class="clearfix extrapadding">
            <img alt="Animation demonstrating news from elsewhere interactivity" class="twocolumn last floatright" src="<?php echo $url; ?>/img/platform/newsfromelsewhere.gif">
            <p class="onecolumn floatright alignright">The ‘news from elsewhere’ bar remains fixed as the user scrolls through the posts but can be hidden for better readability.</p>
        </div>
        <div class="clearfix extrapadding">
            <img alt="Individual blog post design" class="twocolumn" src="<?php echo $url; ?>/img/platform/individual.png">
            <p class="onecolumn last">Examining the analytics, we found that readers rarely clicked on the  ‘related articles’ link on the old blog. Instead, on individual articles, the homepage is mimicked with an abbreviated curated post styled the same as the article to encourage readers to continue reading after they have finished the article.</p>
        </div>
        <div>
            <img alt="Blog design on mobile" class="onecolumn" src="<?php echo $url; ?>/img/platform/platform-mobile.jpg">
            <img alt="Blog design on tablet" class="twocolumn last finalblock" src="<?php echo $url; ?>/img/platform/platform-tablet.jpg">
        </div>
        <a class="visitsite" href="https://www.ncta.com/platform/" target="_blank" title="Platform: Technology, TV and the Future">VISIT SITE<span class="icon-arrow"></span></a>
    </div>

    <div class="bottom-navigation">
        <a class="backup"><span class="title">back up</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>

<?php include('../../includes/footer.php'); ?>
