<div class="exclusive-projects">
            <div class="container">
                <div class="row">
                    <h2>ЭКСКЛЮЗИВНЫЕ ПРОЕКТЫ</h2>
                    <div class="block-title-separator">
                        <div class="left-line"></div>
                        <div class="trapeze"></div>
                        <div class="right-line"></div>
                    </div>
                    <div class="exclusive-projects-items projects-slider">
                        <?
                        $args = array (
                            'post_type' => 'page',
                            'post_status' => 'publish',
                            'meta_key' => 'page_parent',
                            'meta_value' => 111,
                            'posts_per_page' => -1
                        ); 
                        $mainProjects = new WP_Query($args);
                        while($mainProjects->have_posts()) { $mainProjects->the_post(); ?>
                        <div class="col-md-3">
                            <div class="exclusive-projects-item">
                                <div class="exclusive-projects-thumb"><img src="<?php echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '&w=250&h=140'); ?>" alt="" class="img-responsive"></div>
                                <div class="exclusive-projects-title"><? the_title(); ?></div>
                                <div class="exclusive-projects-exc"><? the_field('anons', $post->ID); ?></div>
                                <div class="exclusive-projects-more"><a href="<? the_permalink(); ?>">Смотреть></a></div>
                            </div>
                        </div>
                        <? } wp_reset_query(); ?>
                    </div>
                        <script>
                            jQuery('.projects-slider').slick({
                                infinite: true,
                                autoplay: true,
                                autoplaySpeed: 3000,
                                slidesToShow: 4,
                                slidesToScroll: 1,
                                arrows: true,
                                responsive: [
                                {
                                  breakpoint: 991,
                                  settings: {
                                    slidesToShow: 2,
                                  }
                                },
                                {
                                  breakpoint: 767,
                                  settings: {
                                    slidesToShow: 1,
                                  }
                                },
                                
                              ]
                            });
                        </script>
                </div>
            </div>
        </div>