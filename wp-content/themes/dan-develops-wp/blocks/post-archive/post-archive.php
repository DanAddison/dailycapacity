<div class="block-post-archive">
    
    <?php
    $post_type  = get_field( 'post_type' );
    $post_count = get_field( 'number_of_posts' );

    // WP_Query arguments
    $args = array(
        'post_type'      => $post_type,
        'posts_per_page' => $post_count,
    );

    // The Query
    $post_archive_query = new WP_Query( $args );

    // The Loop
    while ( $post_archive_query->have_posts() ) {
        $post_archive_query->the_post();
            $post_id = get_the_ID();
        ?>

        <div class="post-preview post-preview--<?php echo $post_type; ?>">
            <a href="<?php the_permalink(); ?>" class="post-preview__link">
                <h3><?php the_title(); ?></h3>
                <p><?php echo da_get_excerpt($post_id, 20); ?></p>
            </a>
        </div>

        <?php
    }

    // Restore original Post Data
    wp_reset_postdata();
    ?>

</div>