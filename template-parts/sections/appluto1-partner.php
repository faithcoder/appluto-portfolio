            <!-- home3 Partner Section Start -->
            <div class="home3-partner-section pb-150 mb-150">
                <div class="container one">
                    <div class="title-area text-center mb-70 fade_anim" data-delay=".3" data-fade-from="top">
                        <h3>We’ve 12K+ Trusted Clients in the World-wide</h3>
                    </div>
                    <ul class="partner-list fade_anim" data-delay=".3">
                        <?php
                        $appluto_partner_query = new WP_Query(
                            array(
                                'post_type'           => 'appluto_partner',
                                'posts_per_page'      => 10,
                                'ignore_sticky_posts' => true,
                                'orderby'             => array('menu_order' => 'ASC', 'date' => 'DESC'),
                            )
                        );

                        if ($appluto_partner_query->have_posts()) :
                            while ($appluto_partner_query->have_posts()) :
                                $appluto_partner_query->the_post();
                                $partner_img = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                                if (!$partner_img) {
                                    continue;
                                }
                                ?>
                                <li class="single-partner">
                                    <img src="<?php echo esc_url($partner_img); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                </li>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            for ($i = 1; $i <= 10; $i++) :
                                ?>
                                <li class="single-partner">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/partner-logo' . $i . '.png'); ?>" alt="">
                                </li>
                                <?php
                            endfor;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
            <!-- home3 Partner Section End -->
