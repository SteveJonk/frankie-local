<?php

function theme_sidebars()
{
    register_sidebar(array(
        'name' => 'Menu',
        'id' => 'menu',
        'description' => 'Deze sidebar zal worden getoond in het uitklapbare menu',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar(array(
        'name' => 'Menu knop',
        'id' => 'menu-button',
        'description' => 'Deze sidebar zal worden getoond naast de menu knop',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar(array(
        'name' => 'Footer',
        'id' => 'footer',
        'description' => 'Deze sidebar zal worden getoond in de footer',
        'before_widget' => '',
        'after_widget' => '',
    ));
}

add_action('widgets_init', 'theme_sidebars');
