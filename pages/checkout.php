<?php
/*
Template Name: Checkout
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>


<main>
    <section>
        <?php echo do_shortcode("[woocommerce_checkout]"); ?>
    </section>
</main>

<?php get_template_part( 'template-parts/layout/footer');?>
