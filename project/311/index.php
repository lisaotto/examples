<?php
$title = 'A New 311';
$slug = 'project/311';
include('../../includes/header.php'); ?>

    <div class="banner">
        <div class="bannerimg"><img alt="" src="<?php echo $url; ?>/img/311/header_311.jpg" alt=""></div>
        <div class="hgroup"><h3>Speculative Redesign</h3><h2>A NEW 311 </h2></div>
    </div>

    <?php the_navigation($url, $slug); ?>

    <div class="intro clearfix outerpadding">
        <p class="description">As city planning becomes increasingly driven by sensors and data, it’s easy to lose sight of who these cities are for. But a city that relies on collected environmental data is a cold city. Knowing what residents want and need from their city and ensuring that they’re engaged with civic life keeps a city warm and alive. In response to a class project brief to design a “responsive and scalable User Interface that connects the experience across multiple devices ranging from a mobile phone, to digital whiteboards, to interactive kiosks” which facilitated collaborative visual thinking, I explored the way Pittsburgh’s 311 system could facilitate collaboration accross the city.</p>


        <div class="role">
            <h4>My Role</h4>
            <p>I designed the storyboards, wireframes, mocks and video based on personas provided by the IXD Studio class.</p>
        </div>
    </div>
    <div class="content outerpadding clearfix">


        <div class="clearfix">
             <div class="iframe-center"><iframe class="iframe-center" src="https://player.vimeo.com/video/140729357?title=0&byline=0&portrait=0" width="600" height="338" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> </div>
            <p class="threecolumn">“Beyond 311” is a common headline for stories on ‘smart cities’ but 311 is the foundation for a system to gather than feedback from and for community if properly implemented. 311 was first developed in the ‘90s as a phone number to get information on city services. “Burning building? Call 911. Burning question? Call 311.” was the tagline for the Chicago 311.</p>
            <p class="threecolumn first" >However, Pittsburgh’s 311 system hasn’t changed much since then. While now you can report issues online, the system is still focused on getting information in and not providing feedback to residents. Pittsburgh’s 311 doesn’t provide a way for citizens to track or share reports. It doesn’t provide a way for citizens to monitor the number of issues being reported or the speed at which they are being dealt with. While, obviously, a key part of a 311 system is getting issues to the department so they can resolve them, providing residents with feedback would increase engagement and improve accountability in the government, creating a more vibrant community.</p>
        </div>
        <div class="clearfix">
            <img  alt="Mobile UX Flow" class="threecolumn" src="<?php echo $url; ?>/img/311/311-ui.png">


        </div>
        <div class="clearfix">
            <img  alt="Mobile UX Flow" class="threecolumn" src="<?php echo $url; ?>/img/311/311-iphone-flow.png">
            <img  alt="Desktop UX flow" class="threecolumn" src="<?php echo $url; ?>/img/311/311-desktop-flow.png">


        </div>
        <div class="clearfix">
            <h5>Storyboards</h5>
            <img alt="Storyboard Panel 1: Maggie Discovers a Civic Issue" class="threecolumn" src="<?php echo $url; ?>/img/311/storyboard-maggie-panel1.jpg">
            <p class="threecoloumn">Maggie is walking to Target with her granddaughter. They stop and wait at a crosswalk with the Target in their sights. When the walk light turns green, Maggie is about to step into the street but notices that the ramp isn’t at the crosswalk — it’s at the corner of the sidewalk. ‘That’s annoying,’ she thinks. ‘That’s a big step for Kacey and I don’t want to veer us into traffic.’ She pulls up the 311 site on her phone. It recognizes her location and pinpoints her on a map. She’s not surprised to see that someone has already submitted a photo of the misplaced ramp and three other people have confirmed that this is an issue. ‘Wow!’ she thinks, ‘this has been an issue since two month ago!’ She taps to confirm that it’s still an issue and asks to be notified when it’s resolved.</p>
            <img alt="Storyboard Panel 2: Maggie Reports a Civic Issue" class="threecolumn first" src="<?php echo $url; ?>/img/311/storyboard-maggie-panel2.jpg">
              <p class="threecoloumn">Later, walking home with their shopping bags, she notices that someone has knocked over the stop sign. She pulls up the site again. No one’s submitted this issue! She takes a quick picture and adds a description to the site.</p>
            <img alt="Storyboard Panel 3: Maggie Checks Up On a Civic Issues" class="threecolumn first" src="<?php echo $url; ?>/img/311/storyboard-maggie-panel4.png">
            <p class="threecoloumn last">Two days later she gets a notification that the stop sign has been resolved. ‘Hmm,’ she thinks, ‘what about that curb?’ She pulls up the site. Still an issue! She sends it to two of her friends that work with her on the community garden. They, too, have been frustrated with the city’s irregular decisions on crosswalk maintenance. They click to confirm that the crosswalk is still an issue.</p>
        </div>
        <div class="clearfix">
             <h5>Wireframes</h5>
            <img alt="Mobile Wireframes" class="threecolumn" src="<?php echo $url; ?>/img/311/tabs.jpg">
             <img alt="Desktop Wireframs" class="threecolumn last" src="<?php echo $url; ?>/img/311/pads.jpg">
        </div>

        <div class="clearfix">
            <h5>Areas for Further Exploration</h5>
            <p class="threecolumn finalblock">This proposal does not consider integrating phone call reports or alternative reporting methods (such as Twitter). For the system to truly impactful it should all these reporting methods. Also while I did some very minor research into the Twitter reporting being done, I didn't speak with anyone who works for Pittsburgh's Department of Innovation and Performace. To create a system that actually addresses the needs of the community, it'simportant to collaborate with that team to understand the barriers that the program and team faces and integrate their needs as administrators as well.</p>
        </div>
    

        <a class="visitsite" target="_blank" href="https://medium.com/ixd-studio/storyboarding-a-new-311-688e1770e880" alt="Books@Work">FULL PROCESS BLOG<span class="icon-arrow"></span></a>
    </div>

    <div class="bottom-navigation">
        <a class="backup"><span class="title">back up</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>

<?php include('../../includes/footer.php'); ?>
