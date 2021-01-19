<?php
/*
Web Rocket Theme default Page.
*/
?>
<?php get_header(); ?>

<div class="container my-4">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile;  ?>
    <?php else : ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>