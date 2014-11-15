<?php

$projects = array(
    'underdog' => array(
        'title' => 'Underdog',
        'subtitle' => 'User Onboarding',
        'show' => array('grad.lisaot.to')
    ),
    'zenoandroid' => array(
        'title' => 'ZenoRadio App',
        'subtitle' => 'Android App',
        'show' => array('grad.lisaot.to')
    ),
    'zenolive' => array(
        'title' => 'ZenoRadio Live',
        'subtitle' => 'Broadcaster Dashboard',
        'show' => array('grad.lisaot.to')
    ),
    'platform' => array(
        'title' => 'Platform',
        'subtitle' => 'Blog Integration',
        'show' => array('lisaot.to', 'grad.lisaot.to')
    ),
    'booksatwork' => array(
        'title' => 'Books@Work',
        'subtitle' => 'Website Redesign',
        'show' => array('lisaot.to', 'grad.lisaot.to')
    ),
    'lefkowitz' => array(
        'title' => 'David Lefkowitz',
        'subtitle' => 'Website Redesign',
        'show' => array('lisaot.to', 'grad.lisaot.to')
    ),
    'bandr' => array(
        'title' => 'B and R',
        'subtitle' => 'Website Redesign',
        'show' => array('lisaot.to')
    ),
    'parentalcontrols' => array(
        'title' => 'Parental Controls',
        'subtitle' => 'Website Redesign',
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
        'show' => array('lisaot.to')
    )
);

function console($msg) {
    echo '<script>console.log("' . $msg . '")</script>';
}

function get_next_slug($url, $slug) {

    global $projects;
    reset($projects);

    // sanitize slug
    $slug = str_replace('project/', '', $slug);

    // set the location
    $location = str_replace('http://', '', $url);

    // set pointer of $projects to this one
    while ( key($projects) !== $slug ) {
        $next = next($projects);
        if (!$next) break;
    }

    $next = next($projects);
    while ( $location !== 'localhost/portfolio' && !in_array($location, $next['show']) ) {
        $next = next($projects);
        if (!$next) break;
    }
    return $next ? key($projects) : false;
}

function get_prev_slug($url, $slug) {

    global $projects;
    reset($projects);

    // sanitize slug
    $slug = str_replace('project/', '', $slug);

    // set the location
    $location = str_replace('http://', '', $url);

    // set pointer of $projects to this one
    while ( key($projects) !== $slug ) {
        $next = next($projects);
        if (!$next) break;
    }

    $prev = prev($projects);
    while ( $location !== 'localhost/portfolio' && !in_array($location, $prev['show']) ) {
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
