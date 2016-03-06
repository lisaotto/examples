<?php

$tags = array(
    'design research',
    'user experience',
    'experimental',

);

$projects = array(
    'bus' => array(
        'title' => 'At the Bus Stop',
        'subtitle' => 'Research &amp Design Proposal',
        'show' => array('lisaot.to'),
        'img' => 'home-bus.jpg',
        'tags' => array('design research')
    ),
    '311' => array(
        'title' => 'A New 311',
        'subtitle' => 'Design Proposal',
        'show' => array('lisaot.to'),
        'img' => 'home-311.jpg',
        'tags' => array('user experience')
    ),

    'intersection' => array(
        'title' => 'Intersections',
        'subtitle' => 'Conceptual Design Explorations',
        'show' => array('grad.lisaot.to'),
        'img' => 'home-game.jpg',
        'tags' => array('experimental')
    ),
    'underdog' => array(
        'title' => 'Underdog',
        'subtitle' => 'User Onboarding',
        'show' => array('grad.lisaot.to'),
        'img' => 'underdog/underdog-header.jpg',
        'tags' => array('user experience')
    ),
    'zenoandroid' => array(
        'title' => 'ZenoRadio App',
        'subtitle' => 'Android App',
        'description' => 'An Android app for radio listening and call-ins developed to ease users into the concept that you dont need to <i>call</i> in to engage.',
        'show' => array('lisaot.to'),
        'img' => 'home-zeno-app.jpg',
        'tags' => array('user experience', 'research')
    ),
    'zenolive' => array(
        'title' => 'ZenoRadio Live',
        'subtitle' => 'Broadcaster Dashboard',
        'description' => 'ZenoRadios broadcaster dashboard provides tools for individual broadcasters to host radio talk programs with callers from a variety of media (online widgets and telephone calling).',
        'show' => array('lisaot.to'),
        'img' => 'home-zenoweb.jpg',
        'tags' => array('user experience', 'research')
    ),

    'booksatwork' => array(
        'title' => 'Books@Work',
        'subtitle' => 'Website Redesign',
        'show' => array('grad.lisaot.to'),
        'img' => 'booksatwork/header_booksatwork.png',
        'tags' => array('user experience')
    ),

    'lefkowitz' => array(
        'title' => 'David Lefkowitz',
        'subtitle' => 'Website Redesign',
        'show' => array('grad.lisaot.to'),
        'img' => 'lefkowitz/lefko-header.jpg',
        'tags' => array('user experience')
    ),
    'reading' => array(
        'title' => 'Immersive Reading',
        'subtitle' => 'Design Proposal',
        'show' => array('lisaot.to'),
        'img' => 'home-reading.jpg',
        'tags' => array('experimental')
    ),
    'platform' => array(
        'title' => 'Platform',
        'subtitle' => 'Blog Integration',
         'description' => 'Blog redesign ',
        'show' => array('lisaot.to'),
        'img' => 'home-platform.jpg',
        'tags' => array('user experience')
    ),
    'infographics' => array(
        'title' => 'Illustrated Infographics',
        'subtitle' => 'Design &amp; Illustration',
        'show' => array('grad.lisaot.to'),
        'img' => 'infographics/header-infographics.png',
        'tags' => array('illustration')
    )
);

function console($msg) {
    echo '<script>console.log("' . $msg . '")</script>';
}

function get_next_slug($url, $slug) {

    global $projects;
    global $location;

    reset($projects);

    // sanitize slug
    $slug = str_replace('project/', '', $slug);

    // set pointer of $projects to this one
    while ( key($projects) != $slug ) {
        $next = next($projects);
        if (!$next) break;
    }

    $next = next($projects);
    while ( $location != 'staging' && !in_array($location, $next['show']) ) {
        $next = next($projects);
        if (!$next) break;
    }

    return $next ? key($projects) : false;
}

function get_prev_slug($url, $slug) {

    global $projects;
    global $location;

    reset($projects);

    // sanitize slug
    $slug = str_replace('project/', '', $slug);

    // set pointer of $projects to this one
    while ( key($projects) != $slug ) {
        $next = next($projects);
        if (!$next) break;
    }

    $prev = prev($projects);
    while ( $location != 'staging' && !in_array($location, $prev['show']) ) {
        $prev = prev($projects);
        if (!$prev) break;
    }

    return $prev ? key($projects) : false;
}

function the_navigation($url, $slug) { ?>
    <div class="navigation">

        <?php $prev = get_prev_slug($url, $slug); ?>
        <?php $next = get_next_slug($url, $slug); ?>

        <?php if ($prev) { ?>
            <a class="back" href="<?= $url; ?>/project/<?= $prev; ?>">
                <div>
                    <span class="icon-arrow-box"></span>
                    <span class="title">last</span>
                    <span class="hide-small">project</span>
                </div>
            </a>
        <?php }
        if ($next) { ?>
        <a class="next" href="<?= $url; ?>/project/<?= $next; ?>">
            <div class="internal-project-nav">
                <span class="title">next</span>
                <span class="hide-small">project</span>
                <span class="icon-arrow-box"></span>
            </div>
        </a>
        <?php } ?>
        <div class="bar"></div>
    </div>
    <?php
}
