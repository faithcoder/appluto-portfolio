            <!-- home3 Service Section Start -->
            <div class="home3-service-section mb-140">
                <div class="service-title-area">
                    <div class="container-fluid one">
                        <div class="section-title two white">
                            <span>Who We Are</span>
                            <h2 class="text_color_invert"><span></span> We blend creativity, technology, & strategy to craft digital experiences that fuel brand success.</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid one">
                    <div class="service-wrapper service-pp-pin">
                        <div class="video-area fade_anim" data-delay=".3" data-fade-from="left">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/home3-service-video-img.png" alt="">
                            <a href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/media/home3-video.mp4" class="play-btn" data-fancybox="video-player">
                                <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="M13.2627 7C13.2643 7.26562 13.1952 7.52687 13.0624 7.7569C12.9296 7.98694 12.7379 8.17746 12.5071 8.30889L3.00437 13.7953C2.77511 13.9293 2.5143 14 2.2487 14C1.98311 14 1.72229 13.9293 1.49303 13.7953C1.26221 13.6638 1.07055 13.4733 0.937743 13.2432C0.804932 13.0132 0.735759 12.752 0.737331 12.4864V1.51364C0.735766 1.24803 0.804938 0.986786 0.937743 0.756752C1.07055 0.526717 1.2622 0.336184 1.493 0.204724C1.72228 0.0706577 1.98309 0 2.24869 0C2.51428 0 2.7751 0.0706577 3.00437 0.204724L12.5071 5.69111C12.7379 5.82255 12.9295 6.01307 13.0624 6.2431C13.1952 6.47314 13.2643 6.73439 13.2627 7Z"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="service-list">
                            <?php
                            $appluto_service_query = new WP_Query(
                                array(
                                    'post_type'           => 'appluto_service',
                                    'posts_per_page'      => 4,
                                    'ignore_sticky_posts' => true,
                                    'orderby'             => array('menu_order' => 'ASC', 'date' => 'DESC'),
                                )
                            );

                            if ($appluto_service_query->have_posts()) :
                                $fallback_images = array(
                                    get_template_directory_uri() . '/assets/images/service-img1.jpg',
                                    get_template_directory_uri() . '/assets/images/service-img2.jpg',
                                    get_template_directory_uri() . '/assets/images/service-img3.jpg',
                                    get_template_directory_uri() . '/assets/images/service-img4.jpg',
                                );
                                $service_index = 0;
                                while ($appluto_service_query->have_posts()) :
                                    $appluto_service_query->the_post();
                                    $service_no   = get_post_meta(get_the_ID(), 'appluto_service_number', true);
                                    $service_no   = $service_no ? $service_no : ($service_index + 1) . '.';
                                    $cta_label    = get_post_meta(get_the_ID(), 'appluto_service_cta_label', true);
                                    $cta_label    = $cta_label ? $cta_label : 'View Details';
                                    $cta_url      = get_post_meta(get_the_ID(), 'appluto_service_cta_url', true);
                                    $cta_url      = $cta_url ? $cta_url : get_permalink();
                                    $features     = get_post_meta(get_the_ID(), 'appluto_service_features', true);
                                    $description  = has_excerpt() ? get_the_excerpt() : wp_trim_words(wp_strip_all_tags(get_the_content()), 24);
                                    $service_img  = get_the_post_thumbnail_url(get_the_ID(), 'large');
                                    $service_img  = $service_img ? $service_img : $fallback_images[$service_index % count($fallback_images)];
                                    ?>
                                    <div class="single-service servicePanel">
                                        <span class="service-no"><?php echo esc_html($service_no); ?></span>
                                        <div class="service-content">
                                            <h2><a href="<?php echo esc_url($cta_url); ?>"><?php the_title(); ?></a></h2>
                                            <ul>
                                                <?php
                                                if (is_array($features) && !empty($features)) :
                                                    foreach ($features as $feature) :
                                                        $feature_label = isset($feature['label']) ? $feature['label'] : '';
                                                        $feature_url   = isset($feature['url']) && $feature['url'] ? $feature['url'] : $cta_url;
                                                        if (!$feature_label) {
                                                            continue;
                                                        }
                                                        ?>
                                                        <li><a href="<?php echo esc_url($feature_url); ?>"><?php echo esc_html($feature_label); ?></a></li>
                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </ul>
                                            <p><?php echo esc_html($description); ?></p>
                                            <a href="<?php echo esc_url($cta_url); ?>" class="primary-btn2">
                                                <span class="icon">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round"></path>
                                                    </svg>
                                                </span>
                                                <span class="content"><?php echo esc_html($cta_label); ?></span>
                                                <span class="icon two">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="service-img">
                                            <img src="<?php echo esc_url($service_img); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                        </div>
                                    </div>
                                    <?php
                                    $service_index++;
                                endwhile;
                                wp_reset_postdata();
                            else :
                                $service_fallback = array(
                                    array('no' => '1.', 'title' => 'Web Development', 'features' => array('Design', 'Develop', 'Deliver'), 'img' => 'service-img1.jpg'),
                                    array('no' => '2.', 'title' => 'UI/UX & Product Design', 'features' => array('Wireframe', 'Prototype', 'High-fidelity'), 'img' => 'service-img2.jpg'),
                                    array('no' => '3.', 'title' => '3D Art & Direction', 'features' => array('Wireframe', 'Prototype', 'High-fidelity'), 'img' => 'service-img3.jpg'),
                                    array('no' => '4.', 'title' => 'Digital Marketing', 'features' => array('Wireframe', 'Prototype', 'High-fidelity'), 'img' => 'service-img4.jpg'),
                                );
                                foreach ($service_fallback as $item) :
                                    ?>
                                    <div class="single-service servicePanel">
                                        <span class="service-no"><?php echo esc_html($item['no']); ?></span>
                                        <div class="service-content">
                                            <h2><a href="#"><?php echo esc_html($item['title']); ?></a></h2>
                                            <ul>
                                                <?php foreach ($item['features'] as $feature) : ?>
                                                    <li><a href="#"><?php echo esc_html($feature); ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <p>We turn your ideas into powerful digital platforms that engage audiences and drive growth.</p>
                                            <a href="#" class="primary-btn2">
                                                <span class="icon">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round"></path>
                                                    </svg>
                                                </span>
                                                <span class="content">View Details</span>
                                                <span class="icon two">
                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="service-img">
                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $item['img']); ?>" alt="">
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
            <!-- home3 Service Section End -->
