<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo wp_get_document_title(); ?></title>
    <meta name='description' content="Manga">
    <meta property="og:image" content="https://peprojects.dev/alpha-4/jesse/projects/php-crud/images/streetfighter-metadata.jpeg">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class='site-header'>
        <inner-column>

            <h1>Header</h1>
            <?php include('templates/components/site-menu.php'); ?>
        </inner-column>
    </header>

    <main class='page-content'>