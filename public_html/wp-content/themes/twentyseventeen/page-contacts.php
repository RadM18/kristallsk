<?php
/* template name: Контакты */

get_header(); ?>

 <div class="service-description contact-page">
    <div class="container">
        <div class="row">
            <h1><? if($h1 = get_field('h1')){ echo $h1; } else { the_title(); } ?></h1>
            <div class="block-title-separator">
                <div class="left-line"></div>
                <div class="trapeze"></div>
                <div class="right-line"></div>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="content-block">
                    <? while(have_posts()) { the_post(); 
                        the_content();
                    } ?>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4">
                <div class="contact-info">
                    <div class="main-adr contact-line"><? the_field('адрес_2'); ?></div>
                    <div class="second-adr"><? the_field('адрес_1'); ?></div>
                    Более подробную информацию Вы можете узнать у наших операторов.<br>
                    Офис Кристалл СК работает ежедневно<br>
                    с 9:00 - 18:00<br>
                    Тел: <? the_field('телефон_1'); ?><br>
                    <? the_field('телефон_2'); ?><br>
                    Мы в социальных сетях:<br>
                    <ul class="footer-social">
                        <li>
                            <a href="https://vk.com/lestnica_kristallsk">
                                <img class="soc" src="<? bloginfo('template_directory'); ?>/images/vk.png" alt="">
                                <img class="soc-h" src="<? bloginfo('template_directory'); ?>/images/vkh.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="https://ok.ru/group/52618744365202">
                                <img class="soc" src="<? bloginfo('template_directory'); ?>/images/ok.png" alt="">
                                <img class="soc-h" src="<? bloginfo('template_directory'); ?>/images/okh.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/groups/www.kristallsk.ru">
                                <img class="soc" src="<? bloginfo('template_directory'); ?>/images/fb.png" alt="">
                                <img class="soc-h" src="<? bloginfo('template_directory'); ?>/images/fbh.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/wwwkristallskru">
                                <img class="soc" src="<? bloginfo('template_directory'); ?>/images/tw.png" alt="">
                                <img class="soc-h" src="<? bloginfo('template_directory'); ?>/images/twh.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCR2HdudX1zM7eZf7y2xtOXQ">
                                <img class="soc" src="<? bloginfo('template_directory'); ?>/images/yt.png" alt="">
                                <img class="soc-h" src="<? bloginfo('template_directory'); ?>/images/yth.png" alt="">
                            </a>
                        </li>
                    </ul>
                    <div class="contact-text">
                        Обращаем Ваше внимание на то, что данный интернет-сайт и его содержимое носит исключительно информационный характер и ни при каких условиях информационные материалы, каталоги товаров, статьи и цены, размещенные на сайте, не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса РФ.
                    </div>
                    <a href="<? echo get_permalink(553); ?>">Договор оферта</a><br>
                    <a href="<? echo get_permalink(554); ?>">Политика конфиденциальности</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="map-block">
                    <? the_field('карта'); ?>
                </div>
                <div class="map-block2">
                    <? the_field('карта_2'); ?>
                </div>
                <div class="contacts-form-block">
                    <h3>Напишите нам</h3>
                    <? echo do_shortcode('[contact-form-7 id="566" title="Форма в контактах"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery('.main-adr').click(function(){
        jQuery('.map-block2').hide();
        jQuery('.map-block').show();
        jQuery(this).addClass('contact-line');
        jQuery('.second-adr').removeClass('contact-line');
    });
    jQuery('.second-adr').click(function(){
        jQuery('.map-block').hide();
        jQuery('.map-block2').show();
        jQuery(this).addClass('contact-line');
        jQuery('.main-adr').removeClass('contact-line');
    });
</script>
<?php get_footer();
