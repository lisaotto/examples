<?php
$title = 'Zeno Android App';
$slug = 'project/zenoandroid';
include('../../includes/header.php'); ?>

    <div class="banner"> 
        <div class="bannerimg"><img src="<?php echo $url; ?>/img/zeno-app/zenoapp-header.jpg"></div>
        <div class="hgroup"><h3>Android App</h3><h2>ZenoRadio</h2></div>
    </div>
    <div class="navigation">
        <a class="next" href="<?php echo $url; ?>/project/zenolive"><span class="title">next project</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>
    <div class="intro clearfix outerpadding">
        <p class="description">ZenoRadio provides tools both for broadcasters to produce a radio show and listeners to engage with those radio programs. The initial Android app for listening developed as a white label app for broadcasters to brand as their own. We choose to develop initially for Android as the user base was concentrated around that platform. In developing the Android app, I had to be particularly mindful about designing with the flexibility to expand features and revise. The first iteration of the app has minimal interactive features allowing us to test user response and add in interactivity interatively. </p>
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
            <img class="twocolumn" src="<?php echo $url; ?>/img/zeno-app/zenoapp-multistation.png">
            <p class="onecolumn last loweredblurb">For broadcasters with multiple stations, users will land in the multistation station listing when first accessing the device. One particular concern was users tendency to lose their audio content when navigation away from the station screen. To ensure users could maintain control and awareness of playing content a small content bar is added to all screens when the station is playing.</p>
        </div>
        <div class="clearfix">
            <p class="onecolumn loweredblurb">A unique feature of ZenoRadio is that users are able to listen to content via voice or data. Users are familiar with data listening and so after hallway usability tesing and technical constraints, we settled on giving voice listening secondary prominence for advanced users.</p>
            <img class="twocolumn last" src="<?php echo $url; ?>/img/zeno-app/zenoapp-playscreen.png">
        </div>
        <div class="clearfix">
            <img class="onecolumn" src="<?php echo $url; ?>/img/zeno-app/zenoapp-voice.png">
            <p class="twocolumn last loweredblurb">I tried to keep modals were kept to a minium but since using voice can sometimes result in a phone service charge and also requires that the user leave the app, an intersitatial confirmation was needed in the first time a user attempts to listen via voice.</p>
        </div>
        <div class="clearfix">
            <h5>The Process</h5>
            <p class="halfcolumn"> Initially, as I convieced of the product, I tried to design in as many of the desired interactive features as possible. As we began discussing user needs and technical constraints, it became clear that it would be much more practical to streamlime the design to the basic features and begin testing those. Interactive features could be added back in once user research was gathered to determine if they were desirable.</p>
            <p class="halfcolumn last"> Particular attention was paid to the interaction with voice and data listening. Since this is an unfamiliar feature to many listeners, I was able to some quick ____ with inhouse broadcasters. In quickly became clear that text only links would not work as many users did not speak English.</p>
        </div>
        <div class="clearfix">
            <img class="threecolumn" src="<?php echo $url; ?>/img/zeno-app/zenoapp-iterations.png">
        </div>
        <div class="clearfix">
            <!-- <img class="onecolumn" src="<?php echo $url; ?>/img/zeno-app/zenoapp-prototype1.jpg"> -->
            <img class="twocolumn" src="<?php echo $url; ?>/img/zeno-app/zenoapp-prototype2.jpg">
            <p class="onecolumn loweredblurb last"> I in order to test and demonstrate interactions in a more realistic environment, I created a prototype that could be downloaded on an Android phone to simulate the flow of the app.</p>
        </div>
        <div class="clearfix">
            <h5>User Flow</h5>
            <p class="threecolumn">The final flow presented to the developers walked through all screens and flow for the the initial app development.</p>
        </div>

        <div class="clearfix">
            <img class="threecolumn finalblock" src="<?php echo $url; ?>/img/zeno-app/zenoapp-flow.jpg">
        </div>

    </div>

    <div class="bottom-navigation">
        <a class="backup" href="#projects"><span class="title">back up</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>


<?php include('../../includes/footer.php'); ?>