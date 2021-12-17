<?php
/*
Template Name: Single
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>

<main class="single-product">
    <div>
        <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        <?php wc_get_template_part( 'content', 'single-product' ); ?>
        <?php endwhile; // end of the loop. ?>
    </div>
</main>

<?php get_template_part( 'template-parts/layout/footer');?>