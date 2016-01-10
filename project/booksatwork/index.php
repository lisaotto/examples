<?php
$title = 'Books at Work';
$slug = 'project/booksatwork';
include('../../includes/header.php'); ?>

    <div class="banner">
        <div class="bannerimg"><img alt="" src="<?php echo $url; ?>/img/booksatwork/header_booksatwork.png" alt=""></div>
        <div class="hgroup"><h3>Website Redesign</h3><h2>BOOKS@WORK</h2></div>
    </div>

    <?php the_navigation($url, $slug); ?>

    <div class="intro clearfix outerpadding">
        <p class="description">Books@Work is a young non-profit that uses literature seminars to improve workplace morale and performance. The Books@Work team was looking for a website that would make the program (and Shakespeare) accessible to their new audience.</p>
        <div class="role">
            <h4>My Role</h4>
            <p>I provided site architecture, illustrations, UI mocks and worked closely with developer <a href="http://scottdonaldson.net" alt="Scott Donadlson, Developer" target="_blank">Scott Donaldson</a> to create in-browser animated illustrations and to ensure site was developed to spec.</p>
        </div>
    </div>
    <div class="content outerpadding clearfix">
        <div class="clearfix">
            <img alt="Wireframe of old design with links to all the pages displayed in a grid" class="halfcolumn" src="<?php echo $url; ?>/img/booksatwork/books-wireframe-old.png">
            <p alt"Illustration: Content is funneled into Employers, Professors, and Employees pages" class="onecolumn loweredblurb last">Originally the site had a grid of links to secondary pages. Because some of the content is only relevant to certain audiences, it created an overwhelming experience and limited the space for an introduction to the program.</p>
        </div>
        <div class="clearfix">
            <img  alt="Illustration demonstrates content being funneled into Employers, Professors, and Employees pages" class="halfcolumn floatright last" src="<?php echo $url; ?>/img/booksatwork/books-bucketing.png">
            <p alt="Books@Work homepage design" class="onecolumn floatright alignright">In order to simplify the navigation and site structure overall, we bucketed much of the content into audience categories.</p>
        </div>
        <div class="clearfix">
            <img alt="Illustrated wireframe with bucketed navigation that creates a more directed experience for the user and more space for introductory content" class="halfcolumn" src="<?php echo $url; ?>/img/booksatwork/books-wireframe-new.png">
            <p class="onecolumn loweredblurb last">Simplifying the navigation allowed space for the homepage copy and graphic elements to introduce the mission and key elements of the program, such as the books they were reading.</p>
        </div>
        <div class="clearfix">
            <img alt="Books@Work homepage design" class="threecolumn" src="<?php echo $url; ?>/img/booksatwork/booksatwork-home.jpg">
        </div>
        <div class="clearfix">
            <p class="onecolumn alignright">The Books@Works team wanted the books to take center stage on the site. We created an interactive bookshelf for the homepage, ensuring that it would be easily updatable as their roster of books grew.</p>
            <img alt=Animation of scrolling bookshelf"" class="twocolumn last" src="<?php echo $url; ?>/img/booksatwork/booksshelf.gif">
        </div>
        <div class="clearfix">
        <img alt="Books@Work homepage design on mobile" class="onecolumn" src="<?php echo $url; ?>/img/booksatwork/books-mobile-blog.png">
        <img alt="Books@Work homepage design on mobile with menu open" class="onecolumn" src="<?php echo $url; ?>/img/booksatwork/books-mobile-nav.png">
        <img alt="Books@Work contact page design on mobile" class="onecolumn last finalblock" src="<?php echo $url; ?>/img/booksatwork/books-mobile-contact.png">
        </div>

        <a class="visitsite" target="_blank" href="http://www.booksatwork.org" alt="Books@Work">VISIT SITE<span class="icon-arrow"></span></a>
    </div>

    <div class="bottom-navigation">
        <a class="backup"><span class="title">back up</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>

<?php include('../../includes/footer.php'); ?>
