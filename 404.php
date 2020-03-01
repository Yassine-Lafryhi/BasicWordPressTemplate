<?php get_header(); ?>


<div class="w3-w3-col l8 s12">


    <div class="w3-card-4 w3-margin white">




    <div class="w3-container">
        <h3><b><?php the_title(); ?></b></h3>
        <!-- <h5>Title description, <span class="opacity">1</span></h5> -->
    </div>

    <div class="w3-container">


        It looks like nothing was found at this location. Maybe try a search?
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
