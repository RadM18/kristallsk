<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="yandex-verification" content="48e8e342dfe66bf6" />
<meta name="yandex-verification" content="6a9333c0c68d0851" />
<meta name="google-site-verification" content="c9Y2tieWTAkhd12FHjw1FxYFtVFfpoc5LbszeCqERtU" />
<meta name="google-site-verification" content="rQxXuXaTLRo5W8oLu3mk_ac5y6543icqUsQfeHeBw34" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/style.css">
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/style1.css">
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/responsive.css">
<link rel="stylesheet" type="text/css" href="<? bloginfo('template_directory'); ?>/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<? bloginfo('template_directory'); ?>/slick/slick-theme.css"/>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://use.fontawesome.com/8aa48b091e.js"></script>
<?php wp_head(); ?>
<script type="text/javascript" src="<? bloginfo('template_directory'); ?>/slick/slick.min.js"></script>
 
</head>
<body>
        <div class="header">
            <div class="top-line">
               <div class="container">
                   <div class="row">
                       <? $args = array( 
                        'menu' => 'top-menu',  
                        'menu_id' => 'top-line-menu', 
                        'menu_class' => 'top-line-menu', 
                        'container' => '', 
                        'echo' => true, 
                        'depth' => 0 ); 
                        wp_nav_menu( $args ); ?>
                        <div class="toggle-button-top">
                           <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                   </div>
               </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="second-line row">
                        <div class="col-md-2 col-sm-6">
                            <div class="logo">
                                <a href="/"><img src="<? bloginfo('template_directory'); ?>/images/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 lg-float-r">
                            <div class="second-line-contacts">
                                <span class="second-line-phone">+7 (985) 975-31-19</span>
                                <span class="second-line-phone">+7 (495) 766-37-63</span>
                                <span class="second-line-work-time">ежедневно с 8 до 24</span>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 float-r-fix">
                            <div class="toggle-button-second">
                               <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>
                            <div class="main-menu">
                               <? $args = array( 
                        'menu' => 'top-menu2',  
                        'menu_id' => 'main-menu-list', 
                        'menu_class' => 'main-menu-list', 
                        'container' => '', 
                        'echo' => true, 
                        'depth' => 0 ); 
                        wp_nav_menu( $args ); ?>
                            </div>
                        </div>
          
                    </div>
                </div>
            </div>
        </div>
        <? if(!is_front_page()) { ?>
            <? if(!get_field('не_выводить')) { ?>
                <div class="brdcrmbs">
                    <div class="container">
                        <div class="row">
                                    <?php if ( function_exists('tBreadcrumbs') ) tBreadcrumbs(); ?>
                        </div>
                    </div>
                </div>
            <? } ?>
        <? } ?>
        <div class="main">

