<?php
/*
Template Name: Cart
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>

<main>
    <section>
        <?php echo do_shortcode("[woocommerce_cart]"); ?>
    </section>
</main>

<?php get_template_part( 'template-parts/layout/footer');?>
