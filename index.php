
<?php
$title = 'Lisa Otto';
$scroll = 'false';

include('includes/header.php');

?>
 <div class="home-container outerpadding clearfix">

<ul id="tags">
    <?php foreach ( $tags as $tag ) { ?>
        <li><?= $tag; ?></li>
    <?php } ?>
</ul>


<?php



foreach ( $projects as $slug => $details ) {

    if ( $location === 'staging' || in_array($location, $details['show']) ) {

    $tags = implode(',', $details['tags']);
    ?>
    <a href="<?= $url; ?>/project/<?= $slug; ?>" class="project-sample" data-tags="<?= $tags; ?>">
        <div class="bgimg" style="background-image:url(<?= $url; ?>/img/<?= $details['img']; ?>)"></div>
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

