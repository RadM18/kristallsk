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
                <div class="col-md-3 col-sm-6 col-xs-12">
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
               <? $articles = new WP_Query('category=12&posts_per_page=6'); 
                if($articles->have_posts()) { ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="block-news-list">
                        <? while($articles->have_posts()) { $articles->the_post();  ?>
                            <div class="block-news-list-item"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
                        <? } ?>
                    </div>
                </div>
                <div class="clearfix"></div>
                <? } ?>
            </div>
        </div>
    </div>
</div>