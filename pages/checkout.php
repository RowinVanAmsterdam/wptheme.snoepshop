<?php
/*
Template Name: Checkout
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>


<main class="checkout-page">
<div class="o__breadcrumb container container--small"><?php woocommerce_breadcrumb();?></div>
<h1 class="o__heading container container--small">Gegevens en betaling</h1>

    <section class="container container--small">
        <?php echo do_shortcode("[woocommerce_checkout]"); ?>
    </section>
</main>

<?php get_template_part( 'template-parts/layout/footer');?>
