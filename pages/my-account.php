<?php
/*
Template Name: My-account
*/
?>

<?php get_template_part( 'template-parts/layout/header');?>

<main>
    <section class="my-account">
        <?php echo do_shortcode("[woocommerce_my_account]"); ?>
    </section>
</main>

<?php get_template_part( 'template-parts/layout/footer');?>
