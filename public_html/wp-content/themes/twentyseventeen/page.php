<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

 <div class="service-description">
        <div class="container">
            <div class="row">
                <h1><? if($h1 = get_field('h1')){ echo $h1; } else { the_title(); } ?></h1>
                <div class="block-title-separator">
                    <div class="left-line"></div>
                    <div class="trapeze"></div>
                    <div class="right-line"></div>
                </div><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <? the_content(); ?><?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    <div class="form-line" style="background: url(<? bloginfo('template_directory'); ?>/images/form-line.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-line-text">
                        ВЫ ХОТИТЕ ЗАКАЗАТЬ ЛЕСТНИЦУ?<br>
                        <span>МЫ ВАМ ПЕРЕЗВОНИМ!</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <? echo do_shortcode('[contact-form-7 id="579" title="Позвоните мне"]'); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
