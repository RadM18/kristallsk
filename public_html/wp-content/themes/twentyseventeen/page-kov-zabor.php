<?php
/* template name: Услуга - Кованые заборы */

get_header(); ?>

    <div class="service-description">
        <div class="container">
            <div class="row">
                <h1><? if($h1 = get_field('h1')){ echo $h1; } else { the_title(); } ?></h1>
                <div class="block-title-separator">
                    <div class="left-line"></div>
                    <div class="trapeze"></div>
                    <div class="right-line"></div>
                </div>
                <? get_sidebar(); ?>
                <div class="col-md-9">
                <div class="service-info">
                        <? if($image = get_field('descr_img')) { ?>
                            <div class="col-md-4">    
                                <div class="border-image-wrap">
                                    <div class="border-image b-t-l"></div>
                                    <img src="<? echo kama_thumb_src('src=' . $image . '&w=366&h=230'); ?>" alt="">
                                </div>
                            </div>
                        <? } ?>
                        <div class="<? if($image) { echo 'col-md-8'; } else { echo 'col-md-12'; } ?> p-l-35">    
                            <div class="service-description-text">
                                <? while(have_posts()) { the_post(); ?>
                                            <? the_content(); ?>
                                <? } ?>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                </div>
                <div class="service-childs">
                    <? $args = array ('post_status'=>'publish', 'post_type'=>'page', 'meta_key'=>'page_parent', 'meta_value'=>$post->ID, 'posts_per_page'=>-1); ?>
                    <? $services = new WP_Query($args); ?>
                    <? while($services-> have_posts()){ $services->the_post(); ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="products-zabor-item">
                                <div class="products-zabor-thumb"><a href="<? echo get_permalink($post->ID); ?>"><img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '&w=460&h=360'); ?>" alt=""></a></div>
                                <div class="products-zabor-title"><a href="<? echo get_permalink($post->ID); ?>"><? the_title(); ?></a></div>
                                <div class="btn"><a href="<? echo get_permalink($post->ID); ?>"><i class="fa fa-calculator" aria-hidden="true"></i>
                                    от <? the_field('zab_price', $post->ID) ?> Р/м2</a></div>
                            </div>
                        </div>
                    <? } wp_reset_query(); ?>
                    <div class="clearfix"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-line" style="background: url(<? bloginfo('template_directory'); ?>/images/form-line.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-line-text">
                       ХОТИТЕ ЗАКАЗАТЬ ЗАБОР?<br>
                        <span>Оставьте свой номер и мы проконсультируем Вас!</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <? echo do_shortcode('[contact-form-7 id="579" title="Позвоните мне"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="service-description">
        <div class="container">
            <div class="row">
                <div class="service-info">
                    <div class="service-description-text">
                        <? the_field('dop_text'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
