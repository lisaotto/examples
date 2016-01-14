<?php
$title = 'Intersections';
$slug = 'project/intersection';
include('../../includes/header.php'); ?>

    <div class="banner">
        <div class="bannerimg"><img alt="" src="<?php echo $url; ?>/img/intersection/intersection-header.jpg" alt=""></div>
        <div class="hgroup"><h3 class="whitetitle">Conceptual Design Explorations</h3><h2 class="whitetitle">Pittsburgh Intersections</h2></div>
    </div>

    <?php the_navigation($url, $slug); ?>

    <div class="intro clearfix outerpadding">
        <p class="description">I began the lab course by looking at intersections and the abundance of types of traffic signals in Pittsburgh. In what ways can the digital signage improve or diminish the walkability of a city? This quickly morphed into an exploration of the functions of traffic signals—not just their surface function, directing traffic patterns, but how they mediate our relationships with others on the road. </p>


        <div class="role">
            <h4>My Role</h4>
            <p>Created during CMU MDes Computational Lab.</p>
        </div>
    </div>
    <div class="content outerpadding clearfix">

        <h5 class="no-margin">Project 1: Intersection / Collision </h5>
        <div class="clearfix">
            
            <p class="threecolumn">Typically, traffic signals function as a mediator, allowing pedestrians and cars to avoid interacting with each other. Crosswalks are the intersections where cars and pedestrians overlap. Otherwise, the two remain in their own separate channels. Sometimes, this intersection creates a collision. On Twitter, you can watch as people share experiences with these intersections—not with those who also experienced the intersection but with their followers. Does Twitter serve a similar function to the traffic signals? By matching two tweets—one from a person writing ‘almost hit someone with my car’ and one from someone writing ‘almost got hit by a car today,’ we create another near collision...</p>
            <img alt="Intersection 1 Screenshot" class="threecolumn" src="<?php echo $url; ?>/img/intersection/Screen-Shot-1.jpg">
            <img alt="Intersection 1 Screenshot" class="threecolumn" src="<?php echo $url; ?>/img/intersection/Screen-Shot-2.jpg">
            <img alt="Intersection 1 Screenshot" class="threecolumn finalblock" src="<?php echo $url; ?>/img/intersection/Screen-Shot-3.jpg">
        </div>
        <a class="visitsite" target="_blank" href="http://intersection.lisaot.to" alt="Process Blog">VISIT SITE<span class="icon-arrow"></span></a>
    
        

        <h5 class="no-margin">Project 2: Traffic Signals as Mediator</h5>
        <div class="clearfix">

            <img alt="Intersection 1 Screenshot" class="threecolumn" src="<?php echo $url; ?>/img/intersection/game.gif">
            
            <p class="threecolumn">The more I explored traffic signals, the more I began to understand their role in shaping our behavior as pedestrians and motorists. With the advent of the smart city, much ado is made about collecting data and refining traffic signals to respond to fluctuating traffic patterns. But I also wanted to explore the human side of traffic signals.</p>

            <p>The game sets up a prisoner’s dilemma-type scenario, where players must decide to move or stay based not only on what the signal tells them, but also on what they think their partner might do—reminding us that navigating the city is as much about our relationship with each other as with the technology (all while, hopefully, having fun!).</p>

            <h6>Game Play Phase I: Watch the Signals and Make a Choice</h6>
            <img alt="Intersection 1 Screenshot" class="threecolumn" src="<?php echo $url; ?>/img/intersection/phase1.jpg">
            <div class="clearfix">
                <img alt="Phase 1" class="halfcolumn" src="<?php echo $url; ?>/img/intersection/phase1-explanation.png">
                <img alt="Players place the phone on their foreheads" class="halfcolumn last" src="<?php echo $url; ?>/img/intersection/player.gif">
            </div>
            <p class="threecolumn "> Players are shown six signals that either tell them to wait or go. Players must decide to follow or ignore the signal.</p>
             <h6>Game Play Phase II: Assess the Choices and Move Again</h6>
            <img alt="Phase 2" class="threecolumn" src="<?php echo $url; ?>/img/intersection/phase2.jpg">
            <img alt="Points awarded chart" class="threecolumn " src="<?php echo $url; ?>/img/intersection/phase2-explanation.jpg">
            <p class="threecolumn finalblock">Players move their pieces based on whether they and their partner ignored or followed the signals in phase I.</p>
        </div>

  </div>

    <div class="bottom-navigation">
        <a class="backup"><span class="title">back up</span><span class="icon-arrow-box"></span></a>
        <div class="bar"></div>
    </div>


  


<?php include('../../includes/footer.php'); ?>
