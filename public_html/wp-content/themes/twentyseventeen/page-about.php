<?php
/* template name: О компании */
get_header(); ?>

 <div class="page-heading">
    <div class="container">
        <div class="row">
            <h1><? if($h1 = get_field('h1')){ echo $h1; } else { the_title(); } ?></h1>
            <div class="block-title-separator">
                <div class="left-line"></div>
                <div class="trapeze"></div>
                <div class="right-line"></div>
            </div>

        </div>
    </div>
</div>

<div class="content-block">
    <div class="container content-bg">
        <div class="row">
           <div class="col-md-5"><iframe width="470" height="270" src="https://www.youtube.com/embed/<? the_field('video'); ?>" frameborder="0" allowfullscreen></iframe></div>
           <div class="col-md-7">
               <div class="content-block-text">
                  <? the_field('text_1'); ?>
               </div>
           </div>
           <div class="clearfix"></div>
            <div class="col-md-10 col-md-offset-1">    
                <div class="content-block-text">
                    <? the_field('text_2'); ?>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-5">
                <div class="border-image-wrap">
                    <div class="border-image b-t-l">
                    </div>
                        <img src="<? the_field('img_3'); ?>" alt="">
                </div>
            </div>
            <div class="col-md-7 p-l-35 p-t-40">
                <h2>Репутация компании</h2>
                <div class="content-block-text">
                    <? the_field('text_3'); ?>
                </div>
            </div>
            <div class="clearfix p-t-40"></div>
            <div class="col-md-7">
                <h2>Стоимость изготовления лестниц</h2>
                <div class="content-block-text">
                    <? the_field('text_4'); ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="border-image-wrap">
                    <div class="border-image b-t-r">
                    </div>
                        <img src="<? the_field('img_4'); ?>" alt="">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="dealers-block">
            <div class="container">
                <div class="row">
                    <h2>НАШИ ДИЛЕРЫ</h2>
                    <div class="block-title-separator">
                        <div class="left-line"></div>
                        <div class="trapeze"></div>
                        <div class="right-line"></div>
                    </div>
                    <div class="col-md-8 col-md-offset-2">

                        <div class="dealers-block-logo">
                            <img src="<? bloginfo('template_directory'); ?>/images/dealer1.png" alt="">
                            <img src="<? bloginfo('template_directory'); ?>/images/dealer2.png" alt="">
                            <img src="<? bloginfo('template_directory'); ?>/images/dealer3.png" alt="">
                        </div>
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
<?php include(TEMPLATEPATH."/inc/trusted.php"); ?>
<? if($serts = get_field('serts')) { ?>
    <div class="sert-block">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <? foreach($serts as $sert) { ?>
                            <div class="col-md-4 col-sm-6 col-xs-12 sert-item">
                                <a href="<?=$sert['url']; ?>" class="fncbox"><img src="<? echo kama_thumb_src('src=' . $sert['url'] . '&w=217&h=300'); ?>" alt=""></a>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? } ?>
<?/*
<div class="service-info">
       <div class="container">
           <div class="row">
               
        <div class="col-md-4">    
            <div class="border-image-wrap p-t-40">
                <div class="border-image b-t-l"></div>
                <img src="<? the_field('img_5'); ?>" alt="">
            </div>
        </div>
        <div class="col-md-8 p-l-35">    
            <div class="service-description-text">
                <div class="content-block-text">
                <? the_field('text_5'); ?>
                </div>
            </div>
        </div>
           </div>
       </div>
    <div class="clearfix"></div>
</div>
*/?>
<?php get_footer();
