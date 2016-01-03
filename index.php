
<?php
$title = 'Lisa Otto';
$scroll = 'false';

include('includes/header.php');

?>
 <div class="home-container outerpadding">

 <ul>
    <li>research</li>
    <li>digital</li>
    <li>exploratory</li>
    <li>illustration</li>
</ul>


<?php



foreach ( $projects as $slug => $details ) {

    if ( $location === 'staging' || in_array($location, $details['show']) ) {
    ?>
    <a href="<?= $url; ?>/project/<?= $slug; ?>" class="project-sample">
        <div class="overlay">
            <div>
                <div class="hgroup">
                    <h2><?= $details['title']; ?></h2>
                    <h3><?= $details['subtitle']; ?></h3>
                </div>
            </div>
        </div>
    </a>
    <?php
    }
} ?>

</div>

<?php include('includes/footer.php'); ?>

