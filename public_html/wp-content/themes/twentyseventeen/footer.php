<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
</div>
        <div class="line"></div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-cols">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="footer-logo"><img src="<? bloginfo('template_directory'); ?>/images/logo.png" alt=""></div>
                            <div class="footer-cont-info">
                                <? the_field('адрес_2', 115); ?><br>
                                <? the_field('адрес_1', 115); ?><br>
                                <? the_field('email_1', 115); ?><br>
                                <? the_field('email_2', 115); ?><br>
                                <? the_field('телефон_1', 115); ?><br>
                                <? the_field('телефон_2', 115); ?>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="footer-col-head">Наша продукция</div>
                            <ul class="footer-menu">
								<li><a href="/">Лестницы</a></li>
                                <li><a href="/xudozhestvennaya-kovka/">Художественная ковка</a></li>
                                <li><a href="/balyasiny/">Балясины</a></li>
                                <li><a href="/ograzhdeniya-dlya-lestnic/">Ограждения</a></li>
                                <li><a href="/kovanye-zabory/">Кованые заборы</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12">
                            <div class="footer-col-head">Информация</div>
                            <ul class="footer-menu">
                                <li><a href="/o-kompanii/">О компании</a></li>
                                <li><a href="/novosti-i-stati/">Новости и статьи</a></li>
                                <li><a href="/kontakty/">Контакты</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="footer-col-head">Мы в соцсетях</div>
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
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="footer-info">
                        <div class="col-md-8">
                            <div class="footer-info-text">
                                © 1997-2018 Веб-студия Xpert - разработка сайтов в Москве. Все права сохранены.<br>
                                Фотографии сайта Kristallsk.ru предназначены для ознакомления и частного просмотра.<br> 
                                Материалы представленные на сайте Kristallsk.ru являются частной собственностью компании Кристалл СК.<br>
                                Любое незаконное копирование и распространение преследуется законодательством РФ.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-docs">
                                           <a href="/dogovor-oferta/">Договор оферта</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Окна. В подвал сайта -->
        <div id="tModalForm">
            <div class="overlay" onclick="tModalForm.closeAll();"></div>
            <div class="form-box" id="frm_order">
                <div class="form-close" onclick="tModalForm.closeAll();"></div>
                <div><?php echo do_shortcode('[contact-form-7 id="581" title="Вызвать замерщика"]'); ?></div>
            </div> 
            <div class="form-box" id="frm_price">
                <div class="form-close" onclick="tModalForm.closeAll();"></div>
                <div><?php echo do_shortcode('[contact-form-7 id="3248" title="Узнать стоимость"]'); ?></div>
            </div>
            <div class="form-box" id="frm_apply">
                <div class="form-close" onclick="tModalForm.closeAll();"></div>
                <div><?php echo do_shortcode('[contact-form-7 id="3249" title="Подтвердить заказ"]'); ?></div>
            </div>
        </div>
        <!-- /Окна -->
        <? wp_footer(); ?>
        <script>
            (function($){
				window.tModalForm = {
					overlayBox:'#tModalForm .overlay', formBox:'#tModalForm .form-box',
					show: function(id, flds) {
						var cs = $(window).scrollTop();var wh = window.innerHeight;var hb = $('#'+id).outerHeight();var po = (parseInt(wh) - parseInt(hb)) / 2;
						if( po > 0 ) eo = parseInt(cs) + parseInt(po); else eo = parseInt(cs) + 10;
						$(tModalForm.overlayBox).fadeIn('fast',function(){$('#'+id).animate({'top':eo}, 500);});
						if( flds ) $.each(flds, function(i,v) {if(i && v) $('#'+i).val(v);});
						return false;
					},
					closeAll:function() {
						$(tModalForm.formBox).each(function() {$(this).animate({top:-2000}, 300);});
						$(tModalForm.overlayBox).fadeOut('fast');
						return false;
					}
				};
			})(jQuery);
        </script>
        <script src="<? bloginfo('template_directory'); ?>/js/jquery.maskedinput.min.js"></script>
        <script>
            jQuery( document ).ready(function() {
               jQuery(".wpcf7-tel").mask("+7 (999) 999-99-99",{placeholder:"+7 (___) ___-__-__"});
            });
        </script>
        <script>
    jQuery(document).ready(function(){
        jQuery('.toggle-button-top').click(function(){
            if(jQuery('.top-line-menu').css('display') == 'none') 
            {
                jQuery('.top-line-menu').fadeIn();
            } 
            else 
            {
                jQuery('.top-line-menu').fadeOut();
            }
        });
        jQuery('.toggle-button-second').click(function(){
            if(jQuery('.main-menu-list').css('display') == 'none') 
            {
                jQuery('.main-menu-list').fadeIn();
            } 
            else 
            {
                jQuery('.main-menu-list').fadeOut();
            }
        });
    });
</script>
<script>
    function setEqualHeight(columns){ 
		var tallestcolumn = 0;
		columns.each(
            function(){
                currentHeight = jQuery(this).height();
                if(currentHeight > tallestcolumn){
                    tallestcolumn  = currentHeight;
                }
            }
		);
		columns.height(tallestcolumn);
		tallestcolumn = 0;
		}
    
    jQuery(document).ready(function(){
        setEqualHeight(jQuery('.trusted-logo'));
        setEqualHeight(jQuery('.exclusive-projects-title'));
        setEqualHeight(jQuery('.block-news-title'));
        setEqualHeight(jQuery('.block-news-exc'));
        setEqualHeight(jQuery('.product-item-exc'));
        setEqualHeight(jQuery('.products-item-title'));
        setEqualHeight(jQuery('.exclusive-projects-item'));
        setEqualHeight(jQuery('.products-item'));
    });
    
    jQuery("a.fncbox").fancybox();
</script>
<!-- RedConnect -->
<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
src="https://web.redhelper.ru/service/main.js?c=office51"></script>
<div style="display: none"><a class="rc-copyright" 
href="http://redconnect.ru">Обратный звонок RedConnect</a></div>
<!--/RedConnect -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36695010 = new Ya.Metrika({
                    id:36695010,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36695010" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99776437-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "2924795", type: "pageView", start: (new Date()).getTime()});
(function (d, w, id) {
  if (d.getElementById(id)) return;
  var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
  ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
  var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
  if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=2924795;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
    </body>
</html>