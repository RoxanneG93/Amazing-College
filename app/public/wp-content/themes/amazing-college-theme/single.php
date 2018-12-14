<?php get_header() ?>

<?php 
// "have posts" is a special wordpress fuction
//  that checks if posts exist
    while(have_posts()){

        // another WP Function
        the_post() ?>
        <!-- now in html mode then calling another WP function-->
        <h2><?php the_title(); ?></h2>
        <p><?php the_content() ?></p>
    <?php }
?>

<?php get_footer() ?>