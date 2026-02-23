<?php
/**
 * Blog card template for homepage query.
 *
 * @package appluto-portfolio
 */

$delay = get_query_var('appluto_card_delay', '.2');
$placeholder = get_template_directory_uri() . '/assets/images/blog-img1.jpg';
$word_count = str_word_count(wp_strip_all_tags(get_the_content()));
$read_time = max(1, (int) ceil($word_count / 200));
?>
<div class="col-xl-3 col-lg-4 col-md-6 fade_anim" data-delay="<?php echo esc_attr($delay); ?>">
    <div class="blog-card2">
        <a href="<?php the_permalink(); ?>" class="blog-img shape-hover-item">
            <div class="shape-hover-img" data-displacement="assets/img/home3/hover-img-shape2.png" data-intensity="0.6" data-speedin="1" data-speedout="1">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php else : ?>
                    <img src="<?php echo esc_url($placeholder); ?>" alt="<?php the_title_attribute(); ?>">
                <?php endif; ?>
            </div>
        </a>
        <div class="blog-content">
            <ul class="blog-meta">
                <li><a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_date('d F, Y')); ?></a></li>
                <li><?php echo esc_html($read_time . ' min read'); ?></li>
            </ul>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <a href="<?php the_permalink(); ?>" class="primary-btn1">
                <span><?php esc_html_e('Read More', 'appluto-portfolio'); ?></span>
                <span><?php esc_html_e('Read More', 'appluto-portfolio'); ?></span>
            </a>
        </div>
    </div>
</div>
