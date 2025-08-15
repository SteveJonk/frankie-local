<?php

function theme_customize_register($wp_customize)
{
    $wp_customize->add_section('theme_colors', array(
        'title'    => __('Kleuren', 'frankie-local'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('theme_light_blue', array(
        'default'   => '#76B9F0',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('theme_light_blue_2', array(
        'default'   => '#5F9AC6',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('theme_brown', array(
        'default'   => '#DDAA52',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('theme_red', array(
        'default'   => '#FF1616',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('theme_common_black', array(
        'default'   => '#0b0000',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('theme_dark_grey', array(
        'default'   => '#212121',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_primary_color', array(
        'label'    => __('Blauw', 'frankie-local'),
        'section'  => 'theme_colors',
        'settings' => 'theme_light_blue',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_secondary_color', array(
        'label'    => __('Blauw 2', 'frankie-local'),
        'section'  => 'theme_colors',
        'settings' => 'theme_light_blue_2',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_brown', array(
        'label'    => __('Bruin', 'frankie-local'),
        'section'  => 'theme_colors',
        'settings' => 'theme_brown',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_red', array(
        'label'    => __('Rood', 'frankie-local'),
        'section'  => 'theme_colors',
        'settings' => 'theme_red',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_common_black', array(
        'label'    => __('Zwart', 'frankie-local'),
        'section'  => 'theme_colors',
        'settings' => 'theme_common_black',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'theme_dark_grey', array(
        'label'    => __('Donkergrijs', 'frankie-local'),
        'section'  => 'theme_colors',
        'settings' => 'theme_dark_grey',
    )));
}
add_action('customize_register', 'theme_customize_register');

// Add changes to theme.json file
function filter_theme_json_theme($theme_json)
{
    $data = $theme_json->get_data();
    $existingPalette = $data['settings']['color']['palette']['theme'];

    $newPalette = array(
        array(
            'slug'  => 'light-blue',
            'color' => get_theme_mod('theme_light_blue', '#76B9F0'),
            'name'  => __('Light Blue', 'frankie-local'),
        ),
        array(
            'slug'  => 'light-blue-2',
            'color' => get_theme_mod('theme_light_blue_2', '#5F9AC6'),
            'name'  => __('Light Blue 2', 'frankie-local'),
        ),
        array(
            'slug'  => 'brown',
            'color' => get_theme_mod('theme_brown', '#DDAA52'),
            'name'  => __('Brown', 'frankie-local'),
        ),
        array(
            'slug'  => 'red',
            'color' => get_theme_mod('theme_red', '#FF1616'),
            'name'  => __('Red', 'frankie-local'),
        ),
        array(
            'slug'  => 'common-black',
            'color' => get_theme_mod('theme_common_black', '#0b0000'),
            'name'  => __('Common Black', 'frankie-local'),
        ),
        array(
            'slug'  => 'dark-grey',
            'color' => get_theme_mod('theme_dark_grey', '#212121'),
            'name'  => __('Dark Grey', 'frankie-local'),
        ),

    );

    $bySlug = [];

    foreach ($existingPalette as $item) {
        $bySlug[$item['slug']] = $item;
    }

    foreach ($newPalette as $item) {
        $bySlug[$item['slug']] = $item;
    }

    $combinedPalette = array_values($bySlug);

    $new_data = array(
        'version'  => 3,
        'settings' => array(
            'color' => array(
                'palette'    => $combinedPalette,
            ),
        ),
    );

    return $theme_json->update_with($new_data);
}

add_filter('wp_theme_json_data_theme', 'filter_theme_json_theme');

// For dynamic CSS, to show in customizer preview
function mytheme_customize_css()
{
?>
    <style type="text/css">
        :root {
            --wp--preset--color--primary: <?php echo get_theme_mod('theme_primary_color', '#0073aa');
                                            ?>;
            --wp--preset--color--secondary: <?php echo get_theme_mod('theme_secondary_color', '#CCE6E6');
                                            ?>;
        }
    </style>
<?php
}
add_action('wp_head', 'mytheme_customize_css');
