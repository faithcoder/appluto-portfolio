            <!-- home3 Testimonial Section Start -->
            <div class="home3-testimonial-section mb-150"> 
                <div class="container one">
                    <div class="title-area text-center mb-50">
                        <h2 class="text-anim">Trusted Voices</h2>
                    </div>
                    <div class="row justify-content-center mb-70">
                        <div class="col-xl-8 col-lg-10">
                            <div class="swiper home2-testimonial-slider">
                                <div class="swiper-wrapper">
                                    <?php
                                    $appluto_testimonial_query = new WP_Query(
                                        array(
                                            'post_type'           => 'appluto_testimonial',
                                            'posts_per_page'      => 6,
                                            'ignore_sticky_posts' => true,
                                            'orderby'             => array('menu_order' => 'ASC', 'date' => 'DESC'),
                                        )
                                    );

                                    if ($appluto_testimonial_query->have_posts()) :
                                        $fallback_images = array(
                                            get_template_directory_uri() . '/assets/images/testimonial-author-img3.png',
                                            get_template_directory_uri() . '/assets/images/testimonial-author-img2.png',
                                            get_template_directory_uri() . '/assets/images/testimonial-author-img1.png',
                                        );
                                        $t_index = 0;
                                        while ($appluto_testimonial_query->have_posts()) :
                                            $appluto_testimonial_query->the_post();
                                            $role = get_post_meta(get_the_ID(), 'appluto_testimonial_role', true);
                                            $company = get_post_meta(get_the_ID(), 'appluto_testimonial_company', true);
                                            $meta_line = $role ? $role : $company;
                                            $author_img = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                                            $author_img = $author_img ? $author_img : $fallback_images[$t_index % count($fallback_images)];
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="testimonial-card2 two">
                                                    <svg width="55" height="55" viewBox="0 0 55 55" xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M32.342 6.875V25.5542H37.9929C42.2732 25.5542 46.2481 28.4095 46.5871 32.8064C46.7111 34.4158 46.6626 36.0066 46.2608 37.2349C44.9661 42.515 40.4343 43.066 40.4343 43.066V48.125C40.4343 48.125 55.0005 46.145 55.0005 30.305V6.875L32.342 6.875ZM1.37549 6.875L1.37549 25.5542H7.02636C11.3067 25.5542 15.2815 28.4095 15.6204 32.8064C15.7445 34.4158 15.6959 36.0066 15.2943 37.2349C13.9995 42.515 9.4678 43.066 9.4678 43.066V48.125C9.4678 48.125 24.034 46.145 24.034 30.305V6.875L1.37549 6.875Z"></path>
                                                        </g>
                                                    </svg>
                                                    <p><?php echo wp_kses_post(get_the_content()); ?></p>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="<?php echo esc_url($author_img); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                                        </div>
                                                        <div class="author-content">
                                                            <h3><?php the_title(); ?></h3>
                                                            <span><?php echo esc_html($meta_line); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $t_index++;
                                        endwhile;
                                        wp_reset_postdata();
                                    else :
                                        $testimonial_fallback = array(
                                            array('content' => 'Anio nailed every aspect of our product redesign. The UX overhaul directly reduced our user drop-off by 38%. <strong>Their design team works fast, and more importantly, thinks deep.</strong>', 'name' => 'Ethan Morales', 'role' => 'Head of Product, FinovaX', 'img' => 'testimonial-author-img3.png'),
                                            array('content' => 'Working with Anio was a game-changer. Their intuitive designs increased our onboarding completion rate by 45%. <strong>They don’t just create visuals—they solve user problems efficiently.</strong>', 'name' => 'Jason Lee', 'role' => 'Co-Founder of OrbitFlow', 'img' => 'testimonial-author-img2.png'),
                                            array('content' => 'We were amazed at how Anio transformed our website’s UX. Customer feedback has been overwhelmingly positive. <strong>The team combines making every design decision count.</strong>', 'name' => 'Ava T.', 'role' => 'Founder of BrightNest', 'img' => 'testimonial-author-img1.png'),
                                        );
                                        foreach ($testimonial_fallback as $item) :
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="testimonial-card2 two">
                                                    <svg width="55" height="55" viewBox="0 0 55 55" xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M32.342 6.875V25.5542H37.9929C42.2732 25.5542 46.2481 28.4095 46.5871 32.8064C46.7111 34.4158 46.6626 36.0066 46.2608 37.2349C44.9661 42.515 40.4343 43.066 40.4343 43.066V48.125C40.4343 48.125 55.0005 46.145 55.0005 30.305V6.875L32.342 6.875ZM1.37549 6.875L1.37549 25.5542H7.02636C11.3067 25.5542 15.2815 28.4095 15.6204 32.8064C15.7445 34.4158 15.6959 36.0066 15.2943 37.2349C13.9995 42.515 9.4678 43.066 9.4678 43.066V48.125C9.4678 48.125 24.034 46.145 24.034 30.305V6.875L1.37549 6.875Z"></path>
                                                        </g>
                                                    </svg>
                                                    <p><?php echo wp_kses_post($item['content']); ?></p>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/' . $item['img']); ?>" alt="">
                                                        </div>
                                                        <div class="author-content">
                                                            <h3><?php echo esc_html($item['name']); ?></h3>
                                                            <span><?php echo esc_html($item['role']); ?></span>
                                                        </div>
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
                </div>
                <div class="rate-and-slider-btn-area">
                    <div class="container one">
                        <div class="rate-and-slider-btn-wrap fade_anim" data-delay=".2">
                            <div class="rate-area">
                                <svg width="70" height="70" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="M35 69.9955C34.7763 69.9955 34.5618 69.9066 34.4036 69.7485C34.2455 69.5903 34.1566 69.3758 34.1566 69.1521V42.1264C31.6518 52.0629 28.8064 60.128 23.6158 60.128C17.3617 60.128 14.5119 48.421 11.5611 35.8389H0.843373C0.619697 35.8389 0.405182 35.75 0.247018 35.5919C0.0888552 35.4337 0 35.2192 0 34.9955C0 34.7718 0.0888552 34.5573 0.247018 34.3992C0.405182 34.241 0.619697 34.1521 0.843373 34.1521H11.1654C8.6267 23.3406 5.71166 11.5497 0.843373 11.5497C0.619697 11.5497 0.405182 11.4609 0.247018 11.3027C0.0888552 11.1445 0 10.93 0 10.7064C0 10.4827 0.0888552 10.2682 0.247018 10.11C0.405182 9.95183 0.619697 9.86298 0.843373 9.86298C7.09749 9.86298 9.94725 21.5702 12.898 34.1521H34.1566V3.36883L31.1205 7.41703C31.054 7.50563 30.9708 7.58028 30.8755 7.6367C30.7802 7.69313 30.6747 7.73024 30.5651 7.7459C30.4554 7.76156 30.3438 7.75548 30.2365 7.72799C30.1292 7.7005 30.0284 7.65215 29.9398 7.5857C29.8512 7.51925 29.7765 7.436 29.7201 7.3407C29.6637 7.2454 29.6265 7.13991 29.6109 7.03027C29.5952 6.92063 29.6013 6.80898 29.6288 6.70169C29.6563 6.59441 29.7046 6.49358 29.7711 6.40498L34.3194 0.340617C34.652 -0.102828 35.3505 -0.109913 35.6806 0.340617L40.2289 6.40498C40.2954 6.49358 40.3437 6.59441 40.3712 6.70169C40.3987 6.80898 40.4048 6.92063 40.3891 7.03027C40.3734 7.13991 40.3363 7.2454 40.2799 7.3407C40.2235 7.436 40.1488 7.51925 40.0602 7.5857C39.9716 7.65215 39.8708 7.7005 39.7635 7.72799C39.6562 7.75548 39.5446 7.76156 39.4349 7.7459C39.3253 7.73024 39.2198 7.69313 39.1245 7.6367C39.0292 7.58028 38.946 7.50563 38.8795 7.41703L35.8434 3.36883V27.8757C38.3489 17.9346 41.1949 9.86281 46.3876 9.86281C52.6407 9.86281 55.4906 21.5707 58.4409 34.152H66.6265L62.5783 31.1158C62.4897 31.0494 62.4151 30.9661 62.3586 30.8708C62.3022 30.7755 62.2651 30.67 62.2494 30.5604C62.2338 30.4508 62.2399 30.3391 62.2673 30.2318C62.2948 30.1245 62.3432 30.0237 62.4096 29.9351C62.4761 29.8465 62.5593 29.7719 62.6546 29.7154C62.7499 29.659 62.8554 29.6219 62.9651 29.6062C63.0747 29.5906 63.1864 29.5966 63.2936 29.6241C63.4009 29.6516 63.5018 29.7 63.5904 29.7664L69.6547 34.3147C70.0943 34.6426 70.0997 35.3512 69.6547 35.6761L63.5904 40.2244C63.5018 40.2909 63.4009 40.3392 63.2936 40.3667C63.1864 40.3942 63.0747 40.4003 62.9651 40.3846C62.8554 40.369 62.7499 40.3319 62.6546 40.2754C62.5593 40.219 62.4761 40.1444 62.4096 40.0558C62.3432 39.9671 62.2948 39.8663 62.2673 39.759C62.2399 39.6517 62.2338 39.5401 62.2494 39.4305C62.2651 39.3208 62.3022 39.2153 62.3586 39.12C62.4151 39.0247 62.4897 38.9415 62.5783 38.875L66.6265 35.8389H58.8363C61.3748 46.6509 64.2888 58.4413 69.1566 58.4413C69.6225 58.4413 70 58.8188 70 59.2847C70 59.7505 69.6225 60.128 69.1566 60.128C62.9037 60.128 60.0541 48.4207 57.1038 35.8389H35.8434V69.1521C35.8434 69.3758 35.7545 69.5903 35.5964 69.7485C35.4382 69.9066 35.2237 69.9955 35 69.9955ZM13.2938 35.8389C15.8325 46.6506 18.7475 58.4413 23.6158 58.4413C28.4841 58.4413 31.3986 46.6509 33.9373 35.8389H13.2938ZM36.0655 34.152H56.7084C54.1699 23.3401 51.2555 11.5496 46.3876 11.5496C41.5191 11.5496 38.6042 23.3403 36.0655 34.152Z"></path>
                                    </g>
                                </svg>
                                <p>We partner with bold brands to create unforgettable identities where <strong>Avg. Retention Rate 98%.</strong></p>
                            </div>
                            <div class="slider-btn-grp">
                                <div class="slider-btn testimonial-slider-prev">
                                    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.69922 15.2938C8.81002 15.2967 8.91931 15.2676 9.01392 15.2098C9.29262 15.0382 9.37752 14.6656 9.20982 14.3872C9.19572 14.3626 7.44402 11.4394 4.10022 9.5998H17.0992C17.4301 9.5998 17.6992 9.3307 17.6992 8.9998C17.6992 8.6689 17.4301 8.3998 17.0992 8.3998H4.10022C7.42542 6.5707 9.19692 3.6346 9.21432 3.6052C9.37842 3.325 9.28752 2.9521 9.00762 2.7862C8.72382 2.6179 8.35002 2.7154 8.18052 3.0007C7.90782 3.4357 5.35062 7.3354 0.763918 8.4145C0.489418 8.482 0.299217 8.7223 0.299217 9.0001C0.299217 9.2779 0.488218 9.5188 0.758818 9.5845C5.36502 10.6675 7.91352 14.5723 8.18892 15.0142C8.29692 15.1873 8.49672 15.2899 8.69922 15.2938Z"></path>
                                    </svg>
                                </div>
                                <div class="slider-btn testimonial-slider-next">
                                    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.30078 15.2938C9.18998 15.2967 9.08069 15.2676 8.98608 15.2098C8.70738 15.0382 8.62248 14.6656 8.79018 14.3872C8.80428 14.3626 10.556 11.4394 13.8998 9.5998H0.900781C0.569881 9.5998 0.300781 9.3307 0.300781 8.9998C0.300781 8.6689 0.569881 8.3998 0.900781 8.3998H13.8998C10.5746 6.5707 8.80308 3.6346 8.78568 3.6052C8.62158 3.325 8.71248 2.9521 8.99238 2.7862C9.27618 2.6179 9.64998 2.7154 9.81948 3.0007C10.0922 3.4357 12.6494 7.3354 17.2361 8.4145C17.5106 8.482 17.7008 8.7223 17.7008 9.0001C17.7008 9.2779 17.5118 9.5188 17.2412 9.5845C12.635 10.6675 10.0865 14.5723 9.81108 15.0142C9.70308 15.1873 9.50328 15.2899 9.30078 15.2938Z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- home3 Testimonial Section End -->
