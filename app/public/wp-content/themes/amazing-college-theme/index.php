
<?php get_header() ?>

<?php
// function that calls header from header.php

// "have posts" is a special wordpress fuction
//  that checks if posts exist 
?>
    <?php while(have_posts()){

        // another WP Function
        the_post() ?>
        <!-- now in html mode then calling another WP function-->
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <p><?php the_content ?></p>
        <hr>
    <?php } 
?>


<?php get_footer() ?>