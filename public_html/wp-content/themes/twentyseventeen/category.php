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
                <div class="col-md-9">
                    <div class="row">
                    <? while(have_posts()) { the_post(); ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
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
                   <? } ?>
				   <?php wp_pagenavi(); ?>
                    </div>                        
                </div>
                <div class="col-md-3 news-sidebar">
                   <div class="row">
                        <? $articles = new WP_Query('category=12&posts_per_page=5'); 
                            if($articles->have_posts()) { ?>
                                <div class="col-md-12">
                                    <div class="block-news-list">
                                        <? while($articles->have_posts()) { $articles->the_post();  ?>
                                            <div class="block-news-list-item"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
                                        <? } ?>
                                    </div>
                                </div>
                            <div class="clearfix"></div>
                        <? } ?>
                    <div class="col-md-12">
                        <h2>Эксклюзивные проекты</h2>
                        <div class="block-title-separator">
                            <div class="left-line"></div>
                            <div class="trapeze"></div>
                            <div class="right-line"></div>
                        </div>
                        <div class="exclusive-projects" style="padding-top: 0;">
                           <div class="exclusive-projects-items">
                               <?
                                $args = array (
                                    'post_type' => 'page',
                                    'post_status' => 'publish',
                                    'meta_key' => 'page_parent',
                                    'meta_value' => 111,
                                    'posts_per_page' => 2
                                ); 
                                $mainProjects = new WP_Query($args);
                                while($mainProjects->have_posts()) { $mainProjects->the_post(); ?>
                                    <div class="exclusive-projects-item">
                                        <div class="exclusive-projects-thumb"><img src="<? echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt=""></div>
                                        <div class="exclusive-projects-title"><? the_title(); ?></div>
                                        <div class="exclusive-projects-exc"><? the_field('anons', $post->ID); ?></div>
                                        <div class="exclusive-projects-more"><a href="<? the_permalink(); ?>">Смотреть></a></div>
                                    </div>
                                <? } wp_reset_query(); ?>
                            </div>
                            <a class="all-projects" href="<? echo get_permalink(111); ?>">Все проекты>></a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

<? get_footer(); ?>