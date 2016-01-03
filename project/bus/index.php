<?php
$title = 'Reducing Anxiety at the Bus Stop';
$slug = 'project/bus';
include('../../includes/header.php'); ?>

    <div class="banner">
        <div class="bannerimg"><img alt="" src="<?php echo $url; ?>/img/bus/bus-header.jpg" alt=""></div>
        <div class="hgroup"><h3 class="whitetitle">Research & Design Proposal</h3><h2 class="whitetitle">AT THE BUS STOP</h2></div>
    </div>

    <?php the_navigation($url, $slug); ?>

    <div class="intro clearfix outerpadding">
        <p class="description">The wait for the bus is high point of anxiety for bus riders. How can we make waiting for the bus a less frustrating experience? Could it be productive? Social? Or just less anxiety-creating? After performing ethnographic research at bus stops in Pittsburgh, our team proposed four interventions that could reduce the stress of the waiting for the bus. </p>


        <div class="role">
            <h4>My Role</h4>
            <p>I worked with fellow CMU design grad students <a href="https://medium.com/@saumya.k" target="_blank">Saumya Kharbanda</a> and <a href="http://kate-mclean.squarespace.com/" target="_blank">Kate McLean</a> collaborately on the research and design proposal phases of this project for IXD Studio.</p>
        </div>
    </div>
    <div class="content outerpadding clearfix">


        <div class="clearfix">
            <div class="iframe-center"><iframe class="iframe-center" src="https://player.vimeo.com/video/148120143?title=0&byline=0&portrait=0" width="600" height="338" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
            <h5>Ethnographic Research: Understanding the Users</h5>
            <p class="threecolumn">After taking several research trips to a busy intersection in Pittsburgh, we observed that bus stop riders are not a homogeneous group of people. They appeared to fall into three categories, clustered around age, but defined more broadly by attitude and habit. The 'domimant group' appeared most comfortable in the bus stop and used the wait time for social intereactions. We wondering if we could spread this attitude without disrupting the heirarchy already established within stops.</p>
        </div>
        <div class="clearfix">
            <img  alt="Mobile UX Flow" class="threecolumn" src="<?php echo $url; ?>/img/311/311-ui.png">

        </div>
        <div class="clearfix">
            <img  alt="Journey map for the Youth, Dominant Group and Elderly at the bus stop" class="threecolumn" src="<?php echo $url; ?>/img/bus/journey_chart.png">
            <img  alt="Anxiety patterns found at the bus stop" class="threecolumn" src="<?php echo $url; ?>/img/bus/pattern_chart.png">
            
        </div>
        <div class="clearfix">
            <h5>Proposed Interventions</h5>
        </div>
        <div class="clearfix">
            <h6>Intervention 1: Predicting Bus Service without fixed timing</h6>
            <p class="threecolumn">While the wait time between buses might be fixed, the way people track that wait time varies (pause) from a tacit understanding of the bus cycle to printed schedules to digital apps. We saw that the fixed arrival time increased anxiety, focusing people on the wait time and creating frustration if the bus was even a few seconds off. An integrated wayfinding system would track the location of the buses, relying heavily on people’s assessment of arrival time and avoiding fixed scheduling. This map would begin to orient people to Pittsburgh’s illegible geography, and more functionally, alleviate the confusion of an overcrowded bus blowing by.</p>
            <video width="1400" autoplay loop > 
                <source src="<?php echo $url; ?>/img/bus/map.mp4" type="video/mp4"> 
                <source src="<?php echo $url; ?>/img/bus/map.ogg" type="video/ogg"> 
                <source src="<?php echo $url; ?>/img/bus/map.webm" type="video/webm"> 
            </video>
            <p class="threecolumn"> Bus map design would use a poster map and LEDs. Each map would be customized for each stop it is implemented in and be connected to the Port Authority’s GPS bus data in order to show bus tracking.</p>
            <img alt="Storyboard Panel 2: Maggie Reports a Civic Issue" class="threecolumn" src="<?php echo $url; ?>/img/bus/map_diagram.png">
            <p class="small">Map Illustration by Saumya</p>
        </div>
        <div class="clearfix">
            <h6>Intervention 2: A Subtle Annoucement of the Bus</h6>
            <p class="threecolumn"> People ritually checked the space or their phone to see when the bus was arriving, keeping them from engaging in social interaction or other activities that they might find more meaningful. A lighting and sound system helps to indicate where bus stops are located at night but also indicates when buses are arriving so that people can focus on activities while waiting.</p>
            <video width="1400" autoplay loop > 
                <source src="<?php echo $url; ?>/img/bus/lighting.mp4" type="video/mp4"> 
                <source src="<?php echo $url; ?>/img/bus/lighting.ogg" type="video/ogg"> 
                <source src="<?php echo $url; ?>/img/bus/lighting.webm" type="video/webm"> 
            </video>
        </div>
        <div class="clearfix">
            <h6>Intervention 3: Acknowleding and Accomodating the Use of Space Around the Shelter</h6>
            <p class="threecolumn">Typical bus shelters have small frames that can only accommodate 3 to 5 people. Stops where we found the most social interaction were deep and allowed for people to move in, out, and around the stop. Modular seating that expands outside of the frame of the bus stop will acknowledge people’s habit of being in motion in and around the designated space while waiting. </p>
            <img alt="Example map for shelter at S Negley Ave & Baum Ave" class="threecolumn" src="<?php echo $url; ?>/img/bus/benches.jpg">
        </div
        <div class="clearfix">
            <h6>Intervention 4: Giving the Shelterless Stops a Sense of Space</h6>
            <p class="threecolumn">Bus stops with shelters are easy to locate but those with bus signs are a challenge to find for newcomers. Colorful concrete patterns around the bus stop help identify bus stops and create a clearer sense of space for stops without shelters. These tiles could be different for each stop, and designed by local artists, creating a greater sense of community for each stop and adding to the legibility of the city. </p>
            <img alt="Example map for shelter at S Negley Ave & Baum Ave" class="threecolumn finalblock" src="<?php echo $url; ?>/img/bus/no-shelter.jpg">
        </div>

         <a class="visitsite" target="_blank" href="https://medium.com/@lisa_otto/reducing-anxiety-at-the-bus-stop-6537795a9470#.yjhjtha95" alt="Process Blog">FULL PROCESS BLOG<span class="icon-arrow"></span></a>

    <div class="bottom-navigation">
        <a class="backup"><span class="title">back up</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>

<?php include('../../includes/footer.php'); ?>
