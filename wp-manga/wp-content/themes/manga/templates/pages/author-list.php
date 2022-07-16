<header class='author-header'>
    <inner-column>

        <h1 class="loud-voice">Author List</h1>

    </inner-column>
</header>

<section class='page-section'>
    <inner-column>
        <ul class='author-list'>
            <?php
            $args = array(
                'post_type' => 'manga_author',
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                echo "<li class='author'>";

                include(getFile('templates/components/author-card.php'));

                echo "</li>";
            endwhile;

            wp_reset_postdata();
            ?>

        </ul>
    </inner-column>
</section>