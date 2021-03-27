<?php
/*
Template Name: Shop
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>

<main>
    <section>
        <h2>Assortiment</h2>
        <?php echo do_shortcode("[products]"); ?>
    </section>
</main>

<?php get_template_part( 'template-parts/layout/footer');?>
