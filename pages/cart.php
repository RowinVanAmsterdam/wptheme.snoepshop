<?php
/*
Template Name: Cart
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>
<main class="cart">
  <div class="o__breadcrumb container container--small"><?php woocommerce_breadcrumb();?></div>

    <h1 class="o__heading container container--small">Winkelwagen</h1>

  <section class="container container--small">
    <?php echo do_shortcode("[woocommerce_cart]"); ?>
    <!-- <?php echo do_shortcode("[recently_viewed_products]"); ?> -->
  </section>
</main>

<?php get_template_part( 'template-parts/layout/footer');?>