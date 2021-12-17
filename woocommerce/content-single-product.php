<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

  <section class="product-information container container-1200">
    <?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

    <div class="summary entry-summary">
      <?php echo apply_filters( 'woocommerce_sale_flash', '<span class="badge__onsale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span>', $post, $product ); ?>
      <div class="woocommerce-products-header__breadcrumb-container"><?php woocommerce_breadcrumb();?></div>

      <?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>

      <ul class="usp-list">
        <li class="usp-list-item">
          <svg class="icon__svg">
            <use href="#icon-check-in-circle" />
          </svg>
          Gratis verzending
        </li>
        <li class="usp-list-item">
          <svg class="icon__svg">
            <use href="#icon-check-in-circle" />
          </svg>
          30 dagen bedenktijd en gratis retourneren
        </li>
        <li class="usp-list-item">
          <svg class="icon__svg">
            <use href="#icon-check-in-circle" />
          </svg>
          Voor 17:00 uur besteld, volgende dag in huis
        </li>
      </ul>
      <hr class="divider">
      <?php wc_get_template( 'single-product/meta.php' );?>
    </div>
  </section>

  <section class="additional-information">
    <div class="product-info-banner"><?php the_title( '<h1 class="product_title entry-title">', '</h1>' );?></div>
    <div class=" container container-1200">
      <?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
    </div>
  </section>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>