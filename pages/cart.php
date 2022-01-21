<?php
/*
Template Name: Cart
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>

<main class="cart">

    <h1 class="cart__heading">Winkelwagen</h1>

  <section class="container">
    <?php echo do_shortcode("[woocommerce_cart]"); ?>
    <!-- <?php echo do_shortcode("[recently_viewed_products]"); ?> -->
  </section>
</main>

<?php get_template_part( 'template-parts/layout/footer');?>