<?php

$projects = array(
    'Bus' => array(
        'title' => 'At the Bus Stop',
        'subtitle' => 'Research &amp Design Proposal',
        'show' => array('lisaot.to', 'grad.lisaot.to')
    ),
    '311' => array(
        'title' => 'A New 311',
        'subtitle' => 'Speculative Redesign',
        'show' => array('lisaot.to', 'grad.lisaot.to')
    ),
    'underdog' => array(
        'title' => 'Underdog',
        'subtitle' => 'User Onboarding',
        'show' => array('grad.lisaot.to')
    ),
    'zenoandroid' => array(
        'title' => 'ZenoRadio App',
        'subtitle' => 'Android App',
        'description' => 'An Android app for radio listening and call-ins developed to ease users into the concept that you dont need to <i>call</i> in to engage.',
        'show' => array('lisaot.to', 'grad.lisaot.to')
    ),
    'zenolive' => array(
        'title' => 'ZenoRadio Live',
        'subtitle' => 'Broadcaster Dashboard',
        'description' => 'ZenoRadios broadcaster dashboard provides tools for individual broadcasters to host radio talk programs with callers from a variety of media (online widgets and telephone calling).',
        'show' => array('lisaot.to', 'grad.lisaot.to')
    ),

    'booksatwork' => array(
        'title' => 'Books@Work',
        'subtitle' => 'Website Redesign',
        'show' => array('lisaot.to', 'grad.lisaot.to')
    ),
    'platform' => array(
        'title' => 'Platform',
        'subtitle' => 'Blog Integration',
         'description' => 'Blog redesign ',
        'show' => array('lisaot.to', 'grad.lisaot.to')
    ),
    'lefkowitz' => array(
        'title' => 'David Lefkowitz',
        'subtitle' => 'Website Redesign',
        'show' => array('grad.lisaot.to')
    ),
    'bandr' => array(
        'title' => 'B and R',
        'subtitle' => 'Website Redesign',
        'show' => array('')
    ),
    'parentalcontrols' => array(
        'title' => 'Parental Controls',
        'subtitle' => 'Website Redesign',
        'show' => array('')
    ),
    'intersection' => array(
        'title' => 'Pittsburgh Intersections',
        'subtitle' => 'Conceptual Design Explorations',
        'show' => array('lisaot.to')
    ),
    'infographics' => array(
        'title' => 'Illustrated Infographics',
        'subtitle' => 'Design &amp; Illustration',
        'show' => array('lisaot.to', 'grad.lisaot.to')
    ),
    'inctrl' => array(
        'title' => 'Teach InCtrl',
        'subtitle' => 'Website Redesign',
        'show' => array('')
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
