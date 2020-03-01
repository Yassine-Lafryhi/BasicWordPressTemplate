<div class="w3-col l4">
    <div class="w3-card w3-margin w3-margin-top">
        <div class="w3-container w3-white">
            <h4><b>My Name</b></h4>
            <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a
                interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
        </div>
    </div>
    <hr>

    <div class="w3-card w3-margin">
        <div class="w3-container w3-padding">
            <h4>Last Posts</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">


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
                    <li class="w3-padding-16">
                        <span class="w3-large"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span><br>
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

    <div class="w3-card w3-margin">
        <div class="w3-container w3-padding">
            <h4>Tags</h4>
        </div>
        <div class="w3-container w3-white">
            <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span>

                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span>


            </p>
        </div>
    </div>

    <!-- END Introduction Menu -->
</div>