<?php
/**
 * Theme functions for appluto-portfolio.
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('appluto_asset_version')) {
    function appluto_asset_version($relative_path)
    {
        $path = get_template_directory() . $relative_path;
        return file_exists($path) ? (string) filemtime($path) : null;
    }
}

if (!function_exists('appluto_setup')) {
    function appluto_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
        add_theme_support(
            'html5',
            array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script')
        );

        register_nav_menus(
            array(
                'primary' => __('Primary Menu', 'appluto-portfolio'),
                'footer'  => __('Footer Menu', 'appluto-portfolio'),
            )
        );

        register_sidebar(
            array(
                'name'          => __('Sidebar', 'appluto-portfolio'),
                'id'            => 'appluto-sidebar-1',
                'description'   => __('Main sidebar widget area.', 'appluto-portfolio'),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }
}
add_action('after_setup_theme', 'appluto_setup');

if (!function_exists('appluto_enqueue_assets')) {
    function appluto_enqueue_assets()
    {
        $base_uri = get_template_directory_uri() . '/assets';

        wp_enqueue_style('appluto-theme-root', get_stylesheet_uri(), array(), appluto_asset_version('/style.css'));
        wp_enqueue_style('appluto-bootstrap', $base_uri . '/css/bootstrap.min.css', array(), appluto_asset_version('/assets/css/bootstrap.min.css'));
        wp_enqueue_style('appluto-jquery-ui', $base_uri . '/css/jquery-ui.css', array(), appluto_asset_version('/assets/css/jquery-ui.css'));
        wp_enqueue_style('appluto-bootstrap-icons', $base_uri . '/css/bootstrap-icons.css', array(), appluto_asset_version('/assets/css/bootstrap-icons.css'));
        wp_enqueue_style('appluto-animate', $base_uri . '/css/animate.min.css', array(), appluto_asset_version('/assets/css/animate.min.css'));
        wp_enqueue_style('appluto-fancybox', $base_uri . '/css/jquery.fancybox.min.css', array(), appluto_asset_version('/assets/css/jquery.fancybox.min.css'));
        wp_enqueue_style('appluto-swiper', $base_uri . '/css/swiper-bundle.min.css', array(), appluto_asset_version('/assets/css/swiper-bundle.min.css'));
        wp_enqueue_style('appluto-slick', $base_uri . '/css/slick.css', array(), appluto_asset_version('/assets/css/slick.css'));
        wp_enqueue_style('appluto-slick-theme', $base_uri . '/css/slick-theme.css', array('appluto-slick'), appluto_asset_version('/assets/css/slick-theme.css'));
        wp_enqueue_style('appluto-boxicons', $base_uri . '/css/boxicons.min.css', array(), appluto_asset_version('/assets/css/boxicons.min.css'));
        wp_enqueue_style('appluto-style', $base_uri . '/css/style.css', array('appluto-bootstrap'), appluto_asset_version('/assets/css/style.css'));

        wp_enqueue_script('jquery');
        wp_enqueue_script('appluto-jquery-ui', $base_uri . '/js/jquery-ui.js', array('jquery'), appluto_asset_version('/assets/js/jquery-ui.js'), true);
        wp_enqueue_script('appluto-popper', $base_uri . '/js/popper.min.js', array(), appluto_asset_version('/assets/js/popper.min.js'), true);
        wp_enqueue_script('appluto-bootstrap', $base_uri . '/js/bootstrap.min.js', array('appluto-popper'), appluto_asset_version('/assets/js/bootstrap.min.js'), true);
        wp_enqueue_script('appluto-swiper', $base_uri . '/js/swiper-bundle.min.js', array(), appluto_asset_version('/assets/js/swiper-bundle.min.js'), true);
        wp_enqueue_script('appluto-slick', $base_uri . '/js/slick.js', array('jquery'), appluto_asset_version('/assets/js/slick.js'), true);
        wp_enqueue_script('appluto-waypoints', $base_uri . '/js/waypoints.min.js', array('jquery'), appluto_asset_version('/assets/js/waypoints.min.js'), true);
        wp_enqueue_script('appluto-counterup', $base_uri . '/js/jquery.counterup.min.js', array('jquery', 'appluto-waypoints'), appluto_asset_version('/assets/js/jquery.counterup.min.js'), true);
        wp_enqueue_script('appluto-wow', $base_uri . '/js/wow.min.js', array(), appluto_asset_version('/assets/js/wow.min.js'), true);
        wp_enqueue_script('appluto-marquee', $base_uri . '/js/jquery.marquee.min.js', array('jquery'), appluto_asset_version('/assets/js/jquery.marquee.min.js'), true);
        wp_enqueue_script('appluto-gsap', $base_uri . '/js/gsap.min.js', array(), appluto_asset_version('/assets/js/gsap.min.js'), true);
        wp_enqueue_script('appluto-scroll-trigger', $base_uri . '/js/ScrollTrigger.min.js', array('appluto-gsap'), appluto_asset_version('/assets/js/ScrollTrigger.min.js'), true);
        wp_enqueue_script('appluto-scroll-smoother', $base_uri . '/js/ScrollSmoother.min.js', array('appluto-gsap', 'appluto-scroll-trigger'), appluto_asset_version('/assets/js/ScrollSmoother.min.js'), true);
        wp_enqueue_script('appluto-draggable', $base_uri . '/js/Draggable.min.js', array('appluto-gsap'), appluto_asset_version('/assets/js/Draggable.min.js'), true);
        wp_enqueue_script('appluto-splittext', $base_uri . '/js/SplitText.min.js', array('appluto-gsap'), appluto_asset_version('/assets/js/SplitText.min.js'), true);
        wp_enqueue_script('appluto-fancybox', $base_uri . '/js/jquery.fancybox.min.js', array('jquery'), appluto_asset_version('/assets/js/jquery.fancybox.min.js'), true);
        wp_enqueue_script('appluto-confetti', $base_uri . '/js/confetti.browser.min.js', array(), appluto_asset_version('/assets/js/confetti.browser.min.js'), true);
        wp_enqueue_script('appluto-three', $base_uri . '/js/three.js', array(), appluto_asset_version('/assets/js/three.js'), true);
        wp_enqueue_script('appluto-hover-effect', $base_uri . '/js/hover-effect.umd.js', array('appluto-three'), appluto_asset_version('/assets/js/hover-effect.umd.js'), true);
        wp_enqueue_script('appluto-theme-switcher', $base_uri . '/js/theme_switcher_to_light.js', array('jquery'), appluto_asset_version('/assets/js/theme_switcher_to_light.js'), true);

        wp_enqueue_script(
            'appluto-custom',
            $base_uri . '/js/custom.js',
            array(
                'jquery',
                'appluto-jquery-ui',
                'appluto-bootstrap',
                'appluto-swiper',
                'appluto-slick',
                'appluto-waypoints',
                'appluto-counterup',
                'appluto-wow',
                'appluto-marquee',
                'appluto-gsap',
                'appluto-scroll-trigger',
                'appluto-scroll-smoother',
                'appluto-draggable',
                'appluto-splittext',
                'appluto-fancybox',
                'appluto-confetti',
                'appluto-three',
                'appluto-hover-effect',
                'appluto-theme-switcher',
            ),
            appluto_asset_version('/assets/js/custom.js'),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'appluto_enqueue_assets');

class Appluto_Menu_Walker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $has_children = in_array('menu-item-has-children', $classes, true);
        $class_names = implode(' ', array_filter($classes));
        $class_attr = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= '<li' . $class_attr . '>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';

        $link_classes = array();
        if ($has_children) {
            $link_classes[] = 'drop-down';
        }
        if (!empty($item->current) || !empty($item->current_item_ancestor)) {
            $link_classes[] = 'active';
        }
        if ($link_classes) {
            $atts['class'] = implode(' ', $link_classes);
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (empty($value)) {
                continue;
            }
            $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
            $attributes .= ' ' . $attr . '="' . $value . '"';
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        $item_output  = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';

        if ($has_children) {
            $item_output .= '<i class="bi bi-plus dropdown-icon"></i>';
        }

        $item_output .= $args->after;

        $output .= $item_output;
    }

    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}

if (!function_exists('appluto_primary_menu_fallback')) {
    function appluto_primary_menu_fallback()
    {
        echo '<ul class="menu-list">';
        echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
        echo '</ul>';
    }
}
