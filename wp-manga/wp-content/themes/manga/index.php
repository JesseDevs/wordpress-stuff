<?php get_header(); ?>


<?php

if (is_page('home')) {
    include('templates/pages/home.php');
}

if (is_page('list')) {
    include('templates/pages/manga-list.php');
}

if (is_singular('manga')) {
    include('templates/pages/manga-detail.php');
}

if (is_page('authors')) {
    include('templates/pages/author-list.php');
}

if (is_singular('manga_author')) {
    include('templates/pages/author-detail.php');
}

if (is_404()) {
    include('templates/pages/page-not-found.php');
}


?>

<?php get_footer(); ?>