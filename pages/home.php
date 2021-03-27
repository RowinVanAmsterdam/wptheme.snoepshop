<?php
/*
Template Name: Home
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>
<main>
    <section>
        <h2>Ontdek onze nieuwste lekkernijen</h2>
        <?php echo do_shortcode('[recent_products]');?>
    </section>

    <section>
        <h2>Bekijk ons assortiment</h2>
        <?php echo do_shortcode('[product_categories]');?>
    </section>
</main>
<?php get_template_part( 'template-parts/layout/footer');?>
