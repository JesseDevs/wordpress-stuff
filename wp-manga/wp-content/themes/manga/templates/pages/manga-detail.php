<?php
$title = get_field('title');
$release = get_field('release_date');
$cover = get_field('cover');
$secret = get_field('secret');

$portrait = get_field('portrait');

if ($portrait) {
    $portrait = $portrait['url'];
} else {
    $portrait = $cover;
}

?>

<!-- <header>
    <inner-column>

≈

    </inner-column>
</header> -->

<section class="page-section manga-overview">
    <inner-column>
        <picture class='portrait'>
            <img src="<?= $portrait ?>" alt="">
        </picture>
        <text-content>
            <h1 class="loud-voice"><?php the_field('title'); ?></h1>
            <h2>Detials</h2>

            <ul>
                <?php if ($release) { ?>
                    <li>
                        <span class='label'>Initial Release Date: <?= $release ?></span>
                    </li>

                <?php } ?>

                <?php if (is_user_logged_in() && $secret) { ?>
                    <li>
                        <span class='label'>Facts: <?= $secret ?></span>
                    </li>
                <?php } ?>
            </ul>
        </text-content>

    </inner-column>
</section>