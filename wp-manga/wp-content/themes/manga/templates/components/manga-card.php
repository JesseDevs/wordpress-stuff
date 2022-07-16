<?php
$title = get_field('title');
$release = get_field('release_date');
$cover = get_field('cover');

$portrait = get_field('portrait');

if ($portrait) {
    $portrait = $portrait['url'];
} else {
    $portrait = $cover;
}

?>

<manga-card>
    <h2 class='name attention-voice'><?= $title ?></h2>
    <h3>Release Date: <?= $release ?></h3>
    <a href="<?= the_permalink(); ?>"> Read More</a>
    <picture class='portrait' style='background-image: url(<?= $portrait; ?>)'>
        <!-- <img src="<?= $portrait; ?>" alt=""> -->
    </picture>



    <?php

    $featured_posts = get_field('author');
    if ($featured_posts) : ?>

        <?php foreach ($featured_posts as $post) :

            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); ?>
            <a href="<?php the_permalink(); ?>"><span>Author: <?php the_field('name'); ?></span></a>

        <?php endforeach; ?>
        <?php
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
    <?php endif; ?>



</manga-card>