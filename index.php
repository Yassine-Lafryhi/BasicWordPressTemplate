<?php get_header(); ?>


<div class="w3-col l8 s12">


    <?php
    $args = array(
        'post_type' => 'post',
        'orderby' => 'ID',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => -1 // this will retrive all the post that is published
    );
    $result = new WP_Query($args);
    if ($result->have_posts()) : ?>
    <?php while ($result->have_posts()) :
    $result->the_post(); ?>


    <div class="w3-card-4 w3-margin w3-white">

        <?php if (has_post_thumbnail($post->ID)): ?>
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

        <img src="<?php echo $image[0]; ?>" alt="Nature" style="width:100%">

    </div>
<?php endif; ?>


    <div class="w3-container">
        <h3><b><?php the_title(); ?></b></h3>
        <?php $postcat = get_the_category($post->ID);


        ?>
        <h5>Written by <span class="opacity"><?php echo get_the_author() ?> </span> at <span
                    class="opacity"><?php echo get_the_date('Y-m-d'); ?> , <?php the_time('H:i:s'); ?></span>
            in <?php if (!empty($postcat)) {
                echo esc_html($postcat[0]->name);
            } ?></h5>
    </div>

    <div class="w3-container">
        <?php the_excerpt(); ?>
        <div class="w3-row">
            <div class="w3-col m8 s12">
                <p>
                    <a href="<?php the_permalink(); ?>" class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b>
                    </a>
                </p>
            </div>
            <div class="w3-col m4 hide-small">
                <p><span class="padding-large w3-right"><b>Comments &nbsp;</b> <span
                                class="w3-tag"><?php echo get_comments_number(); ?></span></span></p>
            </div>
        </div>
    </div>
</div>
<hr>


<?php endwhile; ?>
<?php endif;
wp_reset_postdata(); ?>


</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
        
