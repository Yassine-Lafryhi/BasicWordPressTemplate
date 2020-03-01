<?php get_header(); ?>


    <div class="w3-col l8 s12">


        <div class="w3-card-4 w3-margin w3-white">

            <?php if (has_post_thumbnail($post->ID)): ?>
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

            <img src="<?php echo $image[0]; ?>" alt="Nature" style="width:100%">

        </div>
        <?php endif; ?>


        <div class="w3-container">
            <h3><b><?php the_title(); ?></b></h3>
            <!-- <h5>Title description, <span class="opacity">1</span></h5> -->
        </div>

        <div class="w3-container">


            <?php echo get_post_field('post_content', the_ID()); ?>
            <!--
                                            <div class="w3-row">
                                                <div class="w3-col m8 s12">
                                                    <p>
                                                        <a href="" class="w3-button padding-large white border"><b>READ MORE »</b>
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="w3-col m4 hide-small">
                                                    <p><span class="padding-large right"><b>Comments &nbsp;</b> <span class="tag"><?php echo get_comments_number(); ?></span></span></p>
                                                </div>
                                            </div>
                                            -->
        </div>
    </div>
    <hr>


<?php comments_template(); ?>


    </div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
