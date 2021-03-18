<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>

<body <?php body_class('test');?>>

    <header class="header">
        <div class="header__container container">
            <div class="header__logo">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/logos/snoepshop-logo.svg"
                    alt="Snoepshop logo">
            </div>
            <!-- <div>
                <?php wp_nav_menu(array('theme-location' => 'main-menu'));?>
            </div> -->
            <nav>
                <ul>
                    <li>Account</li>
                    <li>Winkelwagen</li>
                </ul>
            </nav>
        </div>
    </header>