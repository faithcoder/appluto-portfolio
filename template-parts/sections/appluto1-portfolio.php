            <!-- home3 Portfolio Section Start -->
            <div class="home3-portfolio-section mb-150">
                <div class="container-fluid one">
                    <div class="row gx-lg-4 gx-md-3 gy-5 mb-100">
                        <?php
                        $appluto_portfolio_query = new WP_Query(
                            array(
                                'post_type'           => 'appluto_portfolio',
                                'posts_per_page'      => 4,
                                'ignore_sticky_posts' => true,
                                'orderby'             => array('menu_order' => 'ASC', 'date' => 'DESC'),
                            )
                        );

                        if ($appluto_portfolio_query->have_posts()) :
                            $fallback_delays = array('.3', '.5', '.2', '.4');
                            $fallback_images = array(
                                get_template_directory_uri() . '/assets/images/portfolio-img1.jpg',
                                get_template_directory_uri() . '/assets/images/portfolio-img2.jpg',
                                get_template_directory_uri() . '/assets/images/portfolio-img3.jpg',
                                get_template_directory_uri() . '/assets/images/portfolio-img4.jpg',
                            );
                            $index = 0;

                            while ($appluto_portfolio_query->have_posts()) :
                                $appluto_portfolio_query->the_post();
                                $delay    = get_post_meta(get_the_ID(), 'appluto_portfolio_delay', true);
                                $delay    = $delay ? $delay : $fallback_delays[$index % count($fallback_delays)];
                                $subtitle = get_post_meta(get_the_ID(), 'appluto_portfolio_subtitle', true);
                                $tag      = get_post_meta(get_the_ID(), 'appluto_portfolio_tag', true);
                                $url      = get_post_meta(get_the_ID(), 'appluto_portfolio_url', true);
                                $url      = $url ? $url : get_permalink();
                                $img_url  = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                $img_url  = $img_url ? $img_url : $fallback_images[$index % count($fallback_images)];
                                ?>
                                <div class="col-md-6 fade_anim" data-delay="<?php echo esc_attr($delay); ?>">
                                    <div class="portfolio-card style-2">
                                        <a data-cursor="View Details" href="<?php echo esc_url($url); ?>" class="portfolio-img shape-hover-item">
                                            <div class="shape-hover-img" data-displacement="assets/img/home3/portfolio-hover-shape.png" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                                <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                            </div>
                                        </a>
                                        <div class="portfolio-content-wrap">
                                            <div class="portfolio-content">
                                                <h3><a href="<?php echo esc_url($url); ?>"><?php the_title(); ?></a></h3>
                                                <span><?php echo esc_html($subtitle); ?></span>
                                            </div>
                                            <div class="tag">
                                                <a href="<?php echo esc_url($url); ?>"><?php echo esc_html($tag ? '(' . $tag . ')' : ''); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $index++;
                            endwhile;
                            wp_reset_postdata();
                        else :
                            $portfolio_fallback = array(
                                array('delay' => '.3', 'title' => 'EchoCreative', 'subtitle' => '2026 - Canada', 'tag' => 'UI/UX Design', 'img' => 'portfolio-img1.jpg'),
                                array('delay' => '.5', 'title' => 'Orbit Studio', 'subtitle' => '2026 - Canada', 'tag' => 'eCommerce', 'img' => 'portfolio-img2.jpg'),
                                array('delay' => '.2', 'title' => 'Blue Theory', 'subtitle' => '2026 - New zealand', 'tag' => 'Branding Design', 'img' => 'portfolio-img3.jpg'),
                                array('delay' => '.4', 'title' => 'Modern Shift', 'subtitle' => '2026 - Finland', 'tag' => 'Development', 'img' => 'portfolio-img4.jpg'),
                            );
                            foreach ($portfolio_fallback as $item) :
                                ?>
                                <div class="col-md-6 fade_anim" data-delay="<?php echo esc_attr($item['delay']); ?>">
                                    <div class="portfolio-card style-2">
                                        <a data-cursor="View Details" href="#" class="portfolio-img shape-hover-item">
                                            <div class="shape-hover-img" data-displacement="assets/img/home3/portfolio-hover-shape.png" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $item['img']); ?>" alt="">
                                            </div>
                                        </a>
                                        <div class="portfolio-content-wrap">
                                            <div class="portfolio-content">
                                                <h3><a href="#"><?php echo esc_html($item['title']); ?></a></h3>
                                                <span><?php echo esc_html($item['subtitle']); ?></span>
                                            </div>
                                            <div class="tag">
                                                <a href="#"><?php echo esc_html('(' . $item['tag'] . ')'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <div class="btn_wrapper d-flex align-items-center justify-content-center fade_anim" data-delay=".3" data-fade-from="top" data-ease="bounce">
                        <a class="circle-btn btn-hover" href="#">
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>

                            View All <br> Work
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- home3 Portfolio Section End -->
