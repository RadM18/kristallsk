<?php
/* template name: VIP */

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
            <div class="col-md-10 col-md-offset-1">    
                <div class="content-block-text">
                    <? while(have_posts()) { the_post();
                       the_content();
                   } ?>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="exclusive-projects" style="padding-top: 0;">
    <div class="container">
        <div class="row">
           <div class="exclusive-projects-items">
               <?
                $args = array (
                    'post_type' => 'page',
                    'post_status' => 'publish',
                    'meta_key' => 'page_parent',
                    'meta_value' => $post->ID,
                    'posts_per_page' => -1
                ); 
                $mainProjects = new WP_Query($args);
                while($mainProjects->have_posts()) { $mainProjects->the_post(); ?>
                <div class="col-md-3">
                    <div class="exclusive-projects-item">
                        <div class="exclusive-projects-thumb"><img src="<? echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt=""></div>
                        <div class="exclusive-projects-title"><? the_title(); ?></div>
                        <div class="exclusive-projects-exc"><? the_field('anons', $post->ID); ?></div>
                        <div class="exclusive-projects-more"><a href="<? the_permalink(); ?>">Смотреть></a></div>
                    </div>
                </div>
                <? } wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>
<div class="form-block">
   <div class="form-block-border">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-block-text">
                        <h3>Дизайнерам, архитекторам и прорабам особые условия!</h3>
                        <p>Подробнее узнайте, позвонив на нашу горячую линию +7 (495) 766-37-63 или заполнив форму:</p>
                    </div>
                    <? echo do_shortcode('[contact-form-7 id="580" title="Узнать условия"]'); ?>
                </div>
            </div>
        </div>
   </div>
</div>
<div class="block-news">
    <div class="container">
        <div class="row">
            <h2>НАШИ НОВОСТИ И ПОЛЕЗНЫЕ СТАТЬИ</h2>
            <div class="block-title-separator">
                <div class="left-line"></div>
                <div class="trapeze"></div>
                <div class="right-line"></div>
            </div>
            <div class="block-news-items">
                  <? $news = new WP_Query('category=11&posts_per_page=3'); ?>
    
                    <? while($news->have_posts()) { $news->the_post(); ?>
                        <div class="col-md-3">
                            <div class="block-news-item">
                                <div class="block-news-thumb"><img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '&w=270&h=140'); ?>" alt=""></div>
                                <div class="block-news-info">
                                    <div class="block-news-title"><? the_title(); ?></div>
                                    <div class="block-news-exc"><? echo kama_excerpt(); ?></div>
                                    <div class="block-news-date"><? echo get_the_date(); ?></div>
                                    <div class="block-news-more"><a href="<? the_permalink(); ?>">читать></a></div>
                                <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                   <? } wp_reset_query(); ?>
                        <div class="col-md-3">
                            <div class="block-news-list">
                                <div class="block-news-list-item"><a href="">Кованые ограждения для лестниц</a></div>
                                <div class="block-news-list-item"><a href="">Металлическая современная лестница — царица любого пространства.</a></div>
                                <div class="block-news-list-item"><a href="">Изготовление металлических лестниц.</a></div>
                                <div class="block-news-list-item"><a href="">Бетонные лестницы</a></div>
                                <div class="block-news-list-item"><a href="">Ограждения балконов и лестниц на второй этаж</a></div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>
<? if(get_field('seo_img')){ ?>
<div class="service-info">
    <div class="container">
       <div class="row">

    <div class="col-md-4">    
        <div class="border-image-wrap p-t-40">
            <div class="border-image b-t-l"></div>
            <img src="<? the_field('seo_img'); ?>" alt="">
        </div>
    </div>
    <div class="col-md-8 p-l-35">    
        <div class="service-description-text">
            <div class="content-block-text">
            <? the_field('seo_text'); ?>
            </div>
        </div>
    </div>
       </div>
    </div>
    <div class="clearfix"></div>
</div>
<? } ?>

<?php get_footer();
