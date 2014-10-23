<?php
$title = 'ZenoRadio Live';
$slug = 'project/zenolive';
include('../../includes/header.php'); ?>

    <div class="banner"> 
        <div class="bannerimg"><img src="<?php echo $url; ?>/img/zeno-app/zenoapp-header.jpg"></div>
        <div class="hgroup"><h3>Broadcaster Dashboard</h3><h2>ZenoRadio Live</h2></div>
    </div>
    <div class="navigation">
        <a class="next" href="<?php echo $url; ?>/project/platform"><span class="title">next project</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>
    <div class="intro clearfix outerpadding">
        <p class="description">ZenoRadio's broadcaster dashboard provides tools for individual broadcasters to host talk programs with callers from a variety of mediums (online widgets and telephone calling). I spent time sitting down with broadcasters to see how they manage their programs using the tools available in the market today. Without a unified platform to manage callers and their stream, hosts end up having to juggle many program windows, dashboards microphones, and speakers. Zeno's platform aims to streamline the process allowing hosts to manage their callers, share media files and regulate their regular stream through one interface.  </p>
        <div class="role">
        <h4>My Role</h4>
        <ul>
            <li>UX</li>
            <li>UI</li>
        </ul>
        </div>
    </div>
    <div class="content outerpadding clearfix">
        <div class="clearfix">
            <img class="threecolumn" src="<?php echo $url; ?>/img/zeno-live/zenolive-full.png">
        </div>
        <div class="clearfix">
            <img class="halfcolumn" src="<?php echo $url; ?>/img/zeno-live/zenolive-profile.png">
            <img class="halfcolumn last" src="<?php echo $url; ?>/img/zeno-live/zenolive-media.png">
        </div>
        <div class="clearfix">
            <h5>The Process</h5>
            <p class="threecolumn">Particular attention was paid to how callers were managed as this is a major challenge for broadcasters ( who often find creative uses of conference calling software in tandem with streaming software). Originally, each caller was paired with a robust set of tools for the broadcaster to manage. Given how little attention the host can give to controlling the callers while also talking on air and managing media files, the callers controls were eventaully parred down or hidden for the more advanced user. </p>
        </div>
        <div class="clearfix">
            <img class="threecolumn" src="<?php echo $url; ?>/img/zeno-live/zenolive-iterations.png">
        </div>
        <div class="clearfix">
            <h5>Specs For Development</h5>
            <p class="threecolumn">As interaction as iterated on, I developed set of UI patterns for developers to use as they coded the site in order to maintain consistency even as we revised features. </p>
        </div>
        <div class="clearfix">
            <img class="threecolumn" src="<?php echo $url; ?>/img/zeno-live/zenolive-specs.png">
        </div>
        <div class="clearfix">
            <h5>Ongoing Testing</h5>
            <p class="threecolumn finalblock">Live.Zeno is still being beta tested and undergoing user testing to determine which features are most desirable to the the small talk show broadcasters. More to come as the platform develops.</p>
        </div>
    </div>

    <div class="bottom-navigation">
        <a class="backup" href="#projects"><span class="title">back up</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>


<?php include('../../includes/footer.php'); ?>