<header class='manga-header'>
    <inner-column>

        <h1 class="loud-voice">Manga List</h1>

    </inner-column>
</header>

<section>
    <inner-column>
        <ul class='manga-list'>
            <?php
            $args = array(
                'post_type' => 'manga',
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                echo "<li class='manga'>";

                include(getFile('templates/components/manga-card.php'));

                echo "</li>";
            endwhile;

            wp_reset_postdata();
            ?>
        </ul>
    </inner-column>
</section>