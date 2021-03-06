<?php
$title = 'Underdog';
$slug = 'project/underdog';
include('../../includes/header.php'); ?>

    <div class="banner">
        <div class="bannerimg"><img alt="" src="<?php echo $url; ?>/img/underdog/underdog-header.jpg"></div>
        <div class="hgroup"><h3>User Onboarding</h3><h2>UNDERDOG</h2></div>
    </div>

    <?php the_navigation($url, $slug); ?>

    <div class="intro clearfix outerpadding">
        <p class="description">Underdog is a start-up that works to connect job seekers with NYC tech start-ups. Their mission is to keep the process simple for job applicants who often spend hours setting up profiles across different sites while looking for jobs. In onboarding job applicants the goal was to keep the sign up process as easy and painless as possible while getting companies the information they need to reach out to candidates.</p>
        <div class="role">
            <h4>My Role</h4>
            <p>I designed wireframes, simple interactive prototypes, UI mock-ups, and UI patterns based on the team's requirements and feedback.</p>
        </div>
    </div>
    <div class="content outerpadding clearfix">
        <div class="clearfix">
            <img alt="Underdog onboarding flow. First, a user is immediately taken to the sign-up form after requesting to join. Second, after a user has filled out the form, s/he is taken to a limited view of the profile. Third, the user is only prompted to set up a password once s/he has reached the profile screen. Finally, once a user has set up a password, s/he has full access to the profile." class="threecolumn" src="<?php echo $url; ?>/img/underdog/underdog-onboarding.png">
            <img alt="Underdog candidate profile interface" class="threecolumn" src="<?php echo $url; ?>/img/underdog/underdog-profile.png">
        </div>
        <div class="clearfix">
            <h5>The Process</h5>
            <p class="threecolumn">After initial conversations to flesh out user motivation (for both the candidates and companies who would be receiving the input information), I brainstormed and sketched proposed flows for entering into the app.</p>
        </div>
        <div class="clearfix">
            <img alt="Sketch of user flow" class="halfcolumn" src="<?php echo $url; ?>/img/underdog/sketch-1.jpg">
            <img alt="Sketch of sign-up form" class="halfcolumn last" src="<?php echo $url; ?>/img/underdog/sketch-2.jpg">
        </div>
        <div class="clearfix">
            <p class="onecolumn loweredblurb">I created higher fidelity wireframes in Illustrator to map out and test the elements of the interface. For example, in early wireframes, when users completed the initial form, they were only given a glimpse of their profile through a transparent background until they created account information. After considering what users saw as a key benefit of Underdog &#8212; its ease of entry &#8212; we wanted to give users a better sense of accomplishment after filling out the initial form.</p>
            <img alt="Underdog wireframe demonstrating the lack of access to the profile" class="twocolumn last" src="<?php echo $url; ?>/img/underdog/underdog-wireframe.png">
        </div>
        <div class="clearfix">
            <p class="threecolumn">I also created a simple working prototype using Invision to demonstrate and test interactions during the sign up process.</p>
        </div>
        <div class="clearfix">
            <h5>UI Patterns</h5>
            <p class="threecolumn">Part of the onboarding development process that carried into other elements of the site was the creation of resuable UI patterns. Elements like form specifications were developed which could be used throughout the site to unify the product visually and keep the coding manageable.</p>
        </div>
        <div class="clearfix">
            <img alt="Underdog color and type style elements" class="halfcolumn" src="<?php echo $url; ?>/img/underdog/underdog-styleelements.jpg">
            <img alt="Underdog form elements" class="halfcolumn last finalblock" src="<?php echo $url; ?>/img/underdog/underdog-formelements.jpg">
        </div>
        <a class="visitsite" href="<?php echo $url; ?>/project/underdog" target="_blank" title="Zeno Android App">PROJECT STILL IN DEVELOPMENT</span></a>
    </div>

    <div class="bottom-navigation">
        <a class="backup"><span class="title">back up</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>


<?php include('../../includes/footer.php'); ?>
