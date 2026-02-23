            <!-- home3 Blog Section Start -->
            <div class="home3-blog-section mb-150">
                <div class="container one">
                    <div class="row justify-content-center mb-70">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="section-title text-center">
                                <h2 class="text-anim">Update Journal</h2>
                                <p class="fade_anim" data-delay=".3">We share agency updates, creative process tips, project stories, and thought leadership to inspire brands and creators alike.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid one">
                    <div class="row gy-5">
                        <?php
                        $appluto_home_query = new WP_Query(
                            array(
                                'post_type'           => 'post',
                                'posts_per_page'      => 4,
                                'ignore_sticky_posts' => true,
                            )
                        );

                        if ($appluto_home_query->have_posts()) :
                            $delays = array('.2', '.3', '.4', '.5');
                            $i      = 0;
                            while ($appluto_home_query->have_posts()) :
                                $appluto_home_query->the_post();
                                set_query_var('appluto_card_delay', $delays[$i % count($delays)]);
                                get_template_part('template-parts/content', 'post-card');
                                $i++;
                            endwhile;
                            wp_reset_postdata();
                        else :
                            get_template_part('template-parts/content', 'none');
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <!-- home3 Blog Section End -->
