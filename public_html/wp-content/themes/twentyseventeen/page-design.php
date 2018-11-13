<?php /* template name: Дизайнерам */ get_header(); ?>

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

<?php get_footer();
