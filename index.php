<?php
$title = 'Lisa Otto';
$scroll = 'false';
include('includes/header.php');

foreach ( $projects as $slug => $details ) {

    if ( $location === 'staging' || in_array($location, $details['show']) ) {
    ?>
    <a href="<?= $url; ?>/project/<?= $slug; ?>" class="project-sample">
        <div class="overlay">
            <div>
                <div class="hgroup">
                    <h2><?= $details['title']; ?></h2>
                    <h3><?= $details['description']; ?></h3>
                </div>
            </div>
            <div><p class="icon-arrow-box"></p></div>
        </div>
    </a>
    <?php
    }
} ?>

<?php include('includes/footer.php'); ?>
