<?php
$title = 'Lisa Otto';
include('includes/header.php');

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
