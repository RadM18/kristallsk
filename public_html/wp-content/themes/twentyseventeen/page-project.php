<?php
/**
 * template name: Проект
 */

get_header(); ?>

<div class="project-wrap">
    <div class="container">
        <div class="row">
            <h1><? if($h1 = get_field('h1')){ echo $h1; } else { the_title(); } ?></h1>
            <div class="block-title-separator">
                    <div class="left-line"></div>
                    <div class="trapeze"></div>
                    <div class="right-line"></div>
            </div>
            <?  $pageParent = get_field('page_parent');
                $parentID = $pageParent->ID; 
                $parentUrl = get_permalink($parentID); ?>
            <script>
                jQuery(document).ready(function(){
                    var parentElement = jQuery('.sidebar-menu').find('a[href^="<?=$parentUrl;?>"]').parents('.sub-menu');
                    var parentListElement = jQuery('.sidebar-menu').find('a[href^="<?=$parentUrl;?>"]').parent();
                    parentListElement.addClass('current-menu-item');
                    parentElement.show();
                });
            </script>        
                    
            <? get_sidebar(); ?>
                <div class="col-md-9">
                                    
            <div class="project-short-info row">
                <div class="col-md-6">
                    <? $thumb = get_field('proj_img'); ?>
                    <div class="project-thumb">
                        <? if($thumb) { ?>
                        <a href="<?=$thumb;?>" class="fncbox"><img src="<? echo kama_thumb_src('src=' . $thumb . '&w=835&h=465'); ?>" alt=""></a>
                        <? } else { ?> 
                        <a href="<? echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="fncbox"><img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '&w=835&h=465'); ?>" alt=""></a>
                        <? } ?>
                    </div>
                    <? if($gallery=get_field('gallery')) { ?>
                        <div class="project-gallery">
                            <? foreach($gallery as $image) { ?>
                                <a href="<?=$image['url'];?>" class="fncbox"><img src="<? echo kama_thumb_src('src=' . $image['url'] . '&w=70&h=46'); ?>"></a>
                            <? } ?>
                        </div>
                        <script>
                            jQuery('.project-gallery').slick({
                                infinite: true,
                                autoplay: true,
                                autoplaySpeed: 3000,
                                slidesToShow: 6,
                                slidesToScroll: 1,
                                arrows: true 
                            });
                        </script>
                    <? } ?>
                    <div class="share-btns">
                        Поделиться: <br>
                        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                        <script src="//yastatic.net/share2/share.js"></script>
                        <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus"></div>    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="project-short-descr">
                        <? while(have_posts()) { the_post(); 
                           the_content();
                        } ?>
                    </div>
                    <div class="btn" onClick="tModalForm.show('frm_price');">УЗНАТЬ СТОИМОСТЬ</div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <h2><? the_field('h2'); ?></h2>
                    <? the_field('full_description'); ?>
                </div>
                <div class="clearfix"></div>
            </div>
            </div>
        </div>
    </div>
</div>

                <?php include(TEMPLATEPATH."/inc/other.php"); ?>

<?php get_footer();
