<?php
/**
 * Single post template.
 *
 * @package appluto-portfolio
 */
get_header();
?>
<div class="container one mb-150" style="padding-top:120px;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
            <h1 class="text-anim"><?php the_title(); ?></h1>
            <p><?php echo esc_html(get_the_date('d F, Y')); ?></p>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; else : ?>
        <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
