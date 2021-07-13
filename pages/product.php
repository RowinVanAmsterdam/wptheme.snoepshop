<?php
/*
Template Name: Product
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>

<main>
    <section>
        <?php echo do_shortcode("[product]"); ?>
    </section>
</main>

<?php get_template_part( 'template-parts/layout/footer');?>
