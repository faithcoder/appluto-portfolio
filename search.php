<?php
/**
 * Search results template.
 *
 * @package appluto-portfolio
 */
get_header();
?>
<div class="home3-blog-section mb-150" style="padding-top:120px;">
    <div class="container one">
        <div class="row justify-content-center mb-70">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="section-title text-center">
                    <h2 class="text-anim">
                        <?php
                        printf(
                            esc_html__('Search Results for: %s', 'appluto-portfolio'),
                            '<span>' . esc_html(get_search_query()) . '</span>'
                        );
                        ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid one">
        <div class="row gy-5">
            <?php
            if (have_posts()) {
                $delays = array('.2', '.3', '.4', '.5');
                $i = 0;
                while (have_posts()) {
                    the_post();
                    set_query_var('appluto_card_delay', $delays[$i % count($delays)]);
                    get_template_part('template-parts/content', 'post-card');
                    $i++;
                }
            } else {
                get_template_part('template-parts/content', 'none');
            }
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
