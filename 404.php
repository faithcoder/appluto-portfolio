<?php
/**
 * 404 template.
 *
 * @package appluto-portfolio
 */
get_header();
?>
<div class="container one mb-150" style="padding-top:120px;">
    <div class="section-title text-center">
        <h1 class="text-anim"><?php esc_html_e('404', 'appluto-portfolio'); ?></h1>
        <h2><?php esc_html_e('Page Not Found', 'appluto-portfolio'); ?></h2>
        <p><?php esc_html_e('The page you are looking for could not be found.', 'appluto-portfolio'); ?></p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="primary-btn1">
            <span><?php esc_html_e('Back Home', 'appluto-portfolio'); ?></span>
            <span><?php esc_html_e('Back Home', 'appluto-portfolio'); ?></span>
        </a>
    </div>
</div>
<?php get_footer(); ?>
