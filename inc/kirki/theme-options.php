<?php
/**
 * Kirki options for Appluto theme.
 *
 * @package appluto-portfolio
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('appluto_get_option')) {
    function appluto_get_option($key, $default = '')
    {
        return get_theme_mod($key, $default);
    }
}

add_action('after_setup_theme', 'appluto_register_kirki_options', 20);

if (!function_exists('appluto_register_kirki_options')) {
    function appluto_register_kirki_options()
    {
        if (!class_exists('Kirki')) {
            return;
        }

        Kirki::add_config(
            'appluto_theme_options',
            array(
                'capability'  => 'edit_theme_options',
                'option_type' => 'theme_mod',
            )
        );

        Kirki::add_panel(
            'appluto_theme_options_panel',
            array(
                'title'    => esc_html__('Appluto Theme Options', 'appluto-portfolio'),
                'priority' => 10,
            )
        );

        Kirki::add_section(
            'appluto_colors',
            array(
                'title'    => esc_html__('Colors', 'appluto-portfolio'),
                'panel'    => 'appluto_theme_options_panel',
                'priority' => 10,
            )
        );

        Kirki::add_section(
            'appluto_typography',
            array(
                'title'    => esc_html__('Typography', 'appluto-portfolio'),
                'panel'    => 'appluto_theme_options_panel',
                'priority' => 20,
            )
        );

        Kirki::add_section(
            'appluto_layout_spacing',
            array(
                'title'    => esc_html__('Layout Spacing', 'appluto-portfolio'),
                'panel'    => 'appluto_theme_options_panel',
                'priority' => 30,
            )
        );

        Kirki::add_section(
            'appluto_header_options',
            array(
                'title'    => esc_html__('Header', 'appluto-portfolio'),
                'panel'    => 'appluto_theme_options_panel',
                'priority' => 40,
            )
        );

        Kirki::add_section(
            'appluto_footer_options',
            array(
                'title'    => esc_html__('Footer', 'appluto-portfolio'),
                'panel'    => 'appluto_theme_options_panel',
                'priority' => 50,
            )
        );

        Kirki::add_section(
            'appluto_homepage_layout',
            array(
                'title'    => esc_html__('Homepage Layout', 'appluto-portfolio'),
                'panel'    => 'appluto_theme_options_panel',
                'priority' => 60,
            )
        );

        // Colors.
        Kirki::add_field(
            'appluto_theme_options',
            array(
                'type'     => 'color',
                'settings' => 'appluto_primary_color',
                'label'    => esc_html__('Primary Color', 'appluto-portfolio'),
                'section'  => 'appluto_colors',
                'default'  => '#0E1A24',
                'output'   => array(
                    array(
                        'element'  => ':root',
                        'property' => '--appluto-primary-color',
                    ),
                ),
            )
        );

        Kirki::add_field(
            'appluto_theme_options',
            array(
                'type'     => 'color',
                'settings' => 'appluto_accent_color',
                'label'    => esc_html__('Accent Color', 'appluto-portfolio'),
                'section'  => 'appluto_colors',
                'default'  => '#FFC233',
                'output'   => array(
                    array(
                        'element'  => ':root',
                        'property' => '--appluto-accent-color',
                    ),
                ),
            )
        );

        Kirki::add_field(
            'appluto_theme_options',
            array(
                'type'     => 'color',
                'settings' => 'appluto_body_text_color',
                'label'    => esc_html__('Body Text Color', 'appluto-portfolio'),
                'section'  => 'appluto_colors',
                'default'  => '#171717',
                'output'   => array(
                    array(
                        'element'  => 'body',
                        'property' => 'color',
                    ),
                ),
            )
        );

        Kirki::add_field(
            'appluto_theme_options',
            array(
                'type'     => 'color',
                'settings' => 'appluto_body_bg_color',
                'label'    => esc_html__('Body Background Color', 'appluto-portfolio'),
                'section'  => 'appluto_colors',
                'default'  => '#FFFFFF',
                'output'   => array(
                    array(
                        'element'  => 'body',
                        'property' => 'background-color',
                    ),
                ),
            )
        );

        // Typography.
        Kirki::add_field(
            'appluto_theme_options',
            array(
                'type'     => 'typography',
                'settings' => 'appluto_body_typography',
                'label'    => esc_html__('Body Typography', 'appluto-portfolio'),
                'section'  => 'appluto_typography',
                'default'  => array(
                    'font-family' => 'Arial',
                    'variant'     => '400',
                    'font-size'   => '16px',
                    'line-height' => '1.6',
                ),
                'output'   => array(
                    array(
                        'element' => 'body',
                    ),
                ),
            )
        );

        Kirki::add_field(
            'appluto_theme_options',
            array(
                'type'     => 'typography',
                'settings' => 'appluto_heading_typography',
                'label'    => esc_html__('Heading Typography', 'appluto-portfolio'),
                'section'  => 'appluto_typography',
                'default'  => array(
                    'font-family' => 'Arial',
                    'variant'     => '700',
                    'line-height' => '1.2',
                ),
                'output'   => array(
                    array(
                        'element' => 'h1,h2,h3,h4,h5,h6',
                    ),
                ),
            )
        );

        // Layout spacing.
        Kirki::add_field(
            'appluto_theme_options',
            array(
                'type'        => 'slider',
                'settings'    => 'appluto_section_gap',
                'label'       => esc_html__('Global Section Gap (px)', 'appluto-portfolio'),
                'section'     => 'appluto_layout_spacing',
                'default'     => 150,
                'choices'     => array(
                    'min'  => 60,
                    'max'  => 240,
                    'step' => 2,
                ),
                'output'      => array(
                    array(
                        'element'  => ':root',
                        'property' => '--appluto-section-gap',
                        'suffix'   => 'px',
                    ),
                ),
            )
        );

        Kirki::add_field(
            'appluto_theme_options',
            array(
                'type'        => 'switch',
                'settings'    => 'appluto_enable_smooth_scroll',
                'label'       => esc_html__('Enable Smooth Scroll Effects', 'appluto-portfolio'),
                'section'     => 'appluto_layout_spacing',
                'default'     => true,
                'choices'     => array(
                    'on'  => esc_html__('On', 'appluto-portfolio'),
                    'off' => esc_html__('Off', 'appluto-portfolio'),
                ),
            )
        );

        // Header options.
        Kirki::add_field(
            'appluto_theme_options',
            array(
                'type'        => 'image',
                'settings'    => 'appluto_header_logo_override',
                'label'       => esc_html__('Header Logo Override', 'appluto-portfolio'),
                'description' => esc_html__('Optional logo override for template header output.', 'appluto-portfolio'),
                'section'     => 'appluto_header_options',
                'default'     => '',
            )
        );

        Kirki::add_field('appluto_theme_options', array(
            'type'     => 'text',
            'settings' => 'appluto_header_lets_talk_label',
            'label'    => esc_html__('Let’s Talk Button Label', 'appluto-portfolio'),
            'section'  => 'appluto_header_options',
            'default'  => 'Let’s Talk',
        ));

        Kirki::add_field('appluto_theme_options', array(
            'type'     => 'link',
            'settings' => 'appluto_header_lets_talk_url',
            'label'    => esc_html__('Let’s Talk Button URL', 'appluto-portfolio'),
            'section'  => 'appluto_header_options',
            'default'  => home_url('/contact'),
        ));

        Kirki::add_field('appluto_theme_options', array(
            'type'     => 'textarea',
            'settings' => 'appluto_header_address',
            'label'    => esc_html__('Header Address', 'appluto-portfolio'),
            'section'  => 'appluto_header_options',
            'default'  => '308 Crescent Avenue, Level 3, Los Angeles, CA 90012, USA',
        ));

        Kirki::add_field('appluto_theme_options', array(
            'type'     => 'text',
            'settings' => 'appluto_header_contact_email',
            'label'    => esc_html__('Header Contact Email', 'appluto-portfolio'),
            'section'  => 'appluto_header_options',
            'default'  => get_option('admin_email'),
        ));

        Kirki::add_field('appluto_theme_options', array(
            'type'     => 'text',
            'settings' => 'appluto_header_contact_phone',
            'label'    => esc_html__('Header Contact Phone', 'appluto-portfolio'),
            'section'  => 'appluto_header_options',
            'default'  => '+99 (0) 257 757 6980',
        ));

        Kirki::add_field('appluto_theme_options', array(
            'type'     => 'text',
            'settings' => 'appluto_header_project_btn_label',
            'label'    => esc_html__('Start Project Button Label', 'appluto-portfolio'),
            'section'  => 'appluto_header_options',
            'default'  => 'Start Your Project',
        ));

        Kirki::add_field('appluto_theme_options', array(
            'type'     => 'link',
            'settings' => 'appluto_header_project_btn_url',
            'label'    => esc_html__('Start Project Button URL', 'appluto-portfolio'),
            'section'  => 'appluto_header_options',
            'default'  => home_url('/contact'),
        ));

        // Footer options.
        Kirki::add_field(
            'appluto_theme_options',
            array(
                'type'        => 'image',
                'settings'    => 'appluto_footer_logo_override',
                'label'       => esc_html__('Footer Logo Override', 'appluto-portfolio'),
                'section'     => 'appluto_footer_options',
                'default'     => '',
            )
        );

        Kirki::add_field('appluto_theme_options', array(
            'type'     => 'textarea',
            'settings' => 'appluto_footer_office_location',
            'label'    => esc_html__('Office Location', 'appluto-portfolio'),
            'section'  => 'appluto_footer_options',
            'default'  => '308 Crescent Avenue, Level 3, Los Angeles, CA 90012, USA',
        ));

        Kirki::add_field('appluto_theme_options', array(
            'type'     => 'text',
            'settings' => 'appluto_footer_contact_email',
            'label'    => esc_html__('Footer Contact Email', 'appluto-portfolio'),
            'section'  => 'appluto_footer_options',
            'default'  => get_option('admin_email'),
        ));

        Kirki::add_field('appluto_theme_options', array(
            'type'     => 'text',
            'settings' => 'appluto_footer_contact_phone',
            'label'    => esc_html__('Footer Contact Phone', 'appluto-portfolio'),
            'section'  => 'appluto_footer_options',
            'default'  => '+99 (0) 257 757 6980',
        ));

        Kirki::add_field(
            'appluto_theme_options',
            array(
                'type'        => 'repeater',
                'settings'    => 'appluto_footer_social_links',
                'label'       => esc_html__('Footer Social Links', 'appluto-portfolio'),
                'section'     => 'appluto_footer_options',
                'default'     => array(
                    array(
                        'label' => 'Facebook',
                        'icon'  => 'bx bxl-facebook',
                        'url'   => 'https://www.facebook.com/',
                    ),
                    array(
                        'label' => 'X',
                        'icon'  => 'bi bi-twitter-x',
                        'url'   => 'https://x.com/',
                    ),
                ),
                'row_label'   => array(
                    'type'  => 'field',
                    'value' => 'label',
                    'field' => 'label',
                ),
                'fields'      => array(
                    'label' => array(
                        'type'        => 'text',
                        'label'       => esc_html__('Label', 'appluto-portfolio'),
                        'default'     => '',
                    ),
                    'icon' => array(
                        'type'        => 'text',
                        'label'       => esc_html__('Icon Class', 'appluto-portfolio'),
                        'default'     => 'bx bxl-facebook',
                    ),
                    'url' => array(
                        'type'        => 'link',
                        'label'       => esc_html__('URL', 'appluto-portfolio'),
                        'default'     => '',
                    ),
                ),
            )
        );

        // Homepage toggles + order.
        $sections = array(
            'home3_banner'       => esc_html__('Banner Section', 'appluto-portfolio'),
            'home3_banner_image' => esc_html__('Banner Image Section', 'appluto-portfolio'),
            'home3_about'        => esc_html__('About Section', 'appluto-portfolio'),
            'home3_scroll_text'  => esc_html__('Scroll Text Section', 'appluto-portfolio'),
            'home3_portfolio'    => esc_html__('Portfolio Section', 'appluto-portfolio'),
            'home3_service'      => esc_html__('Service Section', 'appluto-portfolio'),
            'home3_counter'      => esc_html__('Counter Section', 'appluto-portfolio'),
            'home3_testimonial'  => esc_html__('Testimonial Section', 'appluto-portfolio'),
            'home3_video'        => esc_html__('Video Banner Section', 'appluto-portfolio'),
            'home3_partner'      => esc_html__('Partner Section', 'appluto-portfolio'),
            'home3_blog'         => esc_html__('Blog Section', 'appluto-portfolio'),
        );

        foreach ($sections as $section_key => $section_label) {
            Kirki::add_field('appluto_theme_options', array(
                'type'     => 'switch',
                'settings' => 'appluto_enable_' . $section_key,
                'label'    => sprintf(esc_html__('Enable %s', 'appluto-portfolio'), $section_label),
                'section'  => 'appluto_homepage_layout',
                'default'  => true,
                'choices'  => array(
                    'on'  => esc_html__('On', 'appluto-portfolio'),
                    'off' => esc_html__('Off', 'appluto-portfolio'),
                ),
            ));
        }

        Kirki::add_field('appluto_theme_options', array(
            'type'     => 'sortable',
            'settings' => 'appluto_home_sections_order',
            'label'    => esc_html__('Homepage Section Order', 'appluto-portfolio'),
            'section'  => 'appluto_homepage_layout',
            'default'  => array_keys($sections),
            'choices'  => $sections,
        ));
    }
}
