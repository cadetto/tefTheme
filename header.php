<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tef Venezuela</title>
    <?php wp_head() ?>
</head>


<div class="page-container">
    <div>
    <div class="main-nav">
        <?php echo get_custom_logo(); ?>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'tef-custom-menu',
            'container_class' => 'custom-menu' ) );

        ?>
        <div class="bars">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </div>

