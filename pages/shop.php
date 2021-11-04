<?php
/*
Template Name: Shop
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>

<main>
    <section>
        <h2>Assortimeneett</h2>
        <?php echo do_shortcode("[products]"); ?>
        <h1>hello</h1>
    </section>
</main>

<?php get_template_part( 'template-parts/layout/footer');?>
