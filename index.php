<?php
$title = 'Lisa Otto';
include('includes/header.php');

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
        'title' => 'Teach Inctrl',
        'subtitle' => 'Website Redesign',
        'show' => array('lisaot.to')
    )
);

foreach ( $projects as $slug => $details ) {
    $location = str_replace('http://', '', $url);
    if ( $url === 'http://localhost/portfolio' || in_array($location, $details['show']) ) {
    ?>
    <a href="<?= $url; ?>/project/<?= $slug; ?>" class="project-sample">
        <div class="overlay">
            <div>
                <div class="hgroup">
                    <h2><?= $details['title']; ?></h2>
                    <h3><?= $details['subtitle']; ?></h3>
                </div>
            </div>
            <div><p class="icon-arrow-box"></p></div>
        </div>
    </a>
    <?php 
    }
} ?>

<?php include('includes/footer.php'); ?>
