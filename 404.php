<?php get_header(); ?>


<div class="col l8 s12">


    <div class="card-4 margin white">




    <div class="container">
        <h3><b><?php the_title(); ?></b></h3>
        <!-- <h5>Title description, <span class="opacity">1</span></h5> -->
    </div>

    <div class="container">


        It looks like nothing was found at this location. Maybe try a search?
        <!--
                                            <div class="row">
                                                <div class="col m8 s12">
                                                    <p>
                                                        <a href="" class="button padding-large white border"><b>READ MORE »</b>
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="col m4 hide-small">
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
