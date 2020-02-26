How to create a WordPress template :

Basically, WordPress needs only 2 files : style.css and index.php. But for a complete template, you will need 5 files, as follows :
- header.php – contains the code for the header section of the theme.
- index.php – contains the code for the Main Area and will specify where the other files will be included. This is the main file of the theme.
- sidebar.php – contains the information about the sidebar.
- footer.php – handles the footer section.
- style.css – responsible for the styling of your theme.
- bootstrap.css – no separate CSS code is required; highly responsive.
- bootstrap.js – provides its own js for the navigation bar, or tabs, etc.
- You need to download the Bootstrap package. Bootstrap.js & Bootstrap.cs file needs to be copied to the theme folder.



<?php bloginfo('stylesheet_url'); ?>

<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js'; ?>


<?php get_header(); ?>




<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
</div>
<?php endwhile; else: ?>







<?php get_sidebar(); ?>


Sidebar.php :
<div id="ttr_sidebar" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<h2 ><?php _e('Categories'); ?></h2>
<ul > <?php wp_list_cats('sort_column=namonthly'); ?> </ul>
<h2 ><?php _e('Archives'); ?></h2>
<ul > <?php wp_get_archives(); ?> </ul>
</div>





<?php get_footer(); ?>