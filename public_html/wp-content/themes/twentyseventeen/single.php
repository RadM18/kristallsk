<? get_header(); ?>
    
 <div class="service-description">
        <div class="container">
            <div class="row">
                <h1><?php if ( function_exists('h1_title') ) h1_title(); ?></h1>
                <div class="block-title-separator">
                    <div class="left-line"></div>
                    <div class="trapeze"></div>
                    <div class="right-line"></div>
                </div>
                <div class="col-md-9 col-xs-12">
                    
                        <div class="news-thumb-block">
                            <div class="news-thumb">
                                <img src="<? echo kama_thumb_src('src=' . get_field('news_img') . '&w=570&h=310') ?>" alt="">
                            </div>
                            <? if($newsGal = get_field('news_gallery')){ ?>
                                <div class="news-gallery">
                                    <? foreach($newsGal as $image) { ?>
                                        <div class="news-gallery-item">
                                            <img src="<? echo kama_thumb_src('src=' . $image['url'] . '&w=70&h=46'); ?>">
                                        </div>
                                    <? } ?>
                                </div>
                            <? } ?>
                            <div class="clearfix"></div>
                        </div>
                        <div class="news-content-block">
                            <? while(have_posts()) { the_post();
                                the_content(); 
                             } ?>
                             <div class="news-date">
                                 <? echo get_the_date(); ?>
                             </div>
                             <div class="share-btns">
                                <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                <script src="//yastatic.net/share2/share.js"></script>
                                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus"></div>    
                            </div>
                        </div>                        
                    
                </div>
                <div class="col-md-3 news-sidebar">
                  <? $articles = new WP_Query('category=12&posts_per_page=5'); 
                            if($articles->have_posts()) { ?>
                               <div class="row">
                                   
                                <div class="col-md-12">
                                    <div class="block-news-list">
                                        <? while($articles->have_posts()) { $articles->the_post();  ?>
                                            <div class="block-news-list-item"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
                                        <? } ?>
                                    </div>
                                </div>
                            <div class="clearfix"></div>
                               </div>
                        <? } ?>
                   <? $newsQuery = new WP_Query('cat=11&posts_per_page=2'); ?>
                   <? while($newsQuery->have_posts()){ $newsQuery->the_post(); ?>
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
                   <? } ?>
                   <a class="all-projects" href="<? echo get_category_link(11); ?>">Все новости>></a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

<? get_footer(); ?>