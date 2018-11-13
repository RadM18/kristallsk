<?php
/* template name: Главная */

get_header(); ?>
<div class="big-image-wrap">
            <div class="big-image">
                <div class="big-image-text">
                    Изготовление лестниц и ограждений<br>
                    <span>PREMIUM</span> класса на заказ
                </div>
                <div class="btn" onClick="tModalForm.show('frm_order');">ВЫЗВАТЬ ЗАМЕРЩИКА</div>
            </div>
        </div>
<div class="adv-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="adv-item">
                    <div class="adv-num">
                        <img src="<? bloginfo('template_directory'); ?>/images/adv1.png" alt="">
                    </div>
                    <div class="adv-text">
                        лет на рынке
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="adv-item">
                    <div class="adv-num">
                        <img src="<? bloginfo('template_directory'); ?>/images/adv2.png" alt="">
                    </div>
                    <div class="adv-text">
                        Собственное производство
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="adv-item">
                    <div class="adv-num">
                        <img src="<? bloginfo('template_directory'); ?>/images/adv3.png" alt="">
                    </div>
                    <div class="adv-text">
                        Уникальные авторские работы
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="catalog-block">
            <div class="container">
                <div class="row">
                    <h2>КАТАЛОГ НАШЕЙ ПРОДУКЦИИ</h2>
					<p>Наша компания Кристал СК предлагает недорогое изготовление лестницы в Москве для дома и дачи, в многоуровневой квартире, в торговом центре или ресторане, которые могут быть не только удобной конструкцией, но и элементом декора, придавать помещению особый шарм, стиль, изюминку.</p>
                    <div class="block-title-separator">
                        <div class="left-line"></div>
                        <div class="trapeze"></div>
                        <div class="right-line"></div>
                    </div>
                    <div class="products row">
                    <? $services = get_field('services'); ?>
                    <? foreach($services as $service){ $post = $service; ?>
                        <? $thumbnail = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                        <div class="products-item-wrap">
                            <div class="products-item">
                                <div class="products-item-thumb"><a href="<? echo get_permalink($post->ID); ?>"><img src="<? if($thumbnail) { echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '&w=162&h=236'); } ?>" alt=""></a></div>
                                <div class="products-item-title"><a href="<? echo get_permalink($post->ID); ?>"><? the_title(); ?></a><br>&nbsp;</div>
                            </div>
                        </div>
                    <? } wp_reset_query(); ?>
                    <div class="clearfix"></div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="form-line" style="background: url(<? bloginfo('template_directory'); ?>/images/form-line.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-line-text">
                            НУЖНА КОНСУЛЬТАЦИЯ?<br>
                            <span>МЫ ВАМ ПЕРЕЗВОНИМ!</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <? echo do_shortcode('[contact-form-7 id="579" title="Позвоните мне"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-block">
            <div class="container content-bg">
                <div class="row">
                        <h1>Лестницы на заказ</h1>
                        <div class="block-title-separator" style="margin-bottom: 20px;">
                            <div class="left-line"></div>
                            <div class="trapeze"></div>
                            <div class="right-line"></div>
                        </div>
                    <div class="col-md-8 col-md-offset-2">    
                        <div class="content-block-text">
                            <? the_field('text_1'); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-5">
                        <div class="border-image-wrap">
                            <div class="border-image b-t-l">
                            </div>
                                <img src="<? the_field('img_2')?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-7 p-l-35 p-t-40">
                        <h2>Виды</h2>
                        <div class="content-block-text">
                            <? the_field('text_2'); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-7">
                        <h2>Где заказать?</h2>
                        <div class="content-block-text">
                            <? the_field('text_3'); ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="border-image-wrap">
                            <div class="border-image b-t-r">
                            </div>
                                <img src="<? the_field('img_3')?>" alt="">
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
        <div class="dop-content-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="border-image-wrap">
                            <div class="border-image b-t-l">
                            </div>
                               <img src="<? the_field('img_4')?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 p-l-35 p-t-20">
                        <h2>Стоимость изготовления</h2>
                        <div class="content-block-text">
                            <? the_field('text_4'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include(TEMPLATEPATH."/inc/news.php"); ?>
        <?php include(TEMPLATEPATH."/inc/trusted.php"); ?>
        
        <div class="card-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text">
                                    Мы позаботились о возможностях наших Клиентов.
                                    Наши Клиенты при оплае услуг с помощью карт  получают бонусы. Собственник карты сможет обменять накопленные бонусы на авиа- и железнодорожные билеты, приобретения путевок,  комбо-туров и т.д.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="<? bloginfo('template_directory'); ?>/images/card.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include(TEMPLATEPATH."/inc/exclusive.php"); ?>
        
        

<?php get_footer();
