<? $pp = get_field('page_parent'); ?>
<div class="exclusive-projects">
    <div class="container">
        <div class="row">
            <h2>ДРУГИЕ ПРОЕКТЫ</h2>
            <div class="block-title-separator">
                <div class="left-line"></div>
                <div class="trapeze"></div>
                <div class="right-line"></div>
            </div>
            <div class="exclusive-projects-items other-project-items projects-slider">
                <?
                $args = array (
                    'post_type' => 'page',
                    'post_status' => 'publish',
                    'post__not_in' => array($post->ID),
                    'meta_key' => 'page_parent',
                    'meta_value' => $pp->ID,
                    'posts_per_page' => -1,
                ); 
                $mainProjects = new WP_Query($args);
                while($mainProjects->have_posts()) { $mainProjects->the_post(); ?>
                <? /*<div class="col-md-3">
                    <div class="exclusive-projects-item">
                        <div class="exclusive-projects-thumb"><img src="<?php echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '&w=250&h=140'); ?>" alt="" class="img-responsive"></div>
                        <div class="exclusive-projects-title"><? the_title(); ?></div>
                        <div class="exclusive-projects-exc"><? the_field('anons', $post->ID); ?></div>
                        <div class="exclusive-projects-more"><a href="<? the_permalink(); ?>">Смотреть></a></div>
                    </div>
                </div> */ ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="products-item">
                                <div class="products-item-thumb"><a href="<? echo get_permalink($post->ID); ?>"><img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '&w=222&h=236'); ?>" alt=""></a></div>
                                <div class="products-item-title"><a href="<? echo get_permalink($post->ID); ?>"><? the_title(); ?></a><br>&nbsp;</div>
                                <div class="product-item-exc">
                                    <? the_field('anons', $post->ID); ?>
                                </div>
                                <? /*<div class="product-item-link">
                                    <a href="<? echo get_permalink($post->ID); ?>">Смотреть</a>
                                </div> */ ?>
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