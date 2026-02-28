            <!-- Portfolio Coverflow Page Start -->
            <div class="pf-coverflow-page">
                <div class="pf-coverflow-slider-wrap">
                    <div class="swiper portfolio-coverflow-slider">
                        <div class="swiper-wrapper">
                            <?php
                            $appluto_portfolio_query = new WP_Query(
                                array(
                                    'post_type'           => 'appluto_portfolio',
                                    'posts_per_page'      => 8,
                                    'ignore_sticky_posts' => true,
                                    'orderby'             => array('menu_order' => 'ASC', 'date' => 'DESC'),
                                )
                            );

                            $appluto_fallback_images = array(
                                get_template_directory_uri() . '/assets/images/portfolio-img1.jpg',
                                get_template_directory_uri() . '/assets/images/portfolio-img2.jpg',
                                get_template_directory_uri() . '/assets/images/portfolio-img3.jpg',
                                get_template_directory_uri() . '/assets/images/portfolio-img4.jpg',
                                get_template_directory_uri() . '/assets/images/portfolio-img1.jpg',
                                get_template_directory_uri() . '/assets/images/portfolio-img2.jpg',
                                get_template_directory_uri() . '/assets/images/portfolio-img3.jpg',
                                get_template_directory_uri() . '/assets/images/portfolio-img4.jpg',
                            );

                            if ($appluto_portfolio_query->have_posts()) :
                                $index = 0;

                                while ($appluto_portfolio_query->have_posts()) :
                                    $appluto_portfolio_query->the_post();
                                    $subtitle = get_post_meta(get_the_ID(), 'appluto_portfolio_subtitle', true);
                                    $tag      = get_post_meta(get_the_ID(), 'appluto_portfolio_tag', true);
                                    $url      = get_post_meta(get_the_ID(), 'appluto_portfolio_url', true);
                                    $url      = $url ? $url : get_permalink();
                                    $img_url  = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                    $img_url  = $img_url ? $img_url : $appluto_fallback_images[$index % count($appluto_fallback_images)];
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="single-coverflow-slide">
                                            <a href="<?php echo esc_url($url); ?>" class="pf-coverflow-slider-img">
                                                <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                            </a>
                                            <div class="pf-coverflow-slider-content">
                                                <h2><a href="<?php echo esc_url($url); ?>"><?php the_title(); ?></a></h2>
                                                <ul>
                                                    <li><a href="<?php echo esc_url($url); ?>"><?php echo esc_html($tag); ?></a></li>
                                                    <li><span><?php echo esc_html($subtitle); ?></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $index++;
                                endwhile;
                                wp_reset_postdata();
                            else :
                                $portfolio_fallback = array(
                                    array('title' => 'Beyond Creativity', 'subtitle' => '2025 - New York', 'tag' => 'UI/UX Design', 'img' => 'portfolio-img1.jpg'),
                                    array('title' => 'Orbit Studio', 'subtitle' => '2025 - Canada', 'tag' => 'Branding Design', 'img' => 'portfolio-img2.jpg'),
                                    array('title' => 'EchoCreative', 'subtitle' => '2025 - Finland', 'tag' => 'Development', 'img' => 'portfolio-img3.jpg'),
                                    array('title' => 'Blue Theory', 'subtitle' => '2025 - New zealand', 'tag' => 'eCommerce', 'img' => 'portfolio-img4.jpg'),
                                    array('title' => 'Modern Shift', 'subtitle' => '2025 - Canada', 'tag' => 'UI/UX Design', 'img' => 'portfolio-img1.jpg'),
                                    array('title' => 'Innovative Vision', 'subtitle' => '2025 - UAE', 'tag' => 'Branding Design', 'img' => 'portfolio-img2.jpg'),
                                    array('title' => 'HealthTech', 'subtitle' => '2025 - London', 'tag' => 'Flutter App', 'img' => 'portfolio-img3.jpg'),
                                    array('title' => 'Zenith Finance', 'subtitle' => '2025 - London', 'tag' => 'Web Design', 'img' => 'portfolio-img4.jpg'),
                                );

                                foreach ($portfolio_fallback as $item) :
                                    ?>
                                    <div class="swiper-slide">
                                        <div class="single-coverflow-slide">
                                            <a href="#" class="pf-coverflow-slider-img">
                                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $item['img']); ?>" alt="">
                                            </a>
                                            <div class="pf-coverflow-slider-content">
                                                <h2><a href="#"><?php echo esc_html($item['title']); ?></a></h2>
                                                <ul>
                                                    <li><a href="#"><?php echo esc_html($item['tag']); ?></a></li>
                                                    <li><span><?php echo esc_html($item['subtitle']); ?></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- Portfolio Coverflow Page End -->

            <!-- home1 Call Section Start-->
            <div class="home1-call-section mb-150">
                <div class="container d-flex justify-content-center">
                    <div class="call-wrapper">
                        <span>Take the First Step Toward Startup Success.</span>
                        <div class="call-area">
                            <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M12.063 9.74408C11.2173 9.02072 10.359 8.58256 9.52363 9.30482L9.02482 9.74135C8.65987 10.0582 7.98131 11.5388 5.35778 8.52082C2.73479 5.50666 4.29569 5.03735 4.66119 4.7232L5.16273 4.28613C5.99372 3.56223 5.68012 2.65093 5.08078 1.71286L4.7191 1.14466C4.11704 0.208782 3.46143 -0.405852 2.62826 0.316958L2.17807 0.710323C1.80984 0.978577 0.780529 1.85054 0.530851 3.50705C0.230363 5.49464 1.17827 7.77069 3.34997 10.268C5.51895 12.7664 7.64258 14.0214 9.65421 13.9995C11.326 13.9815 12.3357 13.0844 12.6514 12.7582L13.1033 12.3643C13.9342 11.6421 13.418 10.9067 12.5717 10.1817L12.063 9.74408Z"/>
                                </g>
                            </svg>
                            <a href="tel:92345564765">+92 345 564 765</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- home1 Call Section End-->