<?php
$name = get_field('name');
$birth = get_field('birth_date');
$origin = get_field('origin');
$secret = get_field('secret');

$portrait = get_field('portrait');

if ($portrait) {
    $portrait = $portrait['url'];
}

?>

<author-card>
    <h2 class='name attention-voice'><?= $name ?></h2>
    <h3>Birth Date: <?= $birth ?></h3>
    <h3>Place of Origin: <?= $origin ?></h3>

    <picture class='portrait' style='background-image: url(<?= $portrait; ?>)'>
        <!-- <img src="<?= $portrait; ?>" alt=""> -->
    </picture>
    <a href="<?= the_permalink(); ?>"> Read More</a>


</author-card>