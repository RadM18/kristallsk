<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<div class="col-md-3">
    	<? $args = array( 
        'menu' => 'sidebar',  
        'menu_id' => 'sidebar-menu', 
        'menu_class' => 'sidebar-menu clearfix', 
        'container' => '', 
        'echo' => true, 
        'depth' => 0 ); 
        wp_nav_menu( $args ); ?>
<? /*<div class="news-sidebar" style="margin-top: 40px;">
    <? $articles = new WP_Query('category=12&posts_per_page=9'); 
        if($articles->have_posts()) { ?>
            <div class="block-news-list">
                <? while($articles->have_posts()) { $articles->the_post();  ?>
                    <div class="block-news-list-item"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
                <? } ?>
            </div>   
    <? } wp_reset_query(); ?>  
</div>*/ ?> 
</div>
<script type="text/javascript">	
    jQuery("#sidebar-menu>li.menu-item-has-children, #sidebar-menu .sub-menu li.menu-item-has-children").append('<i class="fa fa-angle-down" aria-hidden="true"></i>');
    jQuery(document).ready(function() {
        jQuery('#sidebar-menu>li.menu-item-has-children>i').click(function(){
            if(jQuery(this).hasClass("fa-angle-down")){
                //jQuery('#menu-sidebar-menu>li.menu-item-has-children>i.fa-angle-up').removeClass("fa-angle-up").addClass("fa-angle-down").prev("ul").toggle('slow');
                jQuery(this).removeClass("fa-angle-down").addClass("fa-angle-up").prev("ul").toggle('slow');
            }else{
                jQuery(this).removeClass("fa-angle-up").addClass("fa-angle-down").prev("ul").toggle('slow');
            }
        });

        jQuery('#sidebar-menu li.menu-item-has-children>.sub-menu>li.menu-item-has-children>i').click(function(){
            if(jQuery(this).hasClass("fa-angle-down")){
                //jQuery('#menu-sidebar-menu li.menu-item-has-children>.sub-menu>li.menu-item-has-children>i.fa-angle-up').removeClass("fa-angle-up").addClass("fa-angle-down").prev("ul").toggle('slow');
                jQuery(this).removeClass("fa-angle-down").addClass("fa-angle-up").prev("ul").toggle('slow');
            }else{
                jQuery(this).removeClass("fa-angle-up").addClass("fa-angle-down").prev("ul").toggle('slow');
            }
        });
    });			
</script>