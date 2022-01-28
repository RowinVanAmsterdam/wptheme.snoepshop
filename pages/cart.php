<?php
/*
Template Name: Cart
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>
<main class="cart">
  <div class="container container--small"><?php woocommerce_breadcrumb();?></div>

    <h1 class="cart__heading">Winkelwagen</h1>

  <section class="container container--small">
    <?php echo do_shortcode("[woocommerce_cart]"); ?>
    <!-- <?php echo do_shortcode("[recently_viewed_products]"); ?> -->
  </section>
</main>

<?php get_template_part( 'template-parts/layout/footer');?>