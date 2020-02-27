<div class="w3-col l4">
    <div class="card margin margin-top">
        <img src="http://localhost/wordpress/wp-content/themes/Qalab/img/avatar_g.jpg" style="width:100%">
        <div class="container white">
            <h4><b>My Name</b></h4>
            <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a
                interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
        </div>
    </div>
    <hr>

    <div class="card margin">
        <div class="container padding">
            <h4>Last Posts</h4>
        </div>
        <ul class="ul hoverable white">


            <?php
            $i = 0;
            $args = array(
                'post_type' => 'post',
                'orderby' => 'ID',
                'post_status' => 'publish',
                'order' => 'DESC',
                'posts_per_page' => -1 // this will retrive all the post that is published
            );
            $result = new WP_Query($args);
            if ($result->have_posts()) :
                while ($result->have_posts()) :
                    $result->the_post();

                    if ($i < 4) {
                    ?>
                    <li class="padding-16">
                        <img src="http://localhost/wordpress/wp-content/themes/Qalab/img/workshop.jpg" alt="Image"
                             class="left margin-right" style="width:50px">
                        <span class="large"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span><br>
                        <span>1</span>
                    </li>

                    <li>
                    </li>


                    <?php
                }
                    $i += 1;
                endwhile; endif;
            wp_reset_query();
            ?>


        </ul>
    </div>
    <hr>

    <div class="card margin">
        <div class="container padding">
            <h4>Tags</h4>
        </div>
        <div class="container white">
            <p><span class="tag black margin-bottom">Travel</span>

                <span class="tag light-grey small margin-bottom">New York</span>


            </p>
        </div>
    </div>

    <!-- END Introduction Menu -->
</div>