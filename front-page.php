<?php
get_header();

$appluto_default_sections = array(
    'home3_banner'       => 'appluto1-banner',
    'home3_banner_image' => 'appluto1-banner-image',
    'home3_about'        => 'appluto1-about',
    'home3_service'      => 'appluto1-service',
    'home3_scroll_text'  => 'appluto1-scroll-text',
    'home3_portfolio'    => 'appluto1-portfolio',
    'home3_counter'      => 'appluto1-counter',
    'home3_testimonial'  => 'appluto1-testimonial',
    'home3_video'        => 'appluto1-video-banner',
    'home3_partner'      => 'appluto1-partner',
    'home3_blog'         => 'appluto1-blog',
);

$appluto_sections_order = function_exists('appluto_get_option')
    ? appluto_get_option('appluto_home_sections_order', array_keys($appluto_default_sections))
    : array_keys($appluto_default_sections);

if (!is_array($appluto_sections_order) || empty($appluto_sections_order)) {
    $appluto_sections_order = array_keys($appluto_default_sections);
}

$appluto_missing_sections = array_diff(array_keys($appluto_default_sections), $appluto_sections_order);
if (!empty($appluto_missing_sections)) {
    $appluto_sections_order = array_merge($appluto_sections_order, $appluto_missing_sections);
}

foreach ($appluto_sections_order as $appluto_section_key) {
    if (!isset($appluto_default_sections[$appluto_section_key])) {
        continue;
    }

    $appluto_enabled = function_exists('appluto_get_option')
        ? appluto_get_option('appluto_enable_' . $appluto_section_key, true)
        : true;

    if (!$appluto_enabled) {
        continue;
    }

    get_template_part('template-parts/sections/' . $appluto_default_sections[$appluto_section_key]);
}

get_footer();
