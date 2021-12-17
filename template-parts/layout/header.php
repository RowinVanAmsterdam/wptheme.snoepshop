<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
    <div class="hidden"><?php get_template_part('/assets/images/icon-sprite.svg'); ?></div>
</head>

<?php 
    $args = array(
        'taxonomy'   => "product_cat",
        // 'number'     => $number,
        // 'orderby'    => $orderby,
        'order'      => $order,
        // 'hide_empty' => $hide_empty,
        // 'include'    => $ids
    );
    $product_categories = get_terms($args);
?>


<body <?php body_class('');?>>
    <header class="header">
        <div class="header-main container">
            <a href="/" class="header-main__logo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/snoepshop-logo.svg"
                    alt="Snoepshop logo">
            </a>
            <nav class="header-main__nav">
                <ul class="header-main__nav-list">
                    <li class="header-main__nav-list-item">
                        <a href="/mijn-account" class="header-main__link link">
                            <svg class="icon">
                                <use href="#icon-user" />
                            </svg>
                            <span class="header-main__label">Mijn account</span>
                        </a>
                    </li>
                    <li class="header-main__nav-list-item">
                        <a href="/winkelmand" class="header-main__link link">
                            <svg class="icon">
                                <use href="#icon-shopping-bag" />
                            </svg>
                            <span class="header-main__label">Winkelmand</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <hr class="divider">
        <div class="header-sub container">
            <ul class="category-list">
                <?php 
                        foreach( $product_categories as $category ) { 
                            echo '<li class="category-list-item"><a href="'.get_term_link($category).'" class="link">'.$category->name.'</a></li>';
                        }
                    ?>
            </ul>
        </div>
    </header>