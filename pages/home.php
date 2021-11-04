<?php
/*
Template Name: Home
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>
<main id="home">
    <section class="container">
        <h2 class="section-title">Ontdek onze nieuwste lekkernijen</h2>
        <?php echo do_shortcode('[recent_products]');?>
    </section>

    <section class="container">
        <h2 class="section-title">Bekijk ons assortiment</h2>
        <?php echo do_shortcode('[product_categories]');?>
    </section>
</main>

<?php get_template_part( 'template-parts/layout/footer');?>