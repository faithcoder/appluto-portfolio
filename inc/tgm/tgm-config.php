<?php
/**
 * TGMPA plugin registration.
 *
 * @package appluto-portfolio
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('tgmpa_register', 'appluto_register_required_plugins');

/**
 * Register required and recommended plugins.
 */
function appluto_register_required_plugins()
{
    $plugins = array(
        array(
            'name'     => 'Kirki Customizer Framework',
            'slug'     => 'kirki',
            'required' => true,
        ),
        array(
            'name'     => 'CMB2',
            'slug'     => 'cmb2',
            'required' => true,
        ),
    );

    $config = array(
        'id'           => 'appluto-portfolio',
        'default_path' => '',
        'menu'         => 'appluto-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => false,
        'dismiss_msg'  => '',
        'is_automatic' => false,
        'message'      => '',
    );

    tgmpa($plugins, $config);
}
