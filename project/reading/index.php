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
            <p>I Worked collaboratively with <a href="https://medium.com/@saumya.k" target="_blank">Saumya Kharbanda</a> and <a href="http://www.kayleewhite.com/" target="_blank">Kaylee White</a> for the duration of the two week project for CMU MDes IXD Studio on the ideation, video prototype and demonstration.</p>
        </div>
    </div>
    <div class="content outerpadding clearfix">


        <div class="clearfix">
             <div class="iframe-center"><iframe class="iframe-center" src="https://player.vimeo.com/video/143089643?title=0&byline=0&portrait=0" width="900" height="507" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> </div>
            <img  alt="AR UX Flow" class="threecolumn" src="<?php echo $url; ?>/img/reading/chart.jpg">
        </div>
        <div class="clearfix">
            <h5>The Demo</h5>
            <p class="threecolumn">The final result of the project was a proof of concept demo. We created a scenario of a reader selecting books based off of the aura (or "mood") of the books. Though ideally in production this effect would be created through the home's integrated lighting system, we created the effect using a ceiling mounted projector. Then the demo followed the reader as she skimmed through the book and the aura of the lighting changed (through the projector) as she hit different arcs in the narrative. We demonstrated how she could be able to pull and save these moods through a simple tugging gesture. </p>
            <img alt="" class="threecolumn " src="<?php echo $url; ?>/img/reading/img_3.jpg">
            <div class="clearfix">
                <img alt="" class="halfcolumn" src="<?php echo $url; ?>/img/reading/img_1.jpg">
                <img alt="" class="halfcolumn last" src="<?php echo $url; ?>/img/reading/img_2.jpg">
            </div>
            <p class="small finalblock justcenter extrapadding">Photos taken by Saumya</p>

            
        </div>

        <a class="visitsite" target="_blank" href="https://medium.com/@lisa_otto/an-immersive-reading-experience-3942c9f88945#.3oavx8fh7" alt="Process Blog">FULL PROCESS BLOG<span class="icon-arrow"></span></a>
    </div>

    <div class="bottom-navigation">
        <a class="backup"><span class="title">back up</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>

<?php include('../../includes/footer.php'); ?>
