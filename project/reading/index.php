<?php
$title = 'An Immersive Reading Experience';
$slug = 'project/reading';
include('../../includes/header.php'); ?>

    <div class="banner">
        <div class="bannerimg"><img alt="" src="<?php echo $url; ?>/img/reading/header_reading.jpg" alt=""></div>
        <div class="hgroup"><h3 class="whitetitle">Design Proposal</h3><h2 class="whitetitle">Immersive Reading</h2></div>
    </div>

    <?php the_navigation($url, $slug); ?>

    <div class="intro clearfix outerpadding">
        <p class="description">Tasked with finding a way to demo a scenario of use for augmented reality (AR) or virtual reality (VR) in two weeks, my group chose to explore the applications to augment the reading experience. We developed a concept for how AR could enhance the personal reading experience. By linking your home’s heating/cooling, lighting and sound system to a book’s narrative ebb and flow, we can create a subtle immersive experience. To demonstrate the possibilities of the system, we created a live demo. We created a video with lighting changes that would be projected on the reading surface as our 'actor' demonstrated the reading experience.</p>

        <div class="role">
            <h4>My Role</h4>
            <p>Worked with <a href="https://medium.com/@saumya.k" target="_blank">Saumya Kharbanda</a> and <a href="http://www.kayleewhite.com/" target="_blank">Kaylee White</a> for the CMU MDes IXD Studio.</p>
        </div>
    </div>
    <div class="content outerpadding clearfix">


        <div class="clearfix">
             <div class="iframe-center"><iframe class="iframe-center" src="https://player.vimeo.com/video/143089643?title=0&byline=0&portrait=0" width="600" height="338" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> </div>
            <img  alt="AR UX Flow" class="threecolumn" src="<?php echo $url; ?>/img/reading/chart.jpg">
        </div>
        <div class="clearfix">
            <h5>The Demo</h5>
            <img alt="" class="threecolumn" src="<?php echo $url; ?>/img/reading/img_1.jpg">
            <img alt="" class="threecolumn" src="<?php echo $url; ?>/img/reading/img_2.jpg">
            <img alt="" class="threecolumn " src="<?php echo $url; ?>/img/reading/img_3.jpg">
            <p class="small finalblock justcenter">Photos taken by Saumya</p>
            
        </div>

        <a class="visitsite" target="_blank" href="https://medium.com/@lisa_otto/an-immersive-reading-experience-3942c9f88945#.3oavx8fh7" alt="Process Blog">FULL PROCESS BLOG<span class="icon-arrow"></span></a>
    </div>

    <div class="bottom-navigation">
        <a class="backup"><span class="title">back up</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>

<?php include('../../includes/footer.php'); ?>
