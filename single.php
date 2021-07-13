<?php
/*
Template Name: Shop
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>

<main>
    <section>
        <h2>product</h2>
        <?php echo do_shortcode("[product_page]"); ?>
    </section>
</main>

<?php get_template_part( 'template-parts/layout/footer');?>
